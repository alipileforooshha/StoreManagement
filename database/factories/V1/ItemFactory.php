<?php

namespace Database\Factories\V1;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'buy_price' => fake()->numberBetween(1000,200000),
            'sell_price' => fake()->numberBetween(200000,400000),
            'count' => fake()->numberBetween(0,50),
            // 'category_id' => $this->category_id,
            // 'user_id' => $this->user_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
