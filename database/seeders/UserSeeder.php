<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'id_tipe_user' => '1',
            'nama_depan' => 'Farhan',
            'nama_belakang' => 'Fauzaan',
            'email' => 'farhanff@gmail.com',
            'username' => 'faruzaan',
            'password' => 'Fauzaan'
        ];
        DB::table('users')->insert($data);
    }
}
