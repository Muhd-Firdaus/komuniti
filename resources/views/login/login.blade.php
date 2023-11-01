@extends('layouts\layout2')

@section('title', 'Login - Banci Pertanian')
@section('title2', 'Log masuk Akaun Anda')
@section('title3', 'Login to Your Account')
@section('title4', 'Masukkan email & kata lauan untuk log masuk')
@section('title5', 'Enter your email & password to login')
@section('content')

    <form action="/login" method="POST" class="row g-3 needs-validation" novalidate>
        @csrf
    <div class="col-12">
        <label for="yourEmail" class="form-label">Email Anda / Your Email</label>
        <input type="email" name="email" class="form-control" id="yourEmail" required>
        <div class="invalid-feedback">Sila masukkan alamat email yang sah! <br> Please enter a valid Email adddress!</div>
    </div>

    <div class="col-12">
        <label for="yourPassword" class="form-label">Kata Laluan / Password</label>
        <input type="password" name="password" class="form-control" id="yourPassword" required>
        <div class="invalid-feedback">Sila masukkan kata lauan anda! <br> Please enter your password!</div>
    </div>

    <div class="col-12">
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Ingati saya / Remember me</label>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Login</button>
    </div>
    <div class="col-12">
        <p class="small mb-0">Belum mempunyai Akaun / Don't have account? <a href="/register"><br>Create an account</a></p>
    </div>
    </form>

@endsection