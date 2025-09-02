<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Support\Str;
use App\Models\Stacks;
use Illuminate\Http\Request;
use App\Models\ProjectGallery;
use App\Models\Technology;
use App\Http\Controllers\Controller;
use App\Models\ProjectTechnologyPivot;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function create()
    {
        $technologies = Technology::all();
        $technologiesArray = [];
        foreach ($technologies as $tech) {
            $technologiesArray [] = [
                'id' => $tech->id,
                'name' => $tech->name,
                'slug' => $tech->slug,
            ];
        }
        $stacks = Stacks::all();
        foreach ($stacks as $stack) {
            $stackArray [] = [
                'id' => $stack->id,
                'name' => $stack->name,
                'slug' => $stack->slug,
            ];
        }
        
        return view('Admin.components.Portfolio.add-project', compact('technologiesArray', 'stackArray'));
    }
    
    public function store(Request $request)
    {
        try {
            // dd($request);
            // Validate the request data
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'project_url' => 'nullable|url',
                'description' => 'required|string',
                'technologies' => 'required|array',
                'technologies.*' => 'exists:technologies,id',
                'stacks' => 'required|array',
                'stacks.*' => 'exists:stacks,id',
                'active_users' => 'nullable|integer',
                'client_satisfaction' => 'nullable|integer|min:0|max:100',
                'months_development' => 'nullable|integer',
                'app_store_rating' => 'nullable|numeric|min:0|max:5',
                'challenges' => 'nullable|string',
                'solutions' => 'nullable|string',
                'start_date' => 'nullable|date',
                'end_date' => 'nullable|date|after_or_equal:start_date',
                'thumbnail' => 'required|file|mimes:jpg,webp|max:2048',
                'images.*' => 'nullable|file|mimes:jpg,webp|max:2048'
            ]);

            // Generate slug from title
            $slug = Str::slug($validated['title']);
            
            // Ensure slug is unique
            $count = Project::where('slug', $slug)->count();
            if ($count > 0) {
                $slug = $slug . '-' . ($count + 1);
            }

            // Handle thumbnail upload
            // $thumbnailPath = $request->file('thumbnail')->store('project-thumbnails', 'public');
            $thumbnailFile = $request->file('thumbnail');
            $thumbnailName = time() . '_' . $thumbnailFile->getClientOriginalName();
            $thumbnailPath = 'project-thumbnails/' . $thumbnailName;
            $thumbnailFile->move(public_path('project-thumbnails'), $thumbnailName);
                
            // Create the project
            $project = Project::create([
                'name' => $validated['title'],
                'slug' => $slug,
                'website_url' => $validated['project_url'],
                'description' => $validated['description'],
                'active_users' => $validated['active_users'],
                'client_satisfaction' => $validated['client_satisfaction'],
                'months_development' => $validated['months_development'],
                'app_store_rating' => $validated['app_store_rating'],
                'challenges' => $validated['challenges'],
                'solutions' => $validated['solutions'],
                'start_date' => $validated['start_date'],
                'end_date' => $validated['end_date'],
                'thumbnail' => $thumbnailPath,
            ]);

            // Attach technologies (many-to-many)
            $project->technologies()->attach($request['technologies']);

            // Attach stacks (many-to-many)
            $project->stacks()->attach($request['stacks']);

            // Handle additional images upload
            if ($request->hasFile('images')) {
                foreach ($request->file('images') as $image) {
                    // $path = $image->store('project-gallery', 'public');
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $path = 'project-gallery/' . $imageName;
                    $image->move(public_path('project-gallery'), $imageName);
                    
                    ProjectGallery::create([
                        'project_id' => $project->id,
                        'image_path' => $path
                    ]);
                }
            }

            return redirect()->route('admin.create')->with('success', 'Project created successfully!');

        } catch (\Illuminate\Validation\ValidationException $e) {
            dd($e->errors());
            return back()->withInput()->with('error', 'Error creating project: ' . $e->getMessage());

        }
    }
}