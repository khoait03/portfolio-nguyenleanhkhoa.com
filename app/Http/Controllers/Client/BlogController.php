<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    protected Blog $blogModel;

    public function __construct(Blog $blogModel)
    {
        $this->blogModel = $blogModel;
    }

    public function index(): View
    {
        $blogs  =  $this->blogModel->where('status', 1)->paginate(9);

        $data = [
            'blogs' => $blogs
        ];

        return view('client.blogs.index', $data);
    }

    public function detail($slug): View
    {

        $blog  =  $this->blogModel
                    ->where('slug', $slug)
                    ->where('status', 1)->first();

        if(!$blog) {
            abort(404);
        }

        $blogNews  =  $this->blogModel
//            ->where('id', '!=' ,$blog->id)
            ->where('status', 1)->limit(6)->get();

//        dd($blogNews);
        $data = [
            'blog' => $blog,
            'blogNews' => $blogNews,
        ];

        return view('client.blogs.detail', $data);
    }


}
