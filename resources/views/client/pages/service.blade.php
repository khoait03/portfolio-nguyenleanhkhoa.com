@extends('client.layouts.master')

@section('header')
    @include('client.includes.header-page')
@endsection

@section('main')
    <!--Breadcrumb Area-->
    <section class="breadcrumb-areav2" data-background="images/banner/6.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bread-titlev2">
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">Dịch vụ</h1>
                        <p class="mt20 wow fadeInUp" data-wow-delay=".4s">
                            Từ Khởi nghiệp đến Doanh nghiệp, hãy sẵn sàng và đừng lo lắng
                            về thiết kế cũng như trải nghiệm người dùng.
                        </p>
                        <a href="#" class="btn-main bg-btn2 lnk mt20 wow zoomInDown" data-wow-delay=".6s">
                            Nhận báo giá
                            <i class="fas fa-chevron-right fa-icon"></i>
                            <span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="techonology-used-">
        <div class="container">
            <ul class="h-scroll tech-icons">
                <li><a href="#"><img src="{{ asset('asset/client/images/icons/stack-icon1.png') }}" alt="icon"></a></li>
                <li><a href="#"><img src="{{ asset('asset/client/images/icons/stack-icon2.png') }}" alt="icon"></a></li>
                <li><a href="#"><img src="{{ asset('asset/client/images/icons/stack-icon3.png') }}" alt="icon"></a></li>
                <li><a href="#"><img src="{{ asset('asset/client/images/icons/stack-icon4.png') }}" alt="icon"></a></li>
                <li><a href="#"><img src="{{ asset('asset/client/images/icons/stack-icon5.png') }}" alt="icon"></a></li>
                <li><a href="#"><img src="{{ asset('asset/client/images/icons/stack-icon6.png') }}" alt="icon"></a></li>
                <li><a href="#"><img src="{{ asset('asset/client/images/icons/stack-icon7.png') }}" alt="icon"></a></li>
                <li><a href="#"><img src="{{ asset('asset/client/images/icons/stack-icon8.png') }}" alt="icon"></a></li>
            </ul>
        </div>
    </div>

    <section class="service-section service-2 pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>DỊCH VỤ CHÚNG TÔI CUNG CẤP</span>
                        <h2 class="mb30">Dịch vụ tiếp thiết kế website, marketing trên internet</h2>
                    </div>
                </div>
            </div>
            <div class="row upset link-hover">
                <div class="col-lg-6 col-sm-6 mt30 wow fadeInUp" data-wow-delay=".2s">
                    <div class="wide-block service-img1" data-tilt data-tilt-max="2" data-tilt-speed="600">
                        <div class="block-space-">
                            <span>PPC</span>
                            <h4>Digital Media & PPC Advertising</h4>
                            <a href="javascript:void(0)">Tìm hiểu thêm <i class="fas fa-chevron-right fa-icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".4s">
                    <div class="wide-block service-img2" data-tilt data-tilt-max="2" data-tilt-speed="600">
                        <div class="block-space-">
                            <span>MARKETING </span>
                            <h4>Content Marketing Service</h4>
                            <a href="javascript:void(0)">Tìm hiểu thêm <i class="fas fa-chevron-right fa-icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".6s">
                    <div class="wide-block service-img3" data-tilt data-tilt-max="2" data-tilt-speed="600">
                        <div class="block-space-">
                            <span>SEO</span>
                            <h4>Search Engine Optimization</h4>
                            <a href="javascript:void(0)">Tìm hiểu thêm <i class="fas fa-chevron-right fa-icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 mt30  wow fadeInUp" data-wow-delay=".8s">
                    <div class="wide-block service-img4" data-tilt data-tilt-max="2" data-tilt-speed="600">
                        <div class="block-space-">
                            <span>WEB DESIGN</span>
                            <h4>Website Design & Development</h4>
                            <a href="javascript:void(0)">Tìm hiểu thêm <i class="fas fa-chevron-right fa-icon"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-cta-btn mt70">
                <div class="free-cta-title v-center  wow zoomInDown" data-wow-delay=".9s">
                    <p>Let's Start A  <span>New Project Together</span></p>
                    <a href="#" class="btn-main bg-btn2 lnk">Request A Quote <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </section>
    <!--End Service-->

    <!--Start work-category-->
    <section class="work-category pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>We Have Worked Across Multiple Industries</span>
                        <h2>Industries We Serve</h2>
                        <p>Successfully delivered digital products Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="row mt30">
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="industry-workfor hoshd">
                        <img src="{{ asset('asset/client/images/icons/house.svg') }}" alt="img">
                        <h6>Real estate</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="industry-workfor hoshd">
                        <img src="{{ asset('asset/client/images/icons/travel-case.svg') }}" alt="img">
                        <h6>Tour &amp; Travels</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="industry-workfor hoshd">
                        <img src="{{ asset('asset/client/images/icons/video-tutorials.svg') }}" alt="img">
                        <h6>Education</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.7s">
                    <div class="industry-workfor hoshd">
                        <img src="{{ asset('asset/client/images/icons/taxi.svg') }}" alt="img">
                        <h6>Transport</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.9s">
                    <div class="industry-workfor hoshd">
                        <img src="{{ asset('asset/client/images/icons/event.svg') }}" alt="img">
                        <h6>Event</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.1s">
                    <div class="industry-workfor hoshd">
                        <img src="{{ asset('asset/client/images/icons/smartphone.svg') }}" alt="img">
                        <h6>eCommerce</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.3s">
                    <div class="industry-workfor hoshd">
                        <img src="{{ asset('asset/client/images/icons/joystick.svg') }}" alt="img">
                        <h6>Game</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.5s">
                    <div class="industry-workfor hoshd">
                        <img src="{{ asset('asset/client/images/icons/healthcare.svg') }}" alt="img">
                        <h6>Healthcare</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.7s">
                    <div class="industry-workfor hoshd">
                        <img src="{{ asset('asset/client/images/icons/money-growth.svg') }}" alt="img">
                        <h6>Finance</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.9s">
                    <div class="industry-workfor hoshd">
                        <img src="{{ asset('asset/client/images/icons/baker.svg') }}" alt="img">
                        <h6>Restaurant</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.1s">
                    <div class="industry-workfor hoshd">
                        <img src="{{ asset('asset/client/images/icons/mobile-app.svg') }}" alt="img">
                        <h6>On-Demand</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.3s">
                    <div class="industry-workfor hoshd">
                        <img src="{{ asset('asset/client/images/icons/groceries.svg') }}" alt="img">
                        <h6>Grocery</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End  work-category-->

    <!--Start Pricing-->
    <section class="pricing-block  pad-tb pb120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading ptag">
                        <span>Our Pricing</span>
                        <h2>Ready to start?</h2>
                        <p class="mb0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table mt60">
                        <div class="inner-table">
                            <img src="{{ asset('asset/client/images/icons/plan-1.svg') }}" alt="Personal"/>
                            <span class="title">Personal</span>
                            <p class="title-sub">Great For Small Business</p>
                            <h2><sup>$</sup> 79.99</h2>
                            <p class="duration">Monthly Package</p>
                            <div class="details">
                                <ul>
                                    <li>Social Media Marketing</li>
                                    <li>2.100 Keywords</li>
                                    <li>One Way Link Building</li>
                                    <li>5 Free Optimization</li>
                                    <li>3 Press Releases</li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table best-plan mt60 bg-gradient4">
                        <div class="inner-table">
                            <img src="{{ asset('asset/client/images/icons/plan-2.svg') }}" alt="Advance"/>
                            <span class="title">Advance</span>
                            <p class="title-sub">Great For Small Business</p>
                            <h2><sup>$</sup> 79.99</h2>
                            <p class="duration">Monthly Package</p>
                            <div class="details">
                                <ul>
                                    <li>Social Media Marketing</li>
                                    <li>2.100 Keywords</li>
                                    <li>One Way Link Building</li>
                                    <li>5 Free Optimization</li>
                                    <li>3 Press Releases</li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="btn-main bg-btn3 lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-table mt60">
                        <div class="inner-table">
                            <img src="{{ asset('asset/client/images/icons/plan-3.svg') }}" alt="Ultimate"/>
                            <span class="title">Ultimate</span>
                            <p class="title-sub">Great For Small Business</p>
                            <h2><sup>$</sup> 79.99</h2>
                            <p class="duration">Monthly Package</p>
                            <div class="details">
                                <ul>
                                    <li>Social Media Marketing</li>
                                    <li>2.100 Keywords</li>
                                    <li>One Way Link Building</li>
                                    <li>5 Free Optimization</li>
                                    <li>3 Press Releases</li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="btn-main bg-btn lnk">Get Started <i class="fas fa-chevron-right fa-icon"></i> <span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Pricing-->
@endsection

