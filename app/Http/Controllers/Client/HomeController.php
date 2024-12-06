<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index(): View
    {
        $blogNews = Blog::where('status', 1)
                ->orderBy('created_at', 'desc') // Correct ordering
                ->limit(5)
                ->get(); // Execute the query

        $data =  [
            'blogNews' => $blogNews,
        ];

        return view('client.home', $data);
    }


    public function service(): View
    {
        return view('client.pages.service');
    }

    public function contact(): View
    {
        return view('client.pages.contact');
    }

    public function blog(): View
    {
        return view('client.pages.blog');
    }
}
