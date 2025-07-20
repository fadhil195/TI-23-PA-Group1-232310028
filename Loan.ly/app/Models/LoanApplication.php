<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    use HasFactory;
    protected $table = 'loan_applications';
    protected $fillable = [
        'id_pengguna',
        'id_penyedia',
        'jenis_pinjaman',
        'jumlah_pinjaman_diminta',
        'jangka_waktu_bulan',
        'status_aplikasi',
        'monthly_payment'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }
    public function loanProvider()
    {
        return $this->belongsTo(LoanProvider::class, 'id_penyedia');
    }
}
