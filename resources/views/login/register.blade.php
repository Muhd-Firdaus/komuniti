@extends('layouts\layout2')

@section('title', 'Register - Banci Pertanian')
@section('title2', 'Daftar Akaun')
@section('title3', 'Register Account')
@section('title4', 'Masukkan maklumat peribadi anda untuk mencipta akaun')
@section('title5', 'Enter your personal details to create account')
@section('content')

    <form action="/register" method="POST" class="row g-3 needs-validation" novalidate>
        @csrf
    <div class="col-12">
        <label for="yourName" class="form-label">Nama Anda / Your Name</label>
        <input type="text" name="nama" class="form-control" id="yourName" required>
        <div class="invalid-feedback">Sila masukkan nama anda! <br> Please, enter your name!</div>
    </div>

    <div class="col-12">
        <label for="yourName" class="form-label">IC Anda / Your IC</label>
        <input type="text" name="ic" class="form-control" id="yourIC" required>
        <div class="invalid-feedback">Sila masukkan IC anda! <br> Please, enter your IC!</div>
    </div>

    <div class="col-12">
        <label for="yourEmail" class="form-label">Email Anda / Your Email</label>
        <input type="email" name="email" class="form-control" id="yourEmail" required>
        <div class="invalid-feedback">Sila masukkan alamat email yang sah! <br> Please enter a valid Email adddress!</div>
    </div>

    {{-- <div class="col-12">
        <label for="yourUsername" class="form-label">Username</label>
        <div class="input-group has-validation">
        <span class="input-group-text" id="inputGroupPrepend">@</span>
        <input type="text" name="username" class="form-control" id="yourUsername" required>
        <div class="invalid-feedback">Please choose a username.</div>
        </div>
    </div> --}}

    <div class="col-12">
        <label for="yourPassword" class="form-label">Kata Laluan / Password</label>
        <input type="password" name="password" class="form-control" id="yourPassword" required>
        <div class="invalid-feedback">Sila masukkan kata lauan anda! <br> Please enter your password!</div>
    </div>

    <div class="col-12">
        <div class="form-check">
        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
        <label class="form-check-label" for="acceptTerms">Saya setuju dan terima <a href="#">terma dan syarat ini</a></label>
        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
        <div class="invalid-feedback">Anda harus setuju sebelum mendaftar. <br> You must agree before submitting.</div>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary w-100" type="submit">Cipta Akaun / Create Account</button>
    </div>
    <div class="col-12">
        <p class="small mb-0">Sudah mempunyai akaun / Already have an account? <a href="/login">Log in</a></p>
    </div>
    </form>

@endsection