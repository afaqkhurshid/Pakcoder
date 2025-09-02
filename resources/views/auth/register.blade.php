@extends('layouts.default')

@section('title', 'Register')

@section('content')

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-14.webp);">
      <div class="container position-relative">
        <h1>Register</h1>
        {{-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p> --}}
        <nav class="breadcrumbs">
          <ol>
            <li><a href="">Home</a></li>
            <li class="current">Register</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="container py-5 w-full md:w-[500px] mx-auto">
        <h2 class="font-bold text-xl pb-3">Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
@endsection
