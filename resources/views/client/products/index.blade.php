
@extends('client.layouts.master')

@section('header')
    @include('client.includes.header-page')
@endsection

@section('main')
    <section class="breadcrumb-areav2" data-background="{{ asset('asset/client/images/banner/4.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bread-titlev2">
{{--                        <h1 class="wow fadeInUp" data-wow-delay=".2s">Mua sắm hàng nghìn chủ đề, plugin và dịch vụ.</h1>--}}
{{--                        <p class="mt20 wow fadeInUp" data-wow-delay=".4s">Tìm kiếm ngay sản phẩm thuộc về bạn</p>--}}
                        <div class="email-subs-form mt60">
                            <form action="{{ route('product.index') }}" method="GET">
                                <input type="text"  value="{{ old('search', $search) }}"
                                       placeholder="Tìm sản phẩm..." name="tim-kiem"
                                       class="no-shadow">
                                <button type="submit" class="lnk btn-main bg-btn no-shadow">Tìm kiếm <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end Breadcrumb Area-->
    <!--shop filters-->
    <div class="shop-page-bhv pt60 pb60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="shop-cat-title">
                        <ul class="shop-tags-list">
                            <li>
                                <a class="{{ request()->routeIs('product.index') ? 'active' : '' }}" href="{{ route('product.index') }}">
                                   Tất cả
                                </a>
                            </li>
                            @foreach($categories as $category)
                                <li>
                                    <a href="{{ route('product.product-by-category', $category->slug) }}"
                                       class="{{ isset($currentCategory) && $currentCategory->slug == $category->slug ? 'active' : '' }}">
                                        {{ $category->name }}
                                        <span>({{ $category->products->count() }})</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end shop filters-->
    <!--shop products-->
    <div class="shop-products-bhv pt20 pb60">
        <div class="container">
            <style>
                .rpb-shop-items-img {
                    width: 100%; /* Chiếm toàn bộ chiều rộng */
                    height: 190px; /* Chiều cao cố định */
                    overflow: hidden;
                }

                .rpb-shop-items-img img {
                    width: 100%;
                    height: 100%; /* Đảm bảo hình ảnh chiếm toàn bộ chiều cao của khung */
                    object-fit: cover; /* Cắt hình ảnh cho phù hợp với khung mà không làm biến dạng */
                }
            </style>
            <div class="row">
                @foreach($products as $value)
                <div class="col-lg-4 col-md-6">
                    <div class="rpb-shop-items-dv s-block mt60">
                        <div class="rpb-shop-items-img" >
                            <a href="{{ route('product.detail', $value->slug) }}">
                                <img src="{{ get_image_url($value->main_image) }}"
                                     class="img-fluid" alt="product">
                            </a>
                        </div>
                        <div class="rpb-shop-items-info">
                            <div class="rpb-shop-items-tittl">
                                <h3>
                                    <a href="{{ route('product.detail', $value->slug) }}">
                                        {{ limit_text($value->name, 30) }}
                                    </a>
                                </h3>
                                <p class="tags-itmm">{{ limit_text($value->description, 80) }}</p>
                            </div>
                            <div class="rpb-shop-items-flex">
                                <div class="rpb-shop-inf-ll">
                                    <div class="rpb-itm-pric">
                                        <span class="offer-prz">{{ format_price_vnd($value->price) }} </span>
                                    </div>
                                    <div class="rpb-tim-rate">
                                        <div class="star-rate">
                                            <ul>
                                                <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="rpb-itm-sale">144 Sales</div>
                                </div>
                                <div class="rpb-shop-inf-rr">
                                    <div class="rpb-shop-flxbt">
                                        <a target="_blank" href="{{ $value->demo }}" class="rpb-shop-prev" data-bs-toggle="tooltip" title="View the Item Demo">
                                            Live demo
                                        </a>
                                        <a href="" class="rpb-shop-prev" data-bs-toggle="tooltip" title="View the Item Demo">
                                            Mua ngay
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!--pagination -->
                    <div class="row">
                        <div class="col-lg-12">
                            {{ $products->links('vendor.pagination.custom') }}
{{--                            <div class="paginationdiv mt60">--}}
{{--                                <ul class="pagination shadow">--}}
{{--                                    <li><a href="#" class="prev">&#60; Prev</a></li>--}}
{{--                                    <li class="pagenumber active"><a href="#">1</a></li>--}}
{{--                                    <li class="pagenumber"><a href="#">2</a></li>--}}
{{--                                    <li class="pagenumber"><a href="#">3</a></li>--}}
{{--                                    <li class="pagenumber"><a href="#">4</a></li>--}}
{{--                                    <li><a href="#" class="next">Next &#62;</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start Footer-->
@endsection
