<?php

namespace Doefom\Squeeze\Modifiers;

use Statamic\Modifiers\Modifier;
use Statamic\Support\Arr;
use Statamic\Support\Str;

class Squeeze extends Modifier
{

    const DEFAULT_NEEDLES = '_-/ :';

    /**
     * Remove a given set of characters from a string.
     *
     * @param string $value The string to be modified
     * @param array|null $params Any parameters used in the modifier
     * @param array|null $context Contextual values
     * @return string
     */
    public function index(string $value, ?array $params, ?array $context): string
    {
        // The strings to remove from the original string.
        $squeezables = str_split(Arr::get($params, 0, self::DEFAULT_NEEDLES));

        // Go through all needles and replace them with an empty string.
        $str = $value;
        foreach ($squeezables as $squeezable) {
            $str = str_replace($squeezable, '', $str);
        }

        return $str;
    }
}
