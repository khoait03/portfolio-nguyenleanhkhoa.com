<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- head -->
@include('client.includes.head')
<!-- end head -->

<body>
<!-- top progress bar start-->
<div id="progress-bar"></div>
<!-- top progress bar end -->

<!--Start Preloader -->
{{--<div class="onloadpage" id="page_loader">--}}
{{--    <div class="pre-content">--}}
{{--        <div class="logo-pre"><img src="{{ asset('asset/client/images/logo.png') }}" alt="Logo" class="img-fluid" /></div>--}}
{{--        <div class="pre-text- text-radius text-light text-animation bg-b">Niwax - Creative Agency & Portfolio HTML Template Are 2 Seconds Away. Have Patience</div>--}}
{{--    </div>--}}
{{--</div>--}}
<!--End Preloader -->

<style>
    /* yoeunes/toastr */
    .fl-wrapper {
        z-index: 2147483647 !important;
    }
</style>

<!-- header -->
@hasSection('header')
    @yield('header')
@else
    <!-- header -->
    @include('client.includes.header')
    <!-- end header -->
@endif
<!-- end header -->

<!--Start sidebar phone -->
<div class="niwaxofcanvas offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample">
    <div class="offcanvas-body">
        <div class="cbtn animation">
            <div class="btnclose"> <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button></div>
        </div>
        <div class="form-block sidebarform">
            <h4>Liên hệ</h4>
            <form id="contactForm" data-bs-toggle="validator" class="shake mt20">
                <div class="row">
                    <div class="form-group col-sm-12">
                        <input type="text"  id="name" placeholder="Họ tên" required data-error="Please fill Out">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input type="email"  id="email" placeholder="Email" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <input type="text" id="mobile" placeholder="Số điện thoại" required data-error="Please fill Out">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                        <select name="Dtype" id="Dtype" required>
                            <option value="">Chọn yêu cầu</option>
                            <option value="web">Thết kế website</option>
                            <option value="graphic">Marketing internet</option>
                            <option value="Mobile">Mobile</option>
                            <option value="khac">Khác</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea id="message" rows="5" placeholder="Nội dung" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn">Gửi tin nhắn <span class="circle"></span></button>
                <div id="msgSubmit" class="h3 text-center hidden"></div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="getintouchblock mt30">
            <h4>Thông tin liên hệ</h4>
            <p class="mt10">Dịch vụ sản phẩm số, thiết kế website, thiết kế Logo, marketing internet, SEO</p>
            <div class="media mt15">
                <div class="icondive"><img src="{{ asset('asset/client/images/icons/call.svg') }}" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
                </div>
            </div>
            <div class="media mt15">
                <div class="icondive"><img src="{{ asset('asset/client/images/icons/whatsapp.svg') }}" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="tel:123456790">+91-123 4567 890 <span>Mon-Fri 9am - 6pm</span></a>
                </div>
            </div>
            <div class="media mt15">
                <div class="icondive"><img src="{{ asset('asset/client/images/icons/mail.svg') }}" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="mailto:info@website.com">info@website.com <span>Online Support</span></a>
                </div>
            </div>
            <div class="media mt15">
                <div class="icondive"><img src="{{ asset('asset/client/images/icons/map.svg') }}" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a href="mailto:info@website.com">Jaipur, Rajasthan, India<span>Visit Our Office</span></a>
                </div>
            </div>
        </div>
        <div class="contact-data mt30">
            <h4>Follow Us On:</h4>
            <div class="social-media-linkz mt10">
                <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-instagram"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-youtube"></i></a>
                <a href="javascript:void(0)" target="blank"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </div>
</div>
<!--end sidebar -->


@yield('main')


@include('client.includes.footer')



<!-- scripts -->
@include('client.includes.script')
<!-- end scripts -->

</body>

</html>
