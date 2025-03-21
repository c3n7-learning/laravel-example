<?php

namespace Tefabi\Example\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tefabi\Example\Models\MyModel;

class MyModelFactory extends Factory
{
    protected $model = MyModel::class;

    public function definition()
    {
        return [
            'name' => fake()->name(),
        ];
    }
}
