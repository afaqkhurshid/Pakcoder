<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->only(['number', 'email']);
        $lead = Lead::create($data);
        return response()->json(['success' => true, 'lead' => $lead]);
    }
}
