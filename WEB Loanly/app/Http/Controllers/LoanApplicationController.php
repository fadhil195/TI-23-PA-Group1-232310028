<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoanApplication;
use App\Models\Loanprovider;

class LoanApplicationController extends Controller
{
  
public function store(Request $request)
{
    $request->validate([
        'id_pengguna' => 'required|exists:users,id',
        'id_penyedia' => 'required|exists:loanproviders,id',
        'jenis_pinjaman' => 'required|string',
        'jumlah_pinjaman_diminta' => 'required|numeric',
        'jangka_waktu_bulan' => 'required|integer',
        'monthly_payment' => 'required|numeric'
    ]);

    $test = LoanApplication::create([
        'id_pengguna' => $request->id_pengguna,
        'id_penyedia' => $request->id_penyedia,
        'jenis_pinjaman' => $request->jenis_pinjaman,
        'jumlah_pinjaman_diminta' => $request->jumlah_pinjaman_diminta,
        'jangka_waktu_bulan' => $request->jangka_waktu_bulan,
        'status_aplikasi' => 'PENDING',
        'monthly_payment' => $request->monthly_payment
    ]);

    return redirect('/history')->with('success', 'Loan application submitted!');
}
    public function calculate($id)
{
    $provider = LoanProvider::findOrFail($id);
    return view('main.calculate', compact('provider'));
}
public function history()
{
    $userId = auth()->user()->id;
    $applications = LoanApplication::with('loanProvider')
        ->where('id_pengguna', $userId)
        ->orderByDesc('created_at')
        ->get();

    return view('main.history', compact('applications'));
}
    
}