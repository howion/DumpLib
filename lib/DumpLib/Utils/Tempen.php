<?php
namespace DumpLib\Utils;

class Tempen
{
    protected $resourcesDir;

    public function __construct($resourcesDir)
    {
        // INIT RESOURCES DIR
        $this->resourcesDir = $resourcesDir;
    }

    public function render($filename, array $variables)
    {
        // CALCULATE PATH OF THE FILE
        $filename = $this->resourcesDir . DIRECTORY_SEPARATOR . $filename;

        // SANDBOX
        return (function($resourcesDir, $variables, $filename) {
            // START BUFFERING
            ob_start();

            // PREPEARE SCULPT
            $sculpt = new Sculpt($resourcesDir);
            $sculpt->variables = $variables;

            // DO THE RENDERING THING
            include $filename;

            // READ RESULT
            $html = ob_get_clean();

            return $html;
        })($this->resourcesDir, $variables, $filename);
    }
}
