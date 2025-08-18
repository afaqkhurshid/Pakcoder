@extends('layouts.default')

@section('title', 'Add Project - PakCoder')

@section('content')
<div class="page-wrapper">
    <!-- Page title section -->
    <div class="page-title dark-background" style="background-image: url({{ asset('assets/img/bg/bg-14.webp') }});">
        <div class="container position-relative">
            <h1>Add New Project</h1>
            <p>Create a new project entry for your portfolio</p>
        </div>
    </div>

    <!-- Main form content -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card shadow-sm">
                        <div class="card-body p-5">
                            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <!-- Project Basic Info -->
                                <div class="mb-4">
                                    <label for="title" class="form-label">Project Title*</label>
                                    <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                           id="title" name="title" value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="mb-4">
                                    <label for="project_url" class="form-label">Project URL</label>
                                    <input type="url" class="form-control @error('project_url') is-invalid @enderror" 
                                           id="project_url" name="project_url" value="{{ old('project_url') }}">
                                    @error('project_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                {{-- <div class="mb-4">
                                    <label for="description" class="form-label">Project Description*</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                              id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> --}}
                                <div class="mb-4">
                                    <label for="description" class="form-label">Project Description*</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                            id="descriptions" name="description" rows="5" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <!-- Technologies and Stacks in Grid -->
                                <div class="row mb-4">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="technologies" class="form-label ">Technology*</label>
                                        <select class="form-select @error('technologies') is-invalid @enderror" 
                                                id="technologies" name="technologies[]" multiple required>
                                            @foreach($technologies as $tech)
                                                <option value="{{ $tech->id }}" {{ old('technologies') == $tech->id ? 'selected' : '' }}>
                                                    {{ $tech->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('technologies')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="stacks" class="form-label">Project Stack*</label>
                                        <select class="form-select @error('stacks') is-invalid @enderror" 
                                                id="stacks" name="stacks[]" multiple required>
                                            @foreach($stacks as $stack)
                                                <option value="{{ $stack->id }}" {{ old('stacks') == $stack->id ? 'selected' : '' }}>
                                                    {{ $stack->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('stacks')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <!-- Project Stats -->
                                <div class="row mb-4">
                                    <div class="col-md-3 mb-3 mb-md-0">
                                        <label for="active_users" class="form-label">Active Users</label>
                                        <input type="number" class="form-control @error('active_users') is-invalid @enderror" 
                                               id="active_users" name="active_users" value="{{ old('active_users') }}">
                                        @error('active_users')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-3 mb-3 mb-md-0">
                                        <label for="client_satisfaction" class="form-label">Client Satisfaction (%)</label>
                                        <input type="number" min="0" max="100" class="form-control @error('client_satisfaction') is-invalid @enderror" 
                                               id="client_satisfaction" name="client_satisfaction" value="{{ old('client_satisfaction') }}">
                                        @error('client_satisfaction')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-3 mb-3 mb-md-0">
                                        <label for="months_development" class="form-label">Development Months</label>
                                        <input type="number" class="form-control @error('months_development') is-invalid @enderror" 
                                               id="months_development" name="months_development" value="{{ old('months_development') }}">
                                        @error('months_development')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <label for="app_store_rating" class="form-label">App Store Rating</label>
                                        <input type="number" step="0.1" min="0" max="5" class="form-control @error('app_store_rating') is-invalid @enderror" 
                                               id="app_store_rating" name="app_store_rating" value="{{ old('app_store_rating') }}">
                                        @error('app_store_rating')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <!-- Project Challenges & Solutions -->
                                <div class="row mb-4">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="challenges" class="form-label">Challenges Faced</label>
                                        <textarea class="form-control @error('challenges') is-invalid @enderror" 
                                                id="challenges" name="challenges" rows="3">{{ old('challenges') }}</textarea>
                                        @error('challenges')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="solutions" class="form-label">Solutions Implemented</label>
                                        <textarea class="form-control @error('solutions') is-invalid @enderror" 
                                                id="solutions" name="solutions" rows="3">{{ old('solutions') }}</textarea>
                                        @error('solutions')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <!-- Project Dates -->
                                <div class="row mb-4">
                                    <div class="col-md-6 mb-3 mb-md-0">
                                        <label for="start_date" class="form-label">Start Date</label>
                                        <input type="date" class="form-control @error('start_date') is-invalid @enderror" 
                                               id="start_date" name="start_date" value="{{ old('start_date') }}">
                                        @error('start_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="end_date" class="form-label">End Date</label>
                                        <input type="date" class="form-control @error('end_date') is-invalid @enderror" 
                                               id="end_date" name="end_date" value="{{ old('end_date') }}">
                                        @error('end_date')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <!-- Thumbnail Image -->
                                <div class="mb-4">
                                    <label for="thumbnail" class="form-label">Thumbnail Image*</label>
                                    <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" 
                                        id="thumbnail" name="thumbnail" accept=".jpeg,.jpg,.png,.webp" required>
                                    <small class="text-muted">Main thumbnail image for the project (JPG, WebP)</small>
                                    @error('thumbnail')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Additional Images -->
                                <div class="mb-4">
                                    <label for="images" class="form-label">Additional Project Images</label>
                                    <input type="file" class="form-control @error('images.*') is-invalid @enderror" 
                                        id="images" name="images[]" multiple accept=".jpeg,.jpg,.png,.webp">
                                    <small class="text-muted">Upload multiple images (JPG, WebP)</small>
                                    @error('images.*')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Submit Project</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function() {
        $('#technologies').select2();
        $('#stacks').select2();
    });
    ClassicEditor.create(document.querySelector('#descriptions'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection