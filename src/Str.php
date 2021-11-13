<?php

namespace Arianekarimi\LaravelQuera;

class Str {
    public static function contains ($haystack, $needles)
    {
        foreach ((array) $needles as $needle) {
            if ($needle != '' && mb_stripos($haystack, $needle) !== false) {
                return true;
            }
        }

        return false;
    }

    public static function containsAll ($haystack, array $needles) {
        foreach ($needles as $needle) {
            if (!static::contains($haystack, $needles)) {
                return false;
            }
        }

        return true;
    }
}

