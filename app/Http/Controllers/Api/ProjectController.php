<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index()
    {
        // PER IMPLEMENTARE LA PAGINAZIONE
        $projects = Project::with(['type', 'technologies'])->paginate(4);

        // $projects = Project::all();
        //per prendere il nome del tipo e l'array di oggetti 'techonologies'
        // $projects = Project::with(['type', 'technologies'])->get();
        $data = [
            'results' => $projects,
            'success' => true
        ];
        return response()->json($data);
    }


    public function show(string $project)
    {
        //invece di prendere la collection prende il primo
        $project = Project::with(['user', 'type', 'technologies'])->where('slug', $project)->first();
        $data = [
            'results' => $project,
            'success' => true
        ];
        return response()->json($data);
    }
}
