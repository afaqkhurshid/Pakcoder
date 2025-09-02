@extends('layouts.default')

@section('title', 'Login')

@section('content')

    <div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-14.webp);">
      <div class="container position-relative">
        <h1>Login</h1>
        {{-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p> --}}
        <nav class="breadcrumbs">
          <ol>
            <li><a href="">Home</a></li>
            <li class="current">Login</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container py-5 w-full md:w-[500px] mx-auto">
        <h2 class="font-bold text-xl pb-3">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
@endsection
