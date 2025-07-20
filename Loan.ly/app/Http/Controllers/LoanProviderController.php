<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loanprovider;

class LoanProviderController extends Controller
{
    // Menampilkan semua data loanproviders
    public function index()
    {
        $providers = Loanprovider::all();
        return view('main.home', compact('providers'));
    }

    // Menampilkan detail satu loanprovider (opsional)
    public function show($id)
    {
        $provider = Loanprovider::findOrFail($id);
        return view('main.moredetails', compact('provider'));
    }
   
    
}