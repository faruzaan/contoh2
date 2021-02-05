<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    public $primaryKey = 'id_produk';

    protected $table = 'tb_produk';

    protected $fillable = [
        'id_produk','id_user','nama_produk','status'
    ];

    public function user()
    {
        return $this->hasOne('\App\Models\User','id','id_user');
    }
}
