
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
                        <h1 class="wow fadeInUp" data-wow-delay=".2s">Mua sắm hàng nghìn chủ đề, plugin và dịch vụ.</h1>
                        <p class="mt20 wow fadeInUp" data-wow-delay=".4s">Tìm kiếm ngay sản phẩm thuộc về bạn</p>
                        <div class="email-subs-form mt60">
                            <form>
                                <input type="text" placeholder="Tìm sản phẩm..." name="search-shop" class="no-shadow">
                                <button type="submit" name="submit" class="lnk btn-main bg-btn no-shadow">Tìm kiếm <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
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
                    <div class="main-shop-catte">
                        <a href="#" class="active">Themes</a>
                        <a href="#">Graphics</a>
                        <a href="#">Scripts & Code</a>
                    </div>
                    <div class="shop-cat-title">
                        <ul class="shop-tags-list mt60">
                            <li><a href="#" class="active">agency<span>(13)</span></a></li>
                            <li><a href="#">business<span>(12)</span></a></li>
                            <li><a href="#">cafe<span>(32)</span></a></li>
                            <li><a href="#">cargo<span>(12)</span></a></li>
                            <li><a href="#">clinic<span>(23)</span> </a></li>
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
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="rpb-shop-items-dv s-block mt60">
                        <div class="rpb-shop-items-img">
                            <a href="">
                                <img src="{{ asset('asset/client/images/shop/product-preview-1.jpg') }}"
                                     class="img-fluid" alt="product">
                            </a>
                        </div>
                        <div class="rpb-shop-items-info">
                            <div class="rpb-shop-items-tittl">
                                <h3><a href="">Niwax - Creative Agency & Portfolio HTML Template</a></h3>
                                <p class="tags-itmm">Multipurpose Landing Page HTML Template</p>
                            </div>
                            <div class="rpb-shop-items-flex">
                                <div class="rpb-shop-inf-ll">
                                    <div class="rpb-itm-pric"><span class="offer-prz">100.000đ </span> <span class="regular-prz">150.000đ</span></div>
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
                                        <a href="#" class="rpb-shop-prev" data-bs-toggle="tooltip" title="View the Item Demo">Live demo</a>
                                        <a href="#" class="rpb-shop-cartt" data-bs-toggle="tooltip" title="Add to Cart"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!--pagination -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="paginationdiv mt60">
                                <ul class="pagination shadow">
                                    <li><a href="#" class="prev">&#60; Prev</a></li>
                                    <li class="pagenumber active"><a href="#">1</a></li>
                                    <li class="pagenumber"><a href="#">2</a></li>
                                    <li class="pagenumber"><a href="#">3</a></li>
                                    <li class="pagenumber"><a href="#">4</a></li>
                                    <li><a href="#" class="next">Next &#62;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Start Footer-->
@endsection
