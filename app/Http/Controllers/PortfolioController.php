<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Technology;
use App\Models\Stacks;
use Illuminate\Http\Request;
use App\Models\ProjectTechnologyPivot;

class PortfolioController extends Controller
{
    // public function index ($slug = null, $pname = null)
    // {
    //     // return view('portfolio');
    //     try {
    //         if ($pname) {
    //             // Fetch project with specific id
    //             // $project = Project::with(['technologies', 'stacks', 'gallery'])
    //             //                 ->find($id); // Where $id is the project ID
    //             $project = Project::where('slug', $pname)->with(['technologies', 'stacks', 'gallery'])->first();
    //             // dd($project);
    //             return view('portfolio-id', compact('project'));
    //         } elseif ($slug) {
    //             $technologies = ProjectTechnology::select('id', 'name', 'slug')->get();
    //             $technology_array = [];
    //             foreach ($technologies as $technology) {
    //                 $technology_array[] = $technology->slug;
    //             }
    //             $technology_exists = in_array($slug, $technology_array);
    //             if ($technology_exists == "true") {
    //                 $tData = ProjectTechnology::where('slug', $slug)->first();
    //                 return view('portfolio', compact('tData'));
    //             } else {
    //                 $technology = Stacks::where('slug', $slug)->first();
    //                 return view('portfolio-slug', compact('technology'));
    //             }  
    //         }
    //         else {
    //             // Fetch all projects with their relationships
    //             $data = Project::with(['technologies', 'stacks', 'gallery'])->get();
    //             return view('portfolio', compact('data'));
    //         }           
    //     } catch (\Exception $e) {
    //         return back()->with('error', 'Error fetching projects: ' . $e->getMessage());
    //     }
    // }
    
    public function index ($slug = null, $pname = null)
    {
        try {
            if ($pname) {
                $project = Project::where('slug', $pname)->with(['technologies', 'stacks', 'gallery'])->first();
                return view('portfolio-technology-details', compact('project'));
            }
            if ($slug) {
                $projects = Technology::where('slug', $slug)->first()->projects;
            } else {
                $projects = Project::with(['technologies', 'stacks', 'gallery'])->get();
            }

            return view('portfolio', compact('projects'));

        } catch (\Exception $e) {
            return back()->with('error', 'Error fetching projects: ' . $e->getMessage());
        }
    }

    public function projectStacks ($slug = null, $pname = null)
    {
        try {
            if ($pname) {
                $project = Project::where('slug', $pname)->with(['technologies', 'stacks', 'gallery'])->first();
                return view('portfolio-stack-details', compact('project'));
            }
            if ($slug) {
                $projects = Stacks::where('slug', $slug)->first()->projects;
            } 
            else {
                $projects = Project::with(['technologies', 'stacks', 'gallery'])->get();
            }

            return view('portfolio-stacks', compact('projects'));

        } catch (\Exception $e) {
            return back()->with('error', 'Error fetching projects: ' . $e->getMessage());
        }
    }
}
