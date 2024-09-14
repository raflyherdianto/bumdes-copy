<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id',
        'loan_id',
        'nominal_pembayaran',
        'status',
        'receipt',
        'awal_bayar',
        'akhir_bayar',
        'keterlambatan',
        'denda',
        'tanggal_pembayaran'
    ];
}
