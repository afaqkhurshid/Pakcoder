<?php

namespace App\Http\Controllers;

use App\Models\ProjectStack;
use Illuminate\Http\Request;
use App\Models\ProjectTechnology;

class HomeController extends Controller
{
    public function index ()
    {
        return view('home');
    }
}