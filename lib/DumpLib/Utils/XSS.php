<?php
namespace DumpLib\Utils;

class XSS
{
    public static function encode($data)
    {
        return str_replace(
            [ '<', '>', '/', '"', '\'' ],
            [ '&#x3C;', '&#x3E;', '&#x2F;', '&#x22;', '&#x27;' ],
            $data
        );
    }
}
