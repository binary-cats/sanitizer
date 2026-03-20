<?php

namespace BinaryCats\Sanitizer\Filters;

use BinaryCats\Sanitizer\Contracts\Filter;

class EscapeHTML implements Filter
{
    /**
     *  Remove HTML tags and encode special characters from the given string.
     *
     * @param  string  $value
     * @return string
     */
    public function apply($value, $options = [])
    {
        return is_string($value) ? htmlspecialchars(strip_tags($value), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8') : $value;
    }
}
