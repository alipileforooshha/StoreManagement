<?php

namespace Database\Factories\V1;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Expense>
 */
class ExpenseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'amount' => fake()->numberBetween(1000,200000),
            'monthly' => '1',
            // 'user_id' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
