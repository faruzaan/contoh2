<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    public $primaryKey = 'id_tugas';

    protected $table = 'tb_tugas';

    protected $fillable = [
        'id_tugas','id_produk','id_dft_proses','id_user','id_varian'
    ];

    public function user()
    {
        return $this->hasOne('\App\Models\User','id','id_user');
    }
    public function daftarproses()
    {
        return $this->hasOne('\App\Models\DaftarProses','id_dft_proses','id_dft_proses');
    }
    public function produk()
    {
        return $this->hasOne('\App\Models\Produk','id_produk','id_produk');
    }
    public function varian()
    {
        return $this->hasOne('\App\Models\Produk','id_varian','id_varian');
    }
}
