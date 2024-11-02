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
                        <div class="col-lg-6 mt30">
                            <div class="single-blog-post- shdo">
                                <div class="single-blog-img-">
                                    <a href="#"><img src="{{ asset('asset/client/images/blog/blog-dg-1.jpg') }}" alt="girl" class="img-fluid"></a>
                                    <div class="entry-blog-post dg-bg2">
                                        <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Nodejs</a></span>
                                        <span class="posted-on-">
								<a href="#"><i class="fas fa-clock"></i> Sep 23, 2020</a>
							</span>
                                    </div>
                                </div>
                                <div class="blog-content-tt">
                                    <div class="single-blog-info-">
                                        <h4><a href="#">Everything You Need To Know About Nodejs!</a></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="post-social">
                                        <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                            <div class="ss-inline-share-content">
                                                <div class="ss-social-icons-container">
                                                    <a href="javascript:void(0)">Shares</a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt30">
                            <div class="single-blog-post- shdo">
                                <div class="single-blog-img-">
                                    <a href="#"><img src="{{ asset('asset/client/images/blog/blog-dg-2.jpg') }}" alt="girl" class="img-fluid"></a>
                                    <div class="entry-blog-post bg-gradient12">
                                        <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Laravel</a></span>
                                        <span class="posted-on-">
								<a href="#"><i class="fas fa-clock"></i> Sep 24, 2020</a>
							</span>
                                    </div>
                                </div>
                                <div class="blog-content-tt">
                                    <div class="single-blog-info-">
                                        <h4><a href="#">Exploring the Key Features of Laravel 7 Framework</a></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="post-social">
                                        <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                            <div class="ss-inline-share-content">
                                                <div class="ss-social-icons-container">
                                                    <a href="javascript:void(0)">Shares</a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt30">
                            <div class="single-blog-post- shdo">
                                <div class="single-blog-img-">
                                    <a href="#"><img src="{{ asset('asset/client/images/blog/blog-dg-2.jpg') }}" alt="girl" class="img-fluid"></a>
                                    <div class="entry-blog-post bg-gradient13">
                                        <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Laravel</a></span>
                                        <span class="posted-on-">
								<a href="#"><i class="fas fa-clock"></i> Sep 24, 2020</a>
							</span>
                                    </div>
                                </div>
                                <div class="blog-content-tt">
                                    <div class="single-blog-info-">
                                        <h4><a href="#">Exploring the Key Features of Laravel 7 Framework</a></h4>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="post-social">
                                        <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                            <div class="ss-inline-share-content">
                                                <div class="ss-social-icons-container">
                                                    <a href="javascript:void(0)">Shares</a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                                    <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="recent-post widgets mt30">
                            <!-- Search Form -->
                            <form action="" method="GET" class="mb-3">
                                @csrf
                                <div class="input-group">
                                    <input type="text" name="query" placeholder="Tìm bài viết..." class="form-control">
                                    <button style="border: none" type="submit" class="btn-round- bg-btn2">
                                        <i style="color: white" class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!--Start Recent post-->
                        <div class="recent-post widgets mt30">
                            <h3 class="mb30">Bài đăng gần đây</h3>
                            <div class="media">
                                <div class="post-image bdr-radius">
                                    <a href="#"><img src="{{ asset('asset/client/images/blog/blog-small.jpg') }}" alt="girl" class="img-fluid"></a>
                                </div>
                                <div class="media-body post-info">
                                    <h5><a href="#">Stock Market App Development - Time, Cost, Features</a></h5>
                                    <p>September 24, 2019</p>
                                </div>
                            </div>

                        </div>
                        <!--Start Recent post-->
                        <!--Start Blog Category-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Chuyên mục bài viết</h3>
                            <div class="blog-categories">
                                <ul>
                                    <li>
                                        <a href="#">Business <span class="categories-number">(2)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Financial <span class="categories-number">(3)</span></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <!--End Blog Category-->

                        <!--Start Tags-->
                        <div class="recent-post widgets mt60">
                            <h3 class="mb30">Tags</h3>
                            <div class="tabs">
                                <a href="#">webdesign</a>
                                <a href="#">design </a>
                            </div>
                        </div>
                        <!--End Tags-->

                        <!--Start block for offer/ads-->
                        <div class="offer-image">
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
