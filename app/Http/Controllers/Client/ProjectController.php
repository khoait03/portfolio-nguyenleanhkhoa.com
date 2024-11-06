<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(): View
    {

        $projects = Project::where('status', 1)->paginate(6);

        $data = [
            'projects' => $projects
        ];

        return view('client.projects.index', $data);
    }

    public function detail(): View
    {
        return view('client.projects.detail');
    }
}
