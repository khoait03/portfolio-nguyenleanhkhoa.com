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
                        <h2 class="mb0">
                            Dự án đã thực hiện
                            @if (request()->has('page'))
                                trang {{ request()->get('page') }}
                            @endif
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row mt60">
                @if(is_object($projects))
                    @foreach($projects as $project)
                        @php
                            // Xác định lớp gradient động dựa trên index của mỗi project
                            $gradientClass = 'bg-gradient' . (2 + ($loop->index % 7));
                        @endphp

                    <div class="col-lg-12 col-sm-12 wptbb">
                        <div class="pbwide shadow {{ $gradientClass }}">
                            <div class="portfolio-item-info-tt">

                                <h3 class="mb30">{{ limit_text($project->title, 80) }}</h3>

                                <div class="widebloktag mt30 mb30">
                                    @foreach ($project->technology as $technology)
                                        <span class="bg-btn3">{{ $technology }}</span>
                                    @endforeach

                                </div>

                                <ul class="info-list-ul">
                                    @foreach ($project->role as $role)
                                        <li>{{ $role }}</li>
                                    @endforeach
                                </ul>

                                <a target="_blank" href="{{ route('project.detail', $project->slug) }}" class="btn-outline lnk mt30">
                                    Chi tiết
                                    <i class="fas fa-eye fa-icon"></i>
                                    <span class="circle"></span>
                                </a>

                                @if(isset($project->link_demo))
                                    <a target="_blank" href="{{ $project->link_demo }}" class="btn-outline lnk mt30">
                                        Demo
                                        <i class="fas fa-tv fa-icon"></i>
                                        <span class="circle"></span>
                                    </a>
                                @endif

                                @if(isset($project->github))
                                    <a target="_blank" href="{{ $project->github }}" class="btn-outline lnk mt30">
                                        Github
                                        <i class="fab fa-github fa-icon"></i>
                                        <span class="circle"></span>
                                    </a>
                                @endif

                            </div>
                            <div class="portfolio-wide-image">
                                <div class="img-wide-blocktt tilt-outer">
                                    <div class="innerwidedevice tilt-inner" data-tilt data-tilt-max="4" data-tilt-speed="1000" data-tilt-perspective="2000">
                                        <div class="desktopblock shadow1">
                                            <img src="{{ get_image_url($project->main_image) }}" alt="{{ $project->name }}" class="img-fluid">
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
                            {{ $projects->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--End Portfolio-->
@endsection
