<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    protected Blog $blogModel;
    protected BlogCategory $blogCategoryModel;

    public function __construct(Blog $blogModel, BlogCategory $blogCategoryModel)
    {
        $this->blogModel = $blogModel;
        $this->blogCategoryModel = $blogCategoryModel;
    }

    public function index(Request $request): View
    {
        $search = $request->input('tim-kiem');

        $query = $this->blogModel->where('status', 1);

        // Check if there is a search term in the request
        if ($search) {
            $query->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
        }

        $blogs = $query->paginate(9);

        $categories = $this->blogCategoryModel->all();

        $blogNews  =  $this->blogModel
            ->where('status', 1)->limit(6)->get();

        $data = [
            'blogs' => $blogs,
            'categories' => $categories,
            'search' => $search,
            'blogNews' => $blogNews,
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

        $categories = $this->blogCategoryModel->all();

        $blogNews  =  $this->blogModel
            ->where('id', '!=' ,$blog->id)
            ->where('status', 1)->limit(6)->get();

        $data = [
            'blog' => $blog,
            'categories' => $categories,
            'blogNews' => $blogNews,
        ];

        return view('client.blogs.detail', $data);
    }


    public function category(Request $request, $slug)
    {
        // Find the category by slug
        $category = $this->blogCategoryModel->where('slug', $slug)->first();
        if (!$category) {
            abort(404);
        }

        $search = $request->input('tim-kiem');

        // Query blogs associated with the category
        $query = $this->blogModel->where('status', 1)
            ->whereHas('categories', function ($query) use ($category) {
                $query->where('blog_categories.id', $category->id);
            });

        // Apply search filter if search term is provided
        if ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                    ->orWhere('content', 'like', "%{$search}%");
            });
        }

        $blogs = $query->paginate(9);
        $categories = $this->blogCategoryModel->all();

        return view('client.blogs.index', [
            'blogs' => $blogs,
            'categories' => $categories,
            'search' => $search
        ]);
    }


}
