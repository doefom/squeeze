<?php

namespace Doefom\Squeeze\Modifiers;

use Statamic\Modifiers\Modifier;

class Squeeze extends Modifier
{
    /**
     * Remove the following characters from a string:
     * - _
     * - -
     * - /
     * - [whitespace]
     *
     * @param string $value The string to be modified
     * @param array $params Any parameters used in the modifier
     * @param array $context Contextual values
     * @return string
     */
    public function index(string $value, array $params, array $context): string
    {
        $str = str_replace('_', '', $value);
        $str = str_replace('-', '', $str);
        $str = str_replace('/', '', $str);
        return str_replace(' ', '', $str);
    }
}
