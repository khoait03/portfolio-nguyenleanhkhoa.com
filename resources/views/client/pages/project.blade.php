@extends('client.layouts.master')

@section('header')
    @include('client.includes.header-page')
@endsection

@section('main')
    <section class="breadcrumb-area banner-3">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                                    <li><a >Dự án</a></li>
                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>Dự án của tôi</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Start Portfolio-->
    <section class="portfolio-page pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading">
                        <h2 class="mb0">Dự án đã thực hiện</h2>
                    </div>
                </div>
            </div>

            <div class="row mt60">
                <div class="col-lg-12 col-sm-12 wptbb">
                    <div class="pbwide shadow bg-gradient2">
                        <div class="portfolio-item-info-tt">
                            <div class="logowide mb20"><img src="{{ asset('asset/client/images/client/customer-logo-3.png') }}" alt="logo" class="img-fluid"></div>
                            <div class="widebloktag"><span>Design</span> <span>Coding</span> <span>Design</span> </div>
                            <h3 class="mt30 mb30">Weather & Radar - Accurate Weather Forecast</h3>
                            <ul class="info-list-ul">
                                <li>Product Strategy</li>
                                <li>Product UI/UX Design</li>
                                <li>Branding Design</li>
                                <li>Design System</li>
                            </ul>
                            <a href="#" class="btn-outline lnk mt30">View Case Study  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                        <div class="portfolio-wide-image">
                            <div class="img-wide-blocktt tilt-outer">
                                <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
                                    <div class="desktopblock shadow1"><img src="{{ asset('asset/client/images/portfolio/portfolio-wide-2.jpg') }}" alt="img" class="img-fluid"> </div>
                                    <div class="mobileblock shadow1"><img src="{{ asset('asset/client/images/portfolio/portfolio-wide-2a.jpg') }}" alt="img" class="img-fluid"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-sm-12 wptbb">
                    <div class="pbwide shadow bg-gradient3">
                        <div class="portfolio-item-info-tt">
                            <div class="logowide mb20"><img src="{{ asset('asset/client/images/client/customer-logo-7.png') }}" alt="logo" class="img-fluid"></div>
                            <div class="widebloktag"><span>Design</span> <span>Coding</span> <span>Design</span> </div>
                            <h3 class="mt30 mb30">Weather & Radar - Accurate Weather Forecast</h3>
                            <ul class="info-list-ul">
                                <li>Product Strategy</li>
                                <li>Product UI/UX Design</li>
                                <li>Branding Design</li>
                                <li>Design System</li>
                            </ul>
                            <a href="#" class="btn-outline lnk mt30">View Case Study  <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                        </div>
                        <div class="portfolio-wide-image">
                            <div class="img-wide-blocktt tilt-outer">
                                <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
                                    <div class="desktopblock shadow1"><img src="{{ asset('asset/client/images/portfolio/portfolio-wide-3.jpg') }}" alt="img" class="img-fluid"> </div>
                                    <div class="mobileblock shadow1"><img src="{{ asset('asset/client/images/portfolio/portfolio-wide-3a.jpg') }}" alt="img" class="img-fluid"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--End Portfolio-->
@endsection
