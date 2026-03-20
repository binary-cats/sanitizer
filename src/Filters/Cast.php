<?php

namespace BinaryCats\Sanitizer\Filters;

use BinaryCats\Sanitizer\Contracts\Filter;
use Illuminate\Support\Collection;

class Cast implements Filter
{
    /**
     *  Capitalize the given string.
     *
     * @param  string  $value
     * @return string
     */
    public function apply($value, $options = [])
    {
        $type = $options[0] ?? null;

    return match ($type) {
        'int', 'integer'         => (int) $value,
        'real', 'float', 'double' => (float) $value,
        'string'                 => (string) $value,
        'bool', 'boolean'        => (bool) $value,
        'object'                 => is_array($value) ? (object) $value : json_decode($value, false),
        'array'                  => json_decode($value, true),
        'collection'             => new Collection(is_array($value) ? $value : json_decode($value, true)),
        default                  => throw new \InvalidArgumentException("Wrong Sanitizer casting format: {$type}."),
        };
    }
}
