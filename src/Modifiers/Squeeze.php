<?php

namespace Doefom\Squeeze\Modifiers;

use Statamic\Modifiers\Modifier;

class Squeeze extends Modifier
{
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
        $needles = [
            '_',
            '-',
            '/',
            ':',
            ' '
        ];

        // Go through all needles and replace them with an empty string.
        $str = $value;
        foreach ($needles as $needle) {
            $str = str_replace($needle, '', $str);
        }

        return $str;
    }
}
