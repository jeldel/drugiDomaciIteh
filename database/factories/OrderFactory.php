<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Menu;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        $menu = Menu::inRandomOrder()->first();
        return [
            'user_id' => $user->id,
            'menu_id' => $menu->id,
            'menu_name' => $menu->name,
            'quantity' => fake()->numberBetween(1, 10),
            'status' => fake()->randomElement(['pending', 'completed', 'active'])
        ];
    }
}
