<?php
namespace DumpLib\Themes\HowionBlack;

use DumpLib\Themes\Theme;
use DumpLib\Utils\XSS;
use DumpLib\Utils\Tempen;
use DumpLib\Utils\Kind;
use DumpLib\Utils\UTF8;

class HowionBlack extends Theme
{
    const THEME_VERSION = 'v1.0.0';

    const DEFAULT_CHOICES = [
        'title'  => 'DumpLib',
        'zoom'   => 1
    ];

    protected $dumps = '';

    protected $resourcesDir;
    protected $index = 0;
    protected $tempen;

    public function __construct(array $choices = null)
    {
        // CALCULATE RESOURCES PATH
        $this->resourcesDir = __DIR__ . DIRECTORY_SEPARATOR . 'Resources';

        // INIT CHOICES
        $this->choices = $this->normalizeChoices($choices);

        // INIT TEMPLATE ENGINE
        $this->tempen = new Tempen($this->resourcesDir);
    }

    public function cleanPreviousDumps()
    {
        // RESET INDEX
        $this->index = 0;

        // CLEAN PREVIOUS DUMPS
        $this->dumps = '';
    }

    public function dump($val, $kind)
    {
        // COMPUTE AND APPEND HTML VALUE OF THE THE GIVEN VAL
        $this->dumps .= $this->renderDump( $this->dumpValue($val, $kind) ); $this->index++;
    }

    protected function dumpValue($val, $kind)
    {
        // NORMALIZE KIND
        if ($kind === Kind::KIND_BACKTRACE) $kind = Kind::KIND_ARRAY;
        if ($kind === Kind::KIND_CALLABLE)  $kind = Kind::KIND_STRING;

        // TABLES
        if ($kind === Kind::KIND_ARRAY)
        {
            $rows = '';

            foreach ($val as $k => $v)
            {
                $rows .= $this->tempen->render('view/row.html.php', [
                    'row-name' => XSS::encode($k),
                    'row-value' => $this->dumpValue($v, Kind::resolve($v))
                ]);
            }

            $table = $this->tempen->render('view/table.html.php', [
                'table-rows' => $rows
            ]);

            return $this->renderValue( count($val).':'.count($val, COUNT_RECURSIVE) , 'stack', $table);
        }

        // KIND_STR OR KIND_CALLABLE
        if ($kind === Kind::KIND_STRING) return $this->renderValue(XSS::encode($val), null);
        if ($kind === KIND::KIND_NULL) return $this->renderValue(null, 'null');
        if ($kind === KIND::KIND_INT) return $this->renderValue($val, 'int');
        if ($kind === KIND::KIND_DOUBLE) return $this->renderValue($val, 'double');
        if ($kind === KIND::KIND_NAN) return $this->renderValue('NaN', 'double');
        if ($kind === KIND::KIND_POS_INF) return $this->renderValue('+INF', 'double');
        if ($kind === KIND::KIND_NEG_INF) return $this->renderValue('-INF', 'double');
        if ($kind === KIND::KIND_BOOL) return $this->renderValue(($val ? 'true' : 'false'), 'boolean');
        // BASIC SUPPORT FOR OBJECTS
        if ($kind === KIND::KIND_OBJECT) return $this->renderValue(get_class($val), 'object');
        // BASIC SUPPORT FOR RESOURCES
        if ($kind === KIND::KIND_RESOURCE) return $this->renderValue(get_resource_type($val), 'resource');

        // UNKNOWN
        return $this->renderValue(null, 'unknown');
    }

    protected function renderValue($val, $kind, $additional = null)
    {
        return $this->tempen->render('view/value.html.php', [
            'value-kind'  => $kind,
            'value-value' => $val,
            'value-additional' => $additional
        ]);
    }

    protected function renderDump($value)
    {
        return $this->tempen->render('view/dump.html.php', [
            'dump-index' => sprintf('%02d', $this->index),
            'dump-value' => $value,
        ]);
    }

    protected function renderLabel($name, $value, $class)
    {
        return $this->tempen->render('view/label.html.php', [
            'label-class' => $class,
            'label-name' => $name,
            'label-value' => $value,
        ]);
    }

    public function htmlCode()
    {
        // NO DUMP
        if ( $this->dumps === '' ) return false;

        return $this->tempen->render('view/main.html.php', [
            'title' => $this->choices['title'],
            'zoom'  => $this->choices['zoom'],
            'dumps' => $this->dumps
        ]);
    }
}
