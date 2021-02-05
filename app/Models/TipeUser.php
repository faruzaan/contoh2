<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipeUser extends Model
{
    // use HasFactory;

    public $primaryKey = 'id_tipe_user';

    protected $table = 'tb_tipe_user';

    protected $fillable = [
        'id_tipe_user','tipe_user'
    ];
}
