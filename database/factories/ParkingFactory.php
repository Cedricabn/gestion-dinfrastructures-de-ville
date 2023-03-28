<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ParkingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'numPark'=>Str::random(5),
            'nomPark'=>$this->faker->lastName(),
            'localisation'=>$this->faker->address(),
             'capacité'=>rand(5,50),
        ];
    }
}
