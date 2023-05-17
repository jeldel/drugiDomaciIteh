<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use FakerRestaurant\Provider\en_US\Restaurant;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Restaurant($faker));

        return [
            'name' => $faker->foodName(),
            'price' => fake()->randomFloat(2, 0, 2000),
            'description' =>fake()->sentence()
        ];
    }
}
