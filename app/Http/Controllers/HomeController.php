<?php

namespace App\Http\Controllers;

use App\Models\Stacks;
use Illuminate\Http\Request;
use App\Models\Technology;

class HomeController extends Controller
{
    public function index ()
    {
        return view('home');
    }
}