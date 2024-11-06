<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
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

    public function detail($slug): View
    {
        //Danh sách sản phẩm
        $project = Project::where('slug', $slug)->where('status', 1)->first();

        if(!$project) {
            abort(404);
        }


        $data = [
            'project' => $project,
        ];

        return view('client.projects.detail', $data);
    }
}
