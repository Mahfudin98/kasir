<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,1) as $index) {
            DB::table('posts')->insert([
                'title' =>$faker->sentence(3),
                'body' =>$faker->sentence(500)
            ]);
        }
    }
}
