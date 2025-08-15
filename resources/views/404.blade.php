@extends('layouts.default')

@section('title', '404 - Passion')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-14.webp);">
      <div class="container position-relative">
        <h1>404</h1>
        <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="">Home</a></li>
            <li class="current">404</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Error 404 Section -->
    <section id="error-404" class="error-404 section">

      <div class="container">

        <div class="text-center">
          <div class="error-icon mb-4">
            <i class="bi bi-exclamation-circle"></i>
          </div>

          <h1 class="error-code mb-4">404</h1>

          <h2 class="error-title mb-3">Oops! Page Not Found</h2>

          <p class="error-text mb-4">
            The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
          </p>

          <div class="search-box mb-4">
            <form action="#" class="search-form">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for pages..." aria-label="Search">
                <button class="btn search-btn" type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </form>
          </div>

          <div class="error-action">
            <a href="/" class="btn btn-primary">Back to Home</a>
          </div>
        </div>

      </div>

    </section><!-- /Error 404 Section -->

  </main>

@endsection