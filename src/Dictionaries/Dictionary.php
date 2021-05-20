<?php

namespace Polion1232\MiscStubs\Dictionaries;

use Illuminate\Support\Arr;

abstract class Dictionary
{
    /**
     * Returns associative array
     *
     * @return array
     */
    abstract public static function getDictionary(): array;

    /**
     * Returns value from dictionary
     *
     * @param string|int $value
     * @param mixed|null $default
     * @return mixed
     */
    public static function getValueData($value, $default = null)
    {
        return Arr::get(static::getDictionary(), $value, $default);
    }

    /**
     * Returns keys
     *
     * @return array
     */
    public static function getRange(): array
    {
        return array_keys(static::getDictionary());
    }

    /**
     * Returns keys as a string using dot notation
     *
     * @return array
     */
    public static function getStringRange(): string
    {
        return implode(',', static::getRange());
    }
}
