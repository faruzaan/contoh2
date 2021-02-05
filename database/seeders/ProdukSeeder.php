<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'id_user' => '1',
            'nama_produk' => 'Es Cream',
            'status'=> '0'
        ];
        DB::table('tb_produk')->insert($data);

        $data = [
            'id_user' => '1',
            'nama_produk' => 'Gorengan',
            'status'=> '0'
        ];
        DB::table('tb_produk')->insert($data);
    }
}
