<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Blog;
use Illuminate\Support\Facades\Mail;
use App\Mail\Client\ContactNotification;
use App\Jobs\SendContactNotification;

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

    public function contactSubmit(Request $request)
    {
        // Mail::to(env('MAIL_ADMIN'))
        // ->send(
        //     new ContactNotification(
        //         $request->input('name'),
        //         $request->input('phone'),
        //         $request->input('email'),
        //         $request->input('service'),
        //         $request->input('message')
        //     )
        // );

        // flash()->success('Email đã được gửi thành công.', [], 'Thành công!');
        // return back();


        // Dữ liệu từ form liên hệ
        $data = $request->only(['name', 'phone', 'email', 'service', 'message']);

        // Dispatch Job
        SendContactNotification::dispatch($data);

        flash()->success('Email đã được gửi thành công.', [], 'Thành công!');
        return back();
    }

    public function blog(): View
    {
        return view('client.pages.blog');
    }
}
