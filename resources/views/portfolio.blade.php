@extends('layouts.default')

@section('title', 'Portfolio - Passion')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-14.webp);">
      <div class="container position-relative">
        <h1>Portfolio</h1>
        {{-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p> --}}
        <nav class="breadcrumbs">
          <ol>
            <li><a href="">Home</a></li>
            <li class="current">Portfolio</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- End Page Title -->

  <!-- Project Section -->
    {{-- <section id="contact" class="contact section">
        <div class="container">
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              @foreach ($technology->projects as $project)
                  <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-laravel-symfony">
                      <div class="rounded shadow-sm h-100 d-flex flex-column" style="border: 4px solid #12a16b">
                          <img src="{{ asset($project->thumbnail) }}" class="img-fluid w-100" alt="{{ $project->name }} thumbnail" style="height:250px; object-fit:cover;">
                          <div class="portfolio-info flex-grow-1">
                              <h4>{{ $project->name }}</h4>
                              <button>{{ $technology->name }}</button>
                              <a href="" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                              <a href="{{ $project->website_url }}" class="details-link"> <i class="bi bi-arrow-right-short"></i></a> --}}
                              {{-- <a href="{{ route('portfolio', ['id' => 1]) }}" class="details-link"> <i class="bi bi-arrow-right-short"></i></a> --}}
                          {{-- </div>
                      </div>
                  </div>
              @endforeach
          </div>
        </div>
    </section> --}}
    
    <!-- Project Section -->

    <section id="portfolio" class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- @foreach ($technology->projects as $project) --}}
            {{-- @dd($data->projects); --}}
            @foreach ($projects as $project)
              <div class="bg-white rounded-lg shadow-md overflow-hidden border-4 border-emerald-600 flex flex-col h-full transition-transform duration-300 hover:scale-105">
                  <!-- Project Thumbnail -->
                  <img src="{{ asset($project->thumbnail) }}" class="w-full h-64 object-cover" alt="{{ $project->name }} thumbnail">
                  
                  <!-- Project Info -->
                  <div class="p-4 flex-grow flex flex-col">
                    <div class="flex justify-between items-center">
                      <h4 class="text-xl font-semibold mb-2 text-gray-800">{{ $project->name }}</h4>
                      <a href="{{ route('portfolio', [$project->technologies[0]->slug, $project->slug]) }}"
                        class="hover:border-[1px] hover:border-[#059668] text-black px-2 py-1 rounded-md text-base flex items-center gap-[10px]">
                          <span>Explore More</span><i class="bi bi-arrow-right-short text-lg"></i>
                      </a>
                    </div>
                      
                      <!-- Technology Badge -->
                      <div class="my-3 flex justify-center gap-[10px]">
                        @foreach ($project->technologies as $technology)                        
                          <button class="inline-block bg-[#059668] text-white px-3 py-1 rounded-[10px]">
                              <span class="text-sm">
                                  {{ $technology->name }}
                              </span>
                          </button>
                        @endforeach
                      </div>
                      <!-- Action Button -->
                      {{-- <div class="mt-auto flex justify-center items-center"> --}}
                          <!-- Explore Button -->
                          {{-- <a href="{{ route('portfolio', [$project->technologies[0]->slug, $project->slug]) }}"
                            class="hover:border-[1px] hover:border-[#059668] text-black px-2 py-1 rounded-md text-base flex items-center gap-[10px]">
                              <span>Explore More</span><i class="bi bi-arrow-right-short text-lg"></i>
                          </a> --}}
                      {{-- </div> --}}
                  </div>
              </div>
            @endforeach
        </div>
    </div>
</section>
</main>

@endsection