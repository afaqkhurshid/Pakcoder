@extends('layouts.default')

@section('title', 'Portfolio - Passion')

@section('content')

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" style="background-image: url(assets/img/bg/bg-14.webp);">
      <div class="container position-relative">
        <h1>Portfolio Details</h1>
        {{-- <p>Esse dolorum voluptatum ullam est sint nemo et est ipsa porro placeat quibusdam quia assumenda numquam molestias.</p> --}}
        <nav class="breadcrumbs">
          <ol>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="current">Portfolio Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">

      <div class="container">

        <div class="project-header">
          <div class="row">
            <div class="col-lg-7">
              <h1 class="project-title">{{ $project->name }}</h1>
              <div class="project-meta">
                <div class="meta-item">
                  <i class="bi bi-calendar3"></i>
                  {{-- <span>{{ $project->start_date }}</span> --}}
                  <span>{{ \Carbon\Carbon::parse($project->start_date)->format('F jS, Y') }}</span>
                </div>
                <div class="meta-item">
                  <i class="bi bi-calendar3"></i>
                  {{-- <span>{{ $project->end_date }}</span> --}}
                  <span>{{ \Carbon\Carbon::parse($project->end_date)->format('F jS, Y') }}</span>
                </div>
                {{-- <div class="meta-item">
                  <i class="bi bi-building"></i>
                  <span>FinTech Innovations Inc.</span>
                </div> --}}
                
                <div class="meta-item">
                  <i class="bi bi-link-45deg"></i>
                  <a href="{{ $project->website_url }}" target="_blank">{{ $project->website_url }}</a>
                </div>
              </div>
              <div class="project-tags">
                @foreach ($project->stacks as $stack)
                    <span class="tag">{{ $stack->name }}</span>
                  @endforeach
              </div>
            </div>
            <div class="col-lg-5 d-flex align-items-center justify-content-end">
              <div class="technologies">
                <div class="tech-title">Technologies Used:</div>
                <div class="tech-badges">
                  @foreach ($project->technologies as $technology)
                    <span>{{ $technology->name }}</span>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="project-content">
          <div class="row gy-4">
            <div class="col-lg-7">
              <div class="description-box">
                <h3>Project Overview</h3>
                <p class="lead">{!! $project->description !!}</p>
                {{-- <p>Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a nulla porttitor accumsan.</p> --}}
              </div>
            </div>

            <div class="col-lg-5">
              <div class="project-stats">
                <div class="stat-item">
                  <div class="stat-number">{{ $project->active_users }}</div>
                  <div class="stat-label">Active Users</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">{{ $project->client_satisfaction }}%</div>
                  <div class="stat-label">Client Satisfaction</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">{{ $project->months_development }}</div>
                  <div class="stat-label">Months Development</div>
                </div>
                <div class="stat-item">
                  <div class="stat-number">{{ $project->app_store_rating }}</div>
                  <div class="stat-label">App Store Rating</div>
                </div>
              </div>
            </div>
          </div>

          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-card">
                <div class="card-icon">
                  <i class="bi bi-lightbulb"></i>
                </div>
                <h4>The Challenge</h4>
                <p>{!! $project->challenges !!}</p>
              </div>
            </div>

            <div class="col-md-6">
              <div class="info-card">
                <div class="card-icon">
                  <i class="bi bi-trophy"></i>
                </div>
                <h4>The Solution</h4>
                <p>{!! $project->solutions !!}</p>
              </div>
            </div>
          </div>

          <div class="project-gallery">
            <h3>Project Gallery</h3>
            <div class="row g-3">
              @foreach($project->gallery as $image)
                <div class="col-6 col-md-3">
                    <div class="gallery-item">
                        <img src="{{ asset($image->image_path) }}" alt="Project Image" class="img-fluid glightbox">
                    </div>
                </div>
              @endforeach
            </div>
          </div>

          <div class="key-features">
            <h3>Key Features</h3>
            <div class="row g-4">
              <div class="col-md-4">
                <div class="feature-item">
                  <i class="bi bi-shield-check"></i>
                  <h5>Secure Authentication</h5>
                  <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="feature-item">
                  <i class="bi bi-graph-up-arrow"></i>
                  <h5>Real-time Analytics</h5>
                  <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="feature-item">
                  <i class="bi bi-gear-wide-connected"></i>
                  <h5>API Integration</h5>
                  <p>Donec sollicitudin molestie malesuada et, porttitor at sem augue.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="project-navigation">
            <a href="#" class="prev-project">
              <i class="bi bi-arrow-left"></i>
              <span>Previous Project</span>
            </a>
            <a href="#" class="all-projects">
              <i class="bi bi-grid"></i>
              <span>All Projects</span>
            </a>
            <a href="#" class="next-project">
              <span>Next Project</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>

      </div>

    </section><!-- /Portfolio Details Section -->

</main>

@endsection