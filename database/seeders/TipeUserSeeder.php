<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TipeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'tipe_user' => 'Manager'
        ];
        DB::table('tb_tipe_user')->insert($data);

        $data = [
            'tipe_user' => 'Pegawai'
        ];
        DB::table('tb_tipe_user')->insert($data);
    }
}
