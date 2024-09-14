<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id',
        'user_id',
        'nominal_peminjaman',
        'status',
        'angsuran'
    ];

    public function loan_details()
    {
        return $this->hasMany(LoanDetail::class);
    }
}
