@extends('client.layouts.master')

@section('header')
    @include('client.includes.header-page')
@endsection

@section('main')


    <section class="breadcrumb-area banner-2" data-background="images/banner/4.jpg">
        <div class="text-block">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu">
                                <ul>
                                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                                    <li>
                                        <a href="{{ route('product.product-by-category', $project->slug) }}">

                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <div class="bread-title">
                                <h2>{{ $project->name }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end Breadcrumb Area-->
    <!--shop products-->
    <section class="shop-products-prvw pt20 pb60">
        <div class="container shop-container">
            <div class="row">

                <div class="col-lg-8">

                    <div class="rpb-shop-prevw">
                        <img src="{{ get_image_url($project->main_image, 'default') }}" class="w-100" alt="img">
                    </div>


                </div>

                <div class="col-lg-4">

                    <div class="rpb-item-infodv">
                        <ul>
                            <li>
                                <strong>Danh mục</strong>
                                <div class="nx-rt">
                                    @foreach($project->categories as $index => $category)
                                        {{ $category->name }}
                                        @if (!$loop->last)
                                        ,
                                        @endif
                                    @endforeach
                                </div>

                            </li>

                            @if(isset($project->execution_time))
                                <li>
                                    <strong>Thời gian</strong>
                                    <div class="nx-rt">{{ $project->execution_time }}</div>
                                </li>
                            @endif

                            @if(isset($project->customer))
                                <li>
                                    <strong>Khách hàng</strong>
                                    <div class="nx-rt">{{ $project->customer }}</div>
                                </li>
                            @endif


                            <li>
                                @if(isset($project->link_demo))
                                    <a target="_blank" href="{{ $project->link_demo }}" class="btn-main bg-btn lnk w-100">
                                        <i class="fas fa-eye fa-icon"></i>
                                        Xem demo
                                        <span class="circle"></span>
                                    </a>
                                @endif

                                @if(isset($project->github))
                                    <a target="_blank" href="{{ $project->github }}" class="btn-main bg-btn10 lnk w-100 mt10">
                                        <i class="fab fa-github fa-icon"></i>
                                        Github
                                        <span class="circle"></span>
                                    </a>
                                @endif

                                    <a target="_blank" href="" class="btn-main bg-btn3 lnk w-100 mt10">
                                        <i class="fas fa-phone fa-icon"></i>
                                        Liên hệ
                                        <span class="circle"></span>
                                    </a>
                            </li>

                        </ul>
                    </div>


                </div>

                <div class="col-lg-12">
                    <div class="rpb-item-info">
                        <div class="tab-17 tabs-layout">
                            <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab1a" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">
                                        Mô tả
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab5b" data-bs-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">
                                        Hình ảnh
                                    </a>
                                </li>

                            </ul>


                            <div class="tab-content" id="myTabContent2">
                                <!-- Mô tả -->
                                <div class="mt20 tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1a">
                                    <h4 class="mb10">Mô tả dự án</h4>
                                    {!! $project->description !!}
                                </div>

                                <!-- Hình ảnh demo -->
                                <div class="mt20 tab-pane fade show active" id="tab5" role="tabpanel" aria-labelledby="tab5b">
                                    <h4 class="mb10">Hình ảnh dự án</h4>

                                    @foreach ($project->images as $image)
                                        <div class="product-image text-center">
                                            <img src="{{ get_image_url($image) }}" alt="Product Image" />
                                        </div>
                                        <br>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection
