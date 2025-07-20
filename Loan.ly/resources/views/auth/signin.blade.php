<!-- filepath: c:\laragon\www\Loan.ly\resources\views\auth\signin.blade.php -->
@extends('templates.layout')
@section('bg-image', asset('assets/img/Login.png'))
@section('contents')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- resources/views/auth/signin.blade.php -->
<form method="POST" action="{{ url('/signin') }}" style="background: #fff; border-radius: 16px; padding: 40px 32px; min-width: 350px; box-shadow: 0 4px 24px rgba(0,0,0,0.08);">
    @csrf
    <h2 class="text-center mb-2" style="color: #205781; font-weight: 700;">Login</h2>
    <p class="text-center mb-4" style="color: #444; font-size: 15px;">
        Hey, enter your details to get sign in<br>to your account
    </p>
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0">
                <i class="bi bi-person"></i>
            </span>
            <input type="text" name="email" class="form-control border-start-0" placeholder="Enter Email/Phone no" required>
        </div>
    </div>
    <div class="mb-2">
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0">
                <i class="bi bi-lock"></i>
            </span>
            <input type="password" name="password" class="form-control border-start-0" placeholder="Password" required>
            <span class="input-group-text bg-white border-start-0"></span>
        </div>
    </div>
    <div class="mb-2">
        <small class="text-muted">Having trouble in sign in?</small>
    </div>
    <button type="submit" class="btn w-100 mb-3" style="background: #205781; color: #fff; font-weight: 600; border-radius: 8px;">Sign in</button>
    <div class="text-center" style="font-size: 15px;">
        Don't have an account?
  <a href="{{ url('/signup') }}" style="color: #205781; font-weight: 600;">Sign up</a>
    </div>
</form>
@endsection