<?php

use Illuminate\Database\Seeder;

class ProduksSeeder extends Seeder
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
        \App\Produk::truncate();
 
        \App\Produk::insert([
            [
                'toko_id'     => 1,
                'nama_barang'  => 'Baju koko',
                'stok'         => 10,
                'harga'        => 50000,
                'hargasatuan' => 150000,
            ],
            [
                'toko_id'     => 1,
                'nama_barang'  => 'Baju Kemeja',
                'stok'         => 20,
                'harga'        => 50000,
                'hargasatuan' => 150000,
            ],
            [
                'toko_id'     => 2,
                'nama_barang'  => 'Baju Kaos',
                'stok'         => 10,
                'harga'        => 50000,
                'hargasatuan' => 150000,
            ],
            [
                'toko_id'     => 2,
                'nama_barang'  => 'Celana Levis',
                'stok'         => 10,
                'harga'        => 50000,
                'hargasatuan' => 150000,
            ],
            [
                'toko_id'     => 3,
                'nama_barang'  => 'Celana Kolor',
                'stok'         => 10,
                'harga'        => 50000,
                'hargasatuan' => 150000,
            ],
            [
                'toko_id'     => 3,
                'nama_barang'  => 'Celana Panjang',
                'stok'         => 10,
                'harga'        => 50000,
                'hargasatuan' => 150000,
            ],
        ]);
 
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        Eloquent::reguard();
    }
}
