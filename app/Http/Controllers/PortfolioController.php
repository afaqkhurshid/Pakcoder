<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index ($id)
    {
        // return view('portfolio');
        try {
            // Fetch all projects with their relationships
            $projects = Project::with(['technologies', 'stacks', 'gallery'])->get();
            
            // Or if you want to fetch a specific project for the detail view
            $project = Project::with(['technologies', 'stacks', 'gallery'])
                            ->find($id); // Where $id is the project ID
            return view('portfolio', compact('projects', 'project'));
            
        } catch (\Exception $e) {
            return back()->with('error', 'Error fetching projects: ' . $e->getMessage());
        }
    }
}
