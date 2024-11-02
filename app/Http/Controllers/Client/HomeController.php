<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('client.home');
    }

    public function project(): View
    {
        return view('client.pages.project');
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
