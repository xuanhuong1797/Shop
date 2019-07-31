<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\ImageProduct;

class ImageProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for ($i=1; $i <= 100; $i++) {
            $image = new ImageProduct();
            $image->image_url = 'images/shop/product'.$faker->numberBetween(1, 12).'.jpg';
            $image->product_id = $i;
            $image->save();
        }
    }
}
