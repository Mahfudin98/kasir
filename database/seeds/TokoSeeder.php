<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;
class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Toko::truncate();
 
        \App\Toko::insert([
            [
                'nama_toko'  => 'Alim Rugi',
                'user_id'    => 1
            ],
            [
                'nama_toko'  => 'Untung Terus',
                'user_id'    => 1
            ],
            [
                'nama_toko'  => 'Warungku',
                'user_id'    => 2
            ],
        ]);
 
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Eloquent::reguard();
    }
}
