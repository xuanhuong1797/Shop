<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('products')->truncate();
        
        for ($i = 0; $i < 100; $i++) {
            $faker = Factory::create();
            $values = [
                'name' => $faker->text(15),
                'price' => $faker->randomNumber(5),
                'description' => $faker->text(),
                'quantity' => $faker->randomNumber(3),
                'brand_id' => random_int(1, 7),
                'category_id' => random_int(1, 10),
            ];
            $product = Product::create($values);
            }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
