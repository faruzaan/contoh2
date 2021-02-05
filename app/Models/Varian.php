<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Varian extends Model
{
    use HasFactory;

    public $primaryKey = 'id_varian';

    protected $table = 'tb_varian';

    protected $fillable = [
        'id_varian','id_produk','nama_varian'
    ];

    public function produk()
    {
        return $this->hasOne('\App\Models\Produk', 'id_produk', 'id_produk');
    }
}
