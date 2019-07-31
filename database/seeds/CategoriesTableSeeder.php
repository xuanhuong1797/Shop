<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
use Faker\Factory;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
        DB::table('categories')->truncate();
        $faker = Factory::create();
        
        for ($i=0; $i < 10; $i++) {
            $values = [
                'name' => $faker->text(15),
                'parent_id' => random_int(1, 10),
            ];
            $category = Category::create($values);
            
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
