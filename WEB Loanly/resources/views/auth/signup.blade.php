<!-- filepath: c:\laragon\www\Loan.ly\resources\views\auth\signup.blade.php -->
@extends('templates.layout')
@section('bg-image', asset('assets/img/Signup.png'))
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
<!-- resources/views/auth/signup.blade.php -->
<form method="POST" action="{{ url('/signup') }}" style="background: #fff; border-radius: 16px; padding: 40px 32px; min-width: 350px; box-shadow: 0 4px 24px rgba(0,0,0,0.08);">
    @csrf
    <h2 class="text-center mb-4" style="color: #205781; font-weight: 700;">Hello people!</h2>
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0">
                <i class="bi bi-person"></i>
            </span>
            <input type="text" name="email" class="form-control border-start-0" placeholder="Enter Email/Phone no" required>
        </div>
    </div>
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0">
                <i class="bi bi-person"></i>
            </span>
            <input type="text" name="nama" class="form-control border-start-0" placeholder="Username" required>
        </div>
    </div>
    <div class="mb-3">
    <div class="input-group">
        <span class="input-group-text bg-white border-end-0">
            <i class="bi bi-phone"></i>
        </span>
        <input type="text" name="ponsel" class="form-control border-start-0" placeholder="Phone Number (optional)">
    </div>
  </div>
    <div class="mb-3">
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0">
                <i class="bi bi-lock"></i>
            </span>
            <input type="password" name="password" class="form-control border-start-0" placeholder="Password" required>
            <span class="input-group-text bg-white border-start-0"></span>
        </div>
    </div>
    <div class="mb-4">
        <div class="input-group">
            <span class="input-group-text bg-white border-end-0">
                <i class="bi bi-lock"></i>
            </span>
            <input type="password" name="password_confirmation" class="form-control border-start-0" placeholder="Confirm Password" required>
            <span class="input-group-text bg-white border-start-0"></span>
        </div>
    </div>
    <button type="submit" class="btn w-100" style="background: #205781; color: #fff; font-weight: 600; border-radius: 8px;">Sign Up</button>
    <div class="text-center mt-3" style="font-size: 15px;">
        Already have an account?
        <a href="{{ url('/') }}" style="color: #205781; font-weight: 600;">Sign in</a>
    </div>
</form>
@endsection