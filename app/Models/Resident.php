<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id',
        'nama',
        'nik',
        'alamat',
        'pekerjaan'
    ];
}
