<?php

namespace Iamopk\LaravelPackageExample\Tests\Http\Controllers;

use Iamopk\LaravelPackageExample\Tests\TestCase;
use Illuminate\Support\Facades\Route;

class MyControllerTest extends TestCase
{
    /** @test */
    public function it_can_see_controllers_action_output()
    {
        Route::example('my-custom-route');
        $this->get(route('package-example.my-route'))->assertOk()->assertSee('The example!');
    }
}
