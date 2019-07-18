<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = User::create([
            'name' => 'Tran Thi Xuan Huong',
            'email' => 'h@h.com',
            'username' =>'huong',
            'password' => bcrypt('123456'),
            'gender' => 1,
        ]);
        $faker = Faker::create();
        for ($i=0; $i < 10; $i++) {
            User::create([
                'name'=>$faker->name,
                'email' => $faker->email,
                'username' => $faker->word,
                'password' => bcrypt('secret'),
                'gender' => $faker->numberBetween(0, 1),
            ]);
        }
    }
}
