<?php

namespace App\Providers\SEO;

use App\Models\Blog;
use Illuminate\Support\Facades\View;
use App\Models\SiteSetting;
use Illuminate\Support\ServiceProvider;

class SEOServiceProvider extends ServiceProvider
{

    public function boot()
    {
        // Chia sẻ dữ liệu $settings cho tất cả các view
        View::composer('*', function ($view) {
            $settings = SiteSetting::first();
            $view->with('settings', $settings);

             // Fetch latest blog news
            $blogNews = Blog::where('status', 1)
                ->orderBy('created_at', 'desc') // Correct ordering
                ->limit(5)
                ->get(); // Execute the query
            $view->with('blogNews', $blogNews);
        });


    }
}
