<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasien extends Model
{
    protected $table = 'pasiens';
    protected $fillable = [
        'user_id',
        'nama',
        'tgl_lahir',
        'jk',
        'no_hp',
        'alamat',
    ];
}
