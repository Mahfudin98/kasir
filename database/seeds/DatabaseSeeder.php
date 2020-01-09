<?php

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
        $this->call(PostsTableSeeder::class);
        $this->call(TokoSeeder::Class);
        $this->call(UsersSeeder::Class);
        $this->call(ProduksSeeder::Class);
    }
}