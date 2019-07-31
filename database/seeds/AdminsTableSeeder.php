<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = Admin::create([
            'name' => 'Tran Thi Xuan Huong',
            'email' => 'h@h.com',
            'username' =>'huong',
            'password' => bcrypt('123456'),
            'gender' => 1,
        ]);
    }
}
