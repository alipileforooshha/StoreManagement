<?php

namespace Database\Factories\V1;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\V1\Sale>
 */
class SaleFactory extends Factory
{
    // public $item_id;
    // public $user_id;
    
    // public function __construct($item_id, $user_id)
    // {
    //     $this->item_id = $item_id;
    //     $this->user_id = $user_id;
    // }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sale_price' => fake()->numberBetween(3000,200000),
            'profit' => fake()->numberBetween(30000,200000),
            'number' => fake()->numberBetween(1,5),
            // 'user_id' => $this->user_id,
            // 'item_id' => $this->item_id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
