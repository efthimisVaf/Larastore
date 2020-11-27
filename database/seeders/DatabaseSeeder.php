<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\VatTariff;
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
        VatTariff::create(['tariff' => 'LOW']);
        VatTariff::create(['tariff' => 'HIGH']);

        Category::create(['category_name' => 'fruits']);
        Category::create(['category_name' => 'vegetables']);
        Category::create(['category_name' => 'dairy']);
        Category::create(['category_name' => 'bakery']);
        Category::create(['category_name' => 'beverages']);

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2,0.1, 200),
                'vat_tariff_id' => $faker->numberBetween(1,2),
                'category_id' => $faker->numberBetween(1,5)
            ]);
        }



    }
}
