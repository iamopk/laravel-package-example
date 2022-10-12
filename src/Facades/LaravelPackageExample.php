<?php

namespace Iamopk\LaravelPackageExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Iamopk\LaravelPackageExample\LaravelPackageExample
 */
class LaravelPackageExample extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Iamopk\LaravelPackageExample\LaravelPackageExample::class;
    }
}
