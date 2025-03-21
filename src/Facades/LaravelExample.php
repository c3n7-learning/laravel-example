<?php

namespace Tefabi\LaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tefabi\LaravelExample\LaravelExample
 */
class LaravelExample extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Tefabi\LaravelExample\LaravelExample::class;
    }
}
