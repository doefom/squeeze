<?php

namespace Doefom\Squeeze;

use Doefom\Squeeze\Modifiers\Squeeze;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{

    protected $modifiers = [
        Squeeze::class
    ];

    public function bootAddon()
    {
        //
    }
}
