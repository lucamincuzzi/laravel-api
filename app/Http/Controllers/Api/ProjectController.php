<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $projects = Project::all();
        return response()->json([
            "results" => $projects,
            "success" => true,
        ]);
    }

    public function show($slug) {
        $project = Project::with('type', 'technologies')->where('slug', $slug)->first();
        return response()->json([
            "results" => $project,
            "success" => true,
        ]);
    }
}
