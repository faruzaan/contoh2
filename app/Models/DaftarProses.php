<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarProses extends Model
{
    use HasFactory;

    public $primaryKey = 'id_dft_proses';

    protected $table = 'tb_dft_proses';

    protected $fillable = [
        'id_dft_proses','nama_proses','tempat_proses'
    ];
}
