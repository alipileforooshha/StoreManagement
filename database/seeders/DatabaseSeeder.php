<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\V1\Category;
use App\Models\V1\Expense;
use App\Models\V1\Item;
use App\Models\V1\Sale;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // User::factory()->has(
        //     Category::factory()->has(
        //         Item::factory()->has(
        //             Sale::factory()->count(20)
        //         ,'sales')->count(10)
        //     ,'items')->count(5)
        // ,'categories')->create();

        User::factory()->count(1)->create()->each(function($user){
            Category::factory()->count(10)->create([
                'user_id' => $user->id
            ])->each(function($category)use($user){
                Item::factory()->count(10)->create([
                    'user_id' => $user->id,
                    'category_id' => $category->id
                ])->each(function($item)use($category,$user){
                    Sale::factory()->count(10)->create([
                        'user_id' => $user->id,
                        'item_id' => $item->id
                    ]);
                });
            });
            Expense::factory()->count(10)->create([
                'user_id' => $user->id
            ]);
        });
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
