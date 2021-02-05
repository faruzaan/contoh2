<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proses extends Model
{
    use HasFactory;

    public $primaryKey = 'id_proses';

    protected $table = 'tb_proses';

    protected $fillable = [
        'id_proses','id_produk','id_dft_proses','id_user','status'
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
}
