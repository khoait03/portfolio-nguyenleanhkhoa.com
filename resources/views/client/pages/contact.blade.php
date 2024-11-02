@extends('client.layouts.master')

@section('header')
    @include('client.includes.header-page')
@endsection

@section('main')

    <!--Breadcrumb Area-->
    <section class="breadcrumb-area banner-6">
        <div class="text-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 v-center">
                        <div class="bread-inner">
                            <div class="bread-menu wow fadeInUp" data-wow-delay=".2s">
                                <ul>
                                    <li><a href="{{ route('home') }}">Trang chủ</a></li>
                                    <li><a >Liên hệ</a></li>
                                </ul>
                            </div>
                            <div class="bread-title wow fadeInUp" data-wow-delay=".5s">
                                <h2>Liên hệ</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Breadcrumb Area-->

    <!--Start Enquire Form-->
    <section class="contact-page pad-tb">
        <div class="container">
            <div class="row justify-content-center">


                <div class="col-lg-5 contact2dv">

                    <div class="info-wrapr">
                        <h3 class="mb-4">Thông tin liên hệ</h3>
                        <div class="dbox d-flex align-items-start">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-map-marker"></i>
                            </div>
                            <div class="text pl-4">
                                <p><span>Địa chỉ:</span>Hữu Đạo, Châu Thành, Tiền Giang</p>
                            </div>
                        </div>
                        <div class="dbox d-flex align-items-start">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text pl-4">
                                <p><span>Điện thoại:</span> <a href="tel://0336216546">0336216546</a></p>
                            </div>
                        </div>
                        <div class="dbox d-flex align-items-start">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text pl-4">
                                <p><span>Email:</span> <a href="mailto:nguyenleanhkhoa.dev@gmail.com">nguyenleanhkhoa.dev@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="dbox d-flex align-items-start">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="text pl-4">
                                <p><span>Website</span> <a href="">www.nguyenleanhkhoa.com</a></p>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-7 m-mt30 pr30 pl30">
                    <div class="common-heading text-l">
                        <h2 class="mt0 mb0">Liên hệ công việc</h2>
                        <p class="mb60 mt10">Chúng tôi sẽ phản hồi lại cho bạn ngay khi nhận được tin nhắn</p>
                    </div>
                    <div class="form-block">
                        <form id="contactForm" data-bs-toggle="validator" class="shake">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text"  id="name" placeholder="Họ tên" required data-error="Please fill Out">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="email"  id="email" placeholder="Email" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text" id="mobile" placeholder="Số điện thoại" required data-error="Please fill Out">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="form-group col-sm-6">
                                    <select name="Dtype" id="Dtype" required>
                                        <option value="">Chọn dịch vụ</option>
                                        <option value="web">Thiết kế website</option>
                                        <option value="graphic">Digital Marketing</option>
                                        <option value="video">Khác</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="message" rows="5" placeholder="Nội dung" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck" name="example1" checked="checked">
                                <label class="custom-control-label" for="customCheck">Tôi đồng ý với <a href="javascript:void(0)">Điều khoản &amp;  Điều kiện</a> của doanh nghiệp.</label>
                            </div>
                            <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">GỬI TIN <span class="circle"></span></button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                            <p class="trm"><i class="fas fa-lock"></i>Chúng tôi tôn trọng quyền riêng tư của bạn.</p>
                        </form>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!--End Enquire Form-->


    <!--Start Location-->
    <div class="contact-location">
        <div class="container-fluid">

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="map-div">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d502325.06789345114!2d105.98654565295296!3d10.38860853073016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310aafebb5a82681%3A0x3ce3a707c1376375!2zVGnhu4FuIEdpYW5nLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1730522843301!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!--End Location-->
@endsection
