<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            factory(App\Product::class)
                ->states(['sunglasses', 'new'])
                ->create([
                    'name' => "Sunglasses $i",
                    'image' => $i,
                ]);
        }

        for ($i = 1; $i < 10; $i++) {
            factory(App\Product::class)
                ->states(['sunglasses', 'on_sale'])
                ->create([
                    'name' => "Sunglasses $i",
                    'image' => $i,
                ]);
        }

        for ($i = 1; $i < 10; $i++) {
            factory(App\Product::class)
                ->states(['backpacks', 'best_sellers'])
                ->create([
                    'name' => "Backpack $i",
                    'image' => $i,
                ]);
        }
    }
}
