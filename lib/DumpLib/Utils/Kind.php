<?php
namespace DumpLib\Utils;

class Kind
{
    // STRS
    const KIND_STRING    = 0x00;
    const KIND_CALLABLE  = 0x01;
    // ITERABLES
    const KIND_ARRAY     = 0x10;
    // NUMBERS
    const KIND_INT       = 0x20;
    const KIND_DOUBLE    = 0x21;
    const KIND_NAN       = 0x22;
    const KIND_POS_INF   = 0x23;
    const KIND_NEG_INF   = 0x24;
    // REST
    const KIND_BOOL      = 0x30;
    const KIND_OBJECT    = 0x40;
    const KIND_RESOURCE  = 0x50;
    const KIND_NULL      = 0x60;
    // CUSTOM - UNKNOWN
    const KIND_BACKTRACE = 0x70; // PRE-RESOLVED
    const KIND_OTHER     = 0x71;

    public static function resolve($value)
    {
        if (is_array($value)) return static::KIND_ARRAY;
        if (is_bool($value)) return static::KIND_BOOL;
        if (is_float($value))
        {
            if ($value ===  INF) return static::KIND_POS_INF;
            if ($value === -INF) return static::KIND_NEG_INF;
            if (is_nan($value)) return static::KIND_NAN;
            return static::KIND_DOUBLE;
        }
        if (is_int($value)) return static::KIND_INT;
        if (is_null($value)) return static::KIND_NULL;
        if (is_resource($value)) return static::KIND_RESOURCE;
        if (is_object($value)) return static::KIND_OBJECT;
        if (is_callable($value)) return static::KIND_CALLABLE;
        if (is_string($value)) return static::KIND_STRING;
        return static::KIND_OTHER;
    }
}
