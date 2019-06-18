<?php
namespace DumpLib\Utils;

class UTF8
{
    public static function strlen($str)
    {
        if (static::isMbLoaded()) return mb_strlen($str, 'UTF-8');
        return false;
    }

    public static function isMbLoaded()
    {
      # CHECK IS EXTENSION LOADED
      return extension_loaded('mbstring');
    }
}
