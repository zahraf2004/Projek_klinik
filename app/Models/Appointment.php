<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';

    protected $fillable =[
        'nama',
        'no_hp',
        'alamat',
        'tanggal_lahir',
        'alamat',
        'tanggal',
        'jam',
        'keluhan',
        'status',
        'admin_notes',
        'confirmed_by',
        'confirmed_at',
    ];
}
