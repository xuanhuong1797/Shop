<?php

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
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
        DB::table('brands')->truncate();
        $faker = Factory::create();
        
        for ($i=0; $i < 7; $i++) {
            $values = [
                'name' => $faker->text(15),
                'parent_id' => random_int(1, 7),
            ];
            $category = Brand::create($values);
            
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
