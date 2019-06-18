<?php
namespace DumpLib\Themes;

abstract class Theme
{
    const THEME_VERSION = self::THEME_VERSION; // ABSTRACT CONST

    const DEFAULT_CHOICES = self::DEFAULT_CHOICES; // ABSTRACT CONST

    protected $choices = [];

    abstract public function __construct(array $choices = null);

    abstract public function cleanPreviousDumps();

    abstract public function dump($val, $kind);

    abstract public function htmlCode();

    protected function normalizeChoices($choices)
    {
        // RETURN DEFAULTS IF GIVEN VALUE NULL
        if (is_null($choices)) return static::DEFAULT_CHOICES;

        // CALCULATE CHOICES
        return array_replace(static::DEFAULT_CHOICES, $choices);
    }
}
