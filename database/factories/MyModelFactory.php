<?php

namespace Iamopk\LaravelPackageExample\Database\Factories;

use Iamopk\LaravelPackageExample\Models\MyModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
