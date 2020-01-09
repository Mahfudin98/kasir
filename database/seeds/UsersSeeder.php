<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'  => 'Maman Abdulrahman',
                'email' => 'maman@example.com',
                'password' => bcrypt('admin123'),
            ],
            [
                'name'  => 'Mahfudin Nawawi',
                'email' => 'mahfudin@example.com',
                'password' => bcrypt('admin123'),
            ],
        ]);
    }
}
