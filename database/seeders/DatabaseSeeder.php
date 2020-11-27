<?php

namespace Database\Seeders;

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
        VatTariff::create(['Tariff' => 'LOW']);
        VatTariff::create(['Tariff' => 'HIGH']);

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'price' => $faker->randomFloat(2,0.1, 200),
                'vat_tariff_id' => $faker->numberBetween(1,2)
            ]);
        }



    }
}
