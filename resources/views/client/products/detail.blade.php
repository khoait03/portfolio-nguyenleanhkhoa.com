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
                                    <a href="{{ route('product.product-by-category', $product->category->slug) }}">
                                        {{ $product->category->name }}
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="bread-title">
                            <h2>{{ $product->name }}</h2>
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
                    <img src="{{ get_image_url($product->main_image, 'default') }}" class="w-100" alt="img">
                </div>


            </div>

            <div class="col-lg-4">

                <div class="rpb-item-infodv">
                    <ul>
                        <li class="price">
                            <strong>Giá tiền</strong>
                            <div class="nx-rt">
                                <div class="rpb-itm-pric">
                                    <span class="offer-prz"> {{ format_price_vnd($product->price) }} </span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <strong>Danh mục</strong>
                            <div class="nx-rt">{{ $product->category->name }}</div>
                        </li>
                        <li>
                            <strong>Last update</strong>
                            <div class="nx-rt">Jan 18, 2021</div>
                        </li>
                        <li>
                            <strong>Created</strong>
                            <div class="nx-rt">Jan 10, 2021</div>
                        </li>



                        <li>
                            <a target="_blank" href="{{ $product->demo }}" class="btn-main bg-btn lnk w-100">
                                Xem demo
                                <span class="circle"></span>
                            </a>
                            <a target="_blank" href="#" class="btn-main bg-btn3 lnk w-100 mt10">
                                Mua ngay
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

                            <li class="nav-item">
                                <a class="nav-link" id="tab3c" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">
                                    Bình luận
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab4c" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">
                                    Hướng dẫn - Hỗ trợ
                                </a>
                            </li>
                        </ul>


                        <div class="tab-content" id="myTabContent2">
                            <!-- Mô tả -->
                            <div class="mt20 tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1a">
                                <h4 class="mb10">Mô tả</h4>
                                {!! $product->description !!}
                            </div>

                            <!-- Hình ảnh demo -->
                            <div class="mt20 tab-pane fade show active" id="tab5" role="tabpanel" aria-labelledby="tab5b">
                                <h4 class="mb10">Hình ảnh demo</h4>

                                @foreach ($product->images as $image)
                                    <div class="product-image text-center">
                                        <img src="{{ get_image_url($image) }}" alt="Product Image" />
                                    </div>
                                    <br>
                                @endforeach
                            </div>


                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3c">

                                <div class="rpb-commentss comments-block">
                                    <div class="media">
                                        <div class="user-image"><img src="images/user-thumb/user3.jpg" alt="girl" class="img-fluid"/></div>
                                        <div class="media-body user-info">
                                            <h5 class="mb10">Petey Cruiser <small class="badges badge-success">PURCHASED:</small>
                                                <span>
															November 29, 2019 <a class="reply-btn" href="#"><i class="fas fa-reply"></i></a>
														</span>
                                            </h5>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500.</p>
                                        </div>
                                    </div>
                                    <div class="media replied">
                                        <div class="user-image"><img src="images/user-thumb/user3.jpg" alt="girl" class="img-fluid"/></div>
                                        <div class="media-body user-info">
                                            <h5 class="mb10">Tom Mikee <small class="badges badge-success">Author:</small>
                                                <span>
															November 29, 2019 <a class="reply-btn" href="#"><i class="fas fa-reply"></i></a>
														</span>
                                            </h5>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="rpb-comment-form">
                                    <div class="form-block form-blog mt40">
                                        <form action="#" method="post" name="#">
                                            <div class="fieldsets row">
                                                <div class="col-md-6"><input type="text" placeholder="Name" name="#" /></div>
                                                <div class="col-md-6"><input type="email" placeholder="Email" name="#" /></div>
                                            </div>
                                            <div class="fieldsets"><textarea placeholder="Write Your Comment" name="#"></textarea></div>
                                            <div class="fieldsets mt10">
                                                <button type="submit" name="#" class="btn-main bg-btn3 lnk">Post Comment <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4c">
                                <div class="rpb-itm-support-txt">
                                    <h4>Contact Us</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and through email contact form.</p>

                                    <h4 class="mt30 mb10">Item support includes:</h4>
                                    <ul class="ul-list mb30">
                                        <li>Powered by Bootstrap</li>
                                        <li>Well documented codes</li>
                                        <li>Fully Responsive</li>
                                        <li>Free Google Fonts</li>
                                    </ul>

                                    <a href="#">View the item support policy</a>
                                    <div class="btns">
                                        <a href="#" class=" mt30 btn-main bg-btn3 lnk">Get Support <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<div class="shop-products-bhv pt20 pb60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center">
                    Sản phẩm tương tự
                </h3>
            </div>
            @foreach($product_similars as $value)
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
    </div>
</div>

@endsection
