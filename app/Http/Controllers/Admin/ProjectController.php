<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectTechnology;
use App\Models\ProjectStack;
use App\Models\ProjectGallery;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function create()
    {
        $technologies = ProjectTechnology::all();
        $stacks = ProjectStack::all();
        // dd($stacks);
        return view('Admin.add-project', compact('technologies', 'stacks'));
    }
    
    public function store(Request $request)
    {
        // dd([
        //     'thumbnail_is_file' => $request->hasFile('thumbnail'),
        //     'thumbnail_file' => $request->file('thumbnail'),
        //     'images_is_array' => $request->hasFile('images'),
        //     'images_files' => $request->file('images')
        // ]);
        try {
        // Validate the request data
        // $request = $request->validate([
        //     'title' => 'required|string|max:255',
        //     'project_url' => 'nullable|url',
        //     'description' => 'required|string',
        //     'technologies' => 'required|exists:project_technologies,id',
        //     'stacks' => 'required|array',
        //     'stacks.*' => 'exists:project_stacks,id',
        //     'active_users' => 'nullable|integer',
        //     'client_satisfaction' => 'nullable|integer|min:0|max:100',
        //     'months_development' => 'nullable|integer',
        //     'app_store_rating' => 'nullable|numeric|min:0|max:5',
        //     'challenges' => 'nullable|string',
        //     'solutions' => 'nullable|string',
        //     'start_date' => 'nullable|date',
        //     'end_date' => 'nullable|date|after_or_equal:start_date',
        //     'thumbnail' => 'required|file|mimes:jpg,webp|max:2048',
        //     'images.*' => 'nullable|file|mimes:jpg,webp|max:2048'
        // ]);
        // dd($request);

            // Handle thumbnail upload
            $thumbnailPath = $request->file('thumbnail')->store('project-thumbnails', 'public');
            
        // Create the project
        $project = Project::create([
            'name' => $request['title'],
            'website_url' => $request['project_url'],
            'description' => $request['description'],
            // 'technology_id' => $request['technologies'],
            'active_users' => $request['active_users'],
            'client_satisfaction' => $request['client_satisfaction'],
            'months_development' => $request['months_development'],
            'app_store_rating' => $request['app_store_rating'],
            'challenges' => $request['challenges'],
            'solutions' => $request['solutions'],
            'date' => $request['start_date'],
            // 'end_date' => $request['end_date'],
            'thumbnail' => $thumbnailPath,
            // 'slug' => Str::slug($request['title'])
        ]);

        // Attach stacks (many-to-many)
        $project->stacks()->attach($request['stacks']);

        // Handle additional images upload
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('project-gallery', 'public');
                
                ProjectGallery::create([
                    'project_id' => $project->id,
                    'image_path' => $path
                ]);
            }
        }

        return redirect()->route('projects.create')->with('success', 'Project created successfully!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            // This will show you the validation errors
            // dd($e->errors());
            
            // Or to see all request data with errors:
            dd([
                'request_data' => $request->all(),
                'errors' => $e->errors()
            ]);
            
            return back()->withInput()->with('error', 'Error creating project: ' . $e->getMessage());
        }
    }
}