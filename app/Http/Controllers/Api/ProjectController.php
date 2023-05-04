<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Technology;
use App\Models\Project;


class ProjectController extends Controller
{
    public function index()
    {

        $results = Project::all();

        return response()->json([
            'success' => true,
            'results' => $results,
        ]);
    }

    public function show($slug)
    {
        return response()->json([
            'success' => true,
            'project' => $project
        ]);
    
        return response()->json([
            'success' => false,
            'error' => 'Nessun post trovato'
        ]);
    }

}
