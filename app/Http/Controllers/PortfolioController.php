<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ProjectTechnology;
use App\Models\ProjectTechnologyPivot;

class PortfolioController extends Controller
{
    // public function list ()
    // {
    //     // return view('portfolio');
    //     try {
    //         // Fetch all projects with their relationships
    //         // $projects = Project::with(['technologies', 'stacks', 'gallery'])->get();
            
    //         // Or if you want to fetch a specific project for the detail view
    //         // $project = Project::with(['technologies', 'stacks', 'gallery'])
    //         //                 ->find($id); // Where $id is the project ID
    //         // return view('portfolio', compact('projects'));
            
    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Error fetching projects: ' . $e->getMessage());
    //     }
    // }

    public function index ($slug = null, $id = null)
    {
        // return view('portfolio');
        try {
            if ($id) {
                // Fetch project with specific id
                $project = Project::with(['technologies', 'stacks', 'gallery'])
                                ->find($id); // Where $id is the project ID
                return view('portfolio-id', compact('project'));
            } elseif ($slug) {
                $technology = ProjectTechnology::where('slug', $slug)->first();
                return view('portfolio-slug', compact('technology'));
            }
            else {
                // Fetch all projects with their relationships
                $projects = Project::with(['technologies', 'stacks', 'gallery'])->get();
                return view('portfolio', compact('projects'));
            }         
        } catch (\Exception $e) {
            return back()->with('error', 'Error fetching projects: ' . $e->getMessage());
        }
    }
    
    // public function portfolioSlug ($name, $id = null)
    // {
    //     // dd($name);
    //     // return view('portfolio');
    //     try {
    //             if ($id) {
    //                 // Fetch project with specific id
    //                 $project = Project::with(['technologies', 'stacks', 'gallery'])
    //                                 ->find($id); // Where $id is the project ID
    //                 return view('portfolio-id', compact('project'));
    //             } else {
    //                     $technology = ProjectTechnology::where('name', $name)->first();
    //                     // dd($technology->projects[0]);
    //         //             // dd($technologyid->id);
    //         //             // $project_id = ProjectTechnologyPivot::select('id', 'project_id', 'technology_id')->find($projectsid->id);
    //         //             // $projectsid = ProjectTechnologyPivot::where('technology_id', $technology->id)->get();
    //         //             // dd($projectsid);
    //         //             // foreach ($projectsid as $project) {
    //         //             //     $projects = Project::with(['technologies', 'stacks', 'gallery'])->find($project->id);
    //         //             //     return view('portfolio-list', compact('projects'));
    //         //             //     // dd($projects->technologies);
    //         //             // }
    //         //             // Fetch all projects with their relationships
    //         //             // $projects = Project::with(['technologies', 'stacks', 'gallery'])->get();
                        
    //         //             // Or if you want to fetch a specific project for the detail view
    //         //             // $project = Project::with(['technologies', 'stacks', 'gallery'])
    //         //             //                 ->find($id); // Where $id is the project ID
    //                     return view('portfolio-slug', compact('technology'));
    //         //             // return view('portfolio-list', compact('projects'));
    //      } 
    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Error fetching projects: ' . $e->getMessage());
    //     }
    // }
}
