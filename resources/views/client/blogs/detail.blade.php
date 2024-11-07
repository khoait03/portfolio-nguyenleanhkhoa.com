@extends('client.layouts.master')

@section('header')
    @include('client.includes.header-page')
@endsection

@section('main')


<section class="breadcrumb-area banner-2">
    <div class="text-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 v-center">
                    <div class="bread-inner">
                        <div class="bread-menu">
                            <ul>
                                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                                <li><a href="{{ route('blog') }}">Bài viết</a></li>
                            </ul>
                        </div>
                        <div class="bread-title">
                            <h3>
                                @if(isset($blog->categories) && $blog->categories->isNotEmpty())

                                    @foreach($blog->categories as $index => $item)
                                        {{ $item->name }}
                                        @if (!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                @endif
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Breadcrumb Area-->
<!--Start Blog Details-->
<section class="blog-page pad-tb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-header">
                    <h2>{{ $blog->title }}</h2>
                    <div class="row mt20 mb20">
                        <div class="col-md-8 col-9">
                            <div class="media">
                                <p>
                                    <i class="fas fa-clock"></i>
                                    {{ $blog->date_publish->format('d-m-Y') }}

                                    <span>  &nbsp&nbsp&nbsp&nbsp   </span>
                                    <i class="fas fa-user"></i>
                                    Nguyen Le Anh Khoa
                                </p>

                            </div>
                        </div>
                        <div class="col-md-4 col-3">
                            <div class="postwatch">
                                <i class="far fa-eye"></i>
                                {{ $blog->view }}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-set"><img src="{{ get_image_url($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid" /></div>
                <div class="blog-content mt30">
                    {!! $blog->content !!}

                    <div class="row">
                        <div class="col-lg-8 col-md-8 mt30 mb30">
                            <div class="blog-post-tag">
                                <span>Tags liên quan</span>
                                <a href="#">Web Design</a>
                                <a href="#">Marketing</a>
                                <a href="#">SEO</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 mt30 mb30">
                            <div class="blog-share-icon text-left text-md-right">
                                <span>Chia sẽ: </span>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#"><i class="fab fa-vimeo-v"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6 col-md-6 mt30 mb30">
                            <div class="post-navigation text-left ">
                                <span><a href="#">Prev</a></span>
                                <h4><a href="#">Stock Market App Development - Time, Cost, Features</a></h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mt30 mb30">
                            <div class="post-navigation text-left text-md-right">
                                <span><a href="#">Next</a></span>
                                <h4><a href="#">How digital transformation has changed the world.</a></h4>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="author-block">
                    <div class="media">
                        <div class="user-image">
                            <img src="{{ get_image_url('', 'default/khoa_avatar.jpg') }}" alt="nguyenleanhkhoa" class="img-fluid" />
                        </div>
                        <div class="media-body user-info">
                            <h5 class="mb10">Nguyen Khoa</h5>
                            <p>
                                Hy vọng bài viết có thể giúp ích cho mọi người
                            </p>
                        </div>
                    </div>
                </div>
                <div class="comments-block mt60">
                    <h2 class="mb60">Bình luận:</h2>
                    <div class="media">
                        <div class="user-image">
                            <img src="{{ get_image_url('', 'default/khoa_avatar.jpg') }}" alt="girl" class="img-fluid"/>
                        </div>
                        <div class="media-body user-info">
                            <h5 class="mb10">
                                Petey Cruiser <small>says:</small>
                                <span>
                                    November 29, 2019 <a class="reply-btn" href="#"><i class="fas fa-reply"></i></a>
                                </span>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500.</p>
                        </div>
                    </div>
                    <div class="media replied">
                        <div class="user-image">
                            <img src="{{ get_image_url('', 'default/khoa_avatar.jpg') }}" alt="girl" class="img-fluid"/>
                        </div>
                        <div class="media-body user-info">
                            <h5 class="mb10">
                                Petey Cruiser <small>says:</small>
                                <span>
                                    November 29, 2019 <a class="reply-btn" href="#"><i class="fas fa-reply"></i></a>
                                </span>
                            </h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.</p>
                        </div>
                    </div>

                    <div class="form-block form-blog mt60">
                        <form action="#" method="post" name="#">
                            <div class="fieldsets row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Họ tên" name="name" />
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Email" name="email" />
                                </div>
                            </div>
                            <div class="fieldsets row">
                                <div class="col-md-12">
                                    <input type="text" placeholder="Website (Nếu có)" name="Website" />
                                </div>
                            </div>
                            <div class="fieldsets">
                                <textarea placeholder="Nội dung..." name="#"></textarea>
                            </div>
                            <div class="fieldsets mt10">
                                <button type="submit" class="btn-main bg-btn lnk">
                                    Bình luận <i class="fas fa-chevron-right fa-icon"></i>
                                    <span class="circle"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--End Blog Details-->
            <!--Start Sidebar-->
            <div class="col-lg-4">
                <div class="sidebar">
                    <!--Google offer/ads-->
                    <div class="offer-image mt10">

                    </div>
                    <!--End Google ads-->

                    <!--Start Recent post-->
                    <div class="recent-post widgets mt10">
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
                    <!--Start Blog Category-->
                    <div class="recent-post widgets mt60">
                        <h3 class="mb30">Danh mục</h3>
                        <div class="blog-categories">
                            <ul>
                                <li>
                                    <a href="#">Business <span class="categories-number">(2)</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Blog Category-->
                    <!--Start Tags-->
                    <div class="recent-post widgets mt60">
                        <h3 class="mb30">Tags</h3>
                        <div class="tabs">
                            <a href="">webdesign</a>
                        </div>
                    </div>
                    <!--End Tags-->
                    <!--Google offer/ads-->
                    <div class="offer-image mt60">

                    </div>
                    <!--End Google ads-->
                </div>
            </div>
            <!--End Sidebar-->
        </div>
    </div>
</section>


@endsection
