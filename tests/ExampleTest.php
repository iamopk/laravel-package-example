<?php

namespace Iamopk\LaravelPackageExample\Tests;

use Iamopk\LaravelPackageExample\Models\MyModel;

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

    /** @test */
    public function it_can_create_model()
    {
        $myModel = MyModel::factory()->create();
        $this->assertModelExists($myModel);
    }

    /** @test */
    public function it_can_uppercase_of_name_field_of_model()
    {
        $myModel = MyModel::factory()->create(['name' => 'Jonny']);
        $this->assertEquals('JONNY', $myModel->getUppercaseName());
    }
}
