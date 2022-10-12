<?php

namespace Iamopk\LaravelPackageExample\Tests;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_can_output_command()
    {
        $this->artisan('laravel-package-example')->expectsOutput('All done!!!');
    }

    /** @test */
    public function it_can_output_command_with_config_changed()
    {
        config()->set('package-example.aaa', '!!!!!');
        $this->artisan('laravel-package-example')->expectsOutput('All done!!!!!');
    }
}
