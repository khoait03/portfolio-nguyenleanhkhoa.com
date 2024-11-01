@extends('client.layouts.master')

@section('main')
    <!--Start Hero-->
    <section class="hero-card-web bg-gradient12 shape-bg3">
        <div class="hero-main-rp container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hero-heading-sec">
                        <h2 class="wow fadeIn" data-wow-delay="0.3s"><span>Web.</span> <span>Mobile.</span> <span>Graphic.</span> <span>Marketing.</span></h2>
                        <p class="wow fadeIn" data-wow-delay="0.6s">Website and App development solution for transforming and innovating businesses.</p>
                        <a href="case-study.html" class="niwax-btn2 wow fadeIn"  data-wow-delay="0.8s">View Case Studies <i class="fas fa-chevron-right fa-ani"></i></a>
                        <div class="awards-block-tt  wow fadeIn" data-wow-delay="1s"><img src="{{ asset('asset/client/images/hero/awards-logo.png') }}" alt="awards-logo" class="img-fluid"/></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-content-sec wow fadeIn" data-wow-delay="0.8s">
                        <div class="video-intro-pp"><a class="video-link play-video" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><span class="triangle-play"></span></a></div>
                        <div class="title-hero-oth">
                            <p>We design digital solutions <span>for brands and companies</span></p>
                        </div>
                    </div>
                    <div class="hero-right-scmm">
                        <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                            <div class="owl-carousel service-card-prb">
                                <div class="service-slide card-bg-a" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="{{ asset('asset/client/images/service/vr.png') }}">
                                            </div>
                                            <div class="title-serv-c"><span>VR</span> Solution</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-slide card-bg-b" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="{{ asset('asset/client/images/service/app-develop.png') }}">
                                            </div>
                                            <div class="title-serv-c"><span>Custom</span> App Solution</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-slide card-bg-c" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="{{ asset('asset/client/images/service/startup.png') }}">
                                            </div>
                                            <div class="title-serv-c"><span>Startup</span> Solution</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-slide card-bg-d" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="{{ asset('asset/client/images/service/car-rental.png') }}">
                                            </div>
                                            <div class="title-serv-c"><span>Car</span> Rental Solution</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-slide card-bg-e" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="{{ asset('asset/client/images/service/marketing.png') }}">
                                            </div>
                                            <div class="title-serv-c"><span>Marketing</span> Solution</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-slide card-bg-f" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="{{ asset('asset/client/images/service/ewallet.png') }}">
                                            </div>
                                            <div class="title-serv-c"><span>e-Wallet</span> Solution</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->

    <!--Start Location-->
    <section class="our-office pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Our Locations</span>
                        <h2>Our Office</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center upset shape-numm">
                <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
                    <div class="office-card">
                        <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                            <img src="{{ asset('asset/client/images/location/newyork.png') }}" alt="New York" class="img-fluid" />
                        </div>
                        <div class="office-text">
                            <h4>New York</h4>
                            <p>603 FA Forest Avenue, New York, USA 10021</p>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".5s">
                    <div class="office-card">
                        <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                            <img src="{{ asset('asset/client/images/location/sydeny.png') }}" alt="sydney" class="img-fluid" />
                        </div>
                        <div class="office-text">
                            <h4>Sydney</h4>
                            <p>2449 Columbia Boulevard, Sydney, 10021</p>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".8s">
                    <div class="office-card mb0">
                        <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                            <img src="{{ asset('asset/client/images/location/rome.png') }}" alt="rome" class="img-fluid" />
                        </div>
                        <div class="office-text">
                            <h4>Rome</h4>
                            <p>9988 Piazzetta Scalette Rubiani 99, Rome, 84090</p>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Location-->
@endsection
