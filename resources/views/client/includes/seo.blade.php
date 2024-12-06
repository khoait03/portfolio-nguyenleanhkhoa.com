@if (isset($settings))
    <!-- Title -->
    <title>@yield('title', $settings->seo_title)</title>

    <!-- Basic Meta Tags -->
    <meta name="author" content="@yield('seo_title', $settings->seo_title)">
    <meta name="description" content="@yield('seo_description', $settings->seo_description)">
    <meta name="keywords" content="@yield('seo_keywords', $settings->seo_keywords)">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph / Facebook Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('seo_title', $settings->seo_title)">
    <meta property="og:description" content="@yield('seo_description', $settings->seo_description)">
    <meta property="og:image" content="@yield('seo_image', get_image_url($settings->seo_image, config('image.banner-vieclamphuquoc')))">
    <meta property="og:url" content="{{ url()->current() }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('seo_title', $settings->seo_title)">
    <meta name="twitter:description" content="@yield('seo_description', $settings->seo_description)">
    <meta name="twitter:image" content="@yield('seo_image', get_image_url($settings->seo_image, config('image.banner-vieclamphuquoc')))">

    <!-- Favicon -->
    @php
        $favicon = get_image_url($settings->favicon, config('image.favicon'));

     @endphp
    <link rel="shortcut icon" href="{{ $favicon }}" type="image/x-icon">

    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "{{ $settings->company_name }}",
            "url": "{{ url()->current() }}",
            "logo": "@yield('seo_image', get_image_url($settings->seo_image, config('image.banner-vieclamphuquoc')))",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "{{ $settings->hotline }}",
                "contactType": "Customer Service"
            },
            "sameAs": [
                "{{ $settings->facebook }}",
                "{{ $settings->twitter }}",
                "{{ $settings->instagram }}",
                "{{ $settings->youtube }}"
            ]
        }
    </script>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "BreadcrumbList",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Trang chủ",
              "item": "{{ $settings->website}}"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "Tin tuyển dụng",
              "item": "{{ $settings->website}}"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "Công ty tuyển dụng",
              "item": "{{ $settings->website}}"
            },
            {
              "@type": "ListItem",
              "position": 4,
              "name": "Giới thiệu",
              "item": "{{ $settings->website}}"
            },
            {
              "@type": "ListItem",
              "position": 5,
              "name": "Liên hệ",
              "item": "{{ $settings->website}}"
            }
          ]
        }
    </script>


@endif

