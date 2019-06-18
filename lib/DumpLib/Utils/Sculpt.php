<?php
namespace DumpLib\Utils;

class Sculpt
{
    protected $resourcesDir;
    public $variables = [];

    public function __construct($resourcesDir)
    {
        // INIT RESOURCES DIR
        $this->resourcesDir = $resourcesDir;
    }

    public function fetchFile($filename)
    {
        // CALCULATE PATH OF THE FILE
        $filename = $this->resourcesDir . DIRECTORY_SEPARATOR . $filename;

        // DOES FILE EXISTS IF SO RETURN CONTENTS OF IT
        if (is_file($filename)) return file_get_contents($filename);

        // FAILURE #TODO ERROR MAYBE
        return '';
    }

    public function isset($varname)
    {
        // ISSET OR NOT NULL
        return isset($this->variables[$varname]);
    }

    public function fetch($varname)
    {
        // GET VAR
        return $this->variables[$varname];
    }
}
