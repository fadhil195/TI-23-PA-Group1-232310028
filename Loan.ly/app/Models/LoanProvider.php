<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanProvider extends Model
{
    use HasFactory;
    protected $table = 'loanproviders';
    protected $fillable = [
        'nama_penyedia',
        'rating',
        'apr_min_estimasi',
        'apr_max_estimasi',
        'skor_kredit_min_estimasi',
        'jangka_waktu_max_bulan',
        'deskripsi'
    ];
}
