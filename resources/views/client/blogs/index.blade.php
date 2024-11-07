@extends('client.layouts.master')

@section('header')
    @include('client.includes.header-page')
@endsection

@section('main')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-2">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                                    <li><a >Bài viết</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>Cập nhật những mẹo hay mỗi ngày</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->
    <!--Start Blog Grid-->
    <section class="blog-page pad-tb pt40">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @if(is_object($blogs))
                            @foreach($blogs as $blog)

                                <div class="col-lg-6 mt30">
                                    <div class="single-blog-post- shdo">
                                        <div class="single-blog-img-">
                                            <a href="{{ route('blog.detail', $blog->slug) }}">
                                                <img src="{{ get_image_url($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid">
                                            </a>
                                            <div class="entry-blog-post dg-bg2">
                                                <span class="bypost-">
                                                    <a href="#">
                                                        <i class="fas fa-tag"></i>


                                                        @if(isset($blog->categories) && $blog->categories->isNotEmpty())
                                                            {{ $blog->categories->first()->name }}
                                                        @endif
                                                    </a>
                                                </span>
                                                <span class="posted-on-">
                                                    <a href="#"><i class="fas fa-clock"></i> {{ $blog->date_publish->format('d-m-Y') }}</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="blog-content-tt">
                                            <div class="single-blog-info-">
                                                <h4>
                                                    <a href="{{ route('blog.detail', $blog->slug) }}">
                                                        {{ limit_text($blog->title, 50) }}
                                                    </a>
                                                </h4>

                                                <a style="color: #6A6A8E" href="{{ route('blog.detail', $blog->slug) }}">
                                                    <p>{{ limit_text($blog->content, 115) }}</p>
                                                </a>

                                            </div>
                                            <div class="post-social">
                                                <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                                    <div class="ss-inline-share-content">
                                                        <div class="ss-social-icons-container">
                                                            <a href="javascript:void(0)">Tác giả: Nguyen Le Anh Khoa</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <!--pagination -->
                            <div class="row">
                                <div class="col-lg-12">
                                    {{ $blogs->links('vendor.pagination.custom') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="recent-post widgets mt30">
                            <!-- Search Form -->
                            <form action="{{ route('blog') }}" method="GET" class="mb-3">
                                <div class="input-group">
                                    <input type="text" value="{{ old('search', $search) }}" name="tim-kiem" placeholder="Tìm bài viết..." class="form-control">
                                    <button style="border: none" type="submit" class="btn-round- bg-btn2">
                                        <i style="color: white" class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!--Start Blog Category-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Chuyên mục bài viết</h3>
                            <div class="blog-categories">
                                <ul>
                                    <li>
                                        <a href="{{  route('blog') }}">
                                            Tất cả
                                        </a>
                                    </li>
                                    @if(isset($categories) && is_object($categories))
                                        @foreach($categories as $category)
                                            <li>
                                                <a href="{{  route('blog.category', $category->slug) }}">
                                                    {{ $category->name }}
                                                    <span class="categories-number">({{ $category->blogs->count() }})</span>
                                                </a>
                                            </li>
                                        @endforeach
                                    @endif


                                </ul>
                            </div>
                        </div>
                        <!--End Blog Category-->

                        <!--Start Recent post-->
                        <div class="recent-post widgets mt30">
                            <h3 class="mb30">Bài đăng gần đây</h3>
                            @if(isset($blogNews))

                                @foreach($blogNews as $item)
                                    <div class="media">
                                        <div class="post-image bdr-radius">
                                            <a href="{{ route('blog.detail', $item->slug) }}">
                                                <img src="{{ get_image_url($item->image) }}" alt="" class="img-fluid" />
                                            </a>
                                        </div>
                                        <div class="media-body post-info">
                                            <h5>
                                                <a href="{{ route('blog.detail', $item->slug) }}">
                                                    {{ limit_text($item->title, 65) }}
                                                </a>
                                            </h5>
                                            <p>
                                                <i class="fas fa-clock"></i>
                                                {{ $item->date_publish->format('d-m-Y') }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <!--Start Recent post-->


                        <!--Start block for offer/ads-->
                        <div class="offer-image mt30">
                            <img src="{{ asset('asset/client/images/blog/strategy-guide.jpg') }}" alt="offer" class="img-fluid">
                        </div>
                        <!--End block for offer/ads-->
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!--End Blog Grid-->
@endsection
