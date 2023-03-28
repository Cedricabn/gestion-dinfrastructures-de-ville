<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MarchéFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idmarché'=>Str::random(4),
            'nomMarché'=>$this->faker->firstName(),
            'localisation'=>$this->faker->address(),
            'capacité'=>rand(400,600),
        ];
    }
}
