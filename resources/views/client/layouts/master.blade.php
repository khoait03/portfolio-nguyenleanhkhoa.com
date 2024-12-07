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
            <form action="{{ route('contact.submit') }}" id="contactForm" method="POST" data-bs-toggle="validator" class="shake mt20">
                @csrf
                <div class="row">
                    <div class="form-group col-sm-12">
                        <input type="text" name="name"  placeholder="Họ tên" required data-error="Please fill Out">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                        <input type="email" name="email" placeholder="Email" required>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-12">
                        <input type="text" id="mobile" name="phone" placeholder="Số điện thoại" required data-error="Please fill Out">
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group col-sm-12">
                        <select name="service" id="Dtype" required>
                            <option value="">Chọn yêu cầu</option>
                            <option value="Thết kế website">Thết kế website</option>
                            <option value="Marketing internet">Marketing internet</option>
                            <option value="Mobile">Mobile</option>
                            <option value="Khác">Khác</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="message" rows="5" placeholder="Nội dung" required></textarea>
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
            
            @if (isset($settings->phone)) 
                <div class="media mt15">
                    <div class="icondive"><img src="{{ asset('asset/client/images/icons/call.svg') }}" alt="icon"></div>
                    <div class="media-body getintouchinfo">
                        <a href="tel:{{ $settings->phone }}">{{ $settings->phone }}<span>T2 - T7, 9am - 10pm</span></a>
                    </div>
                </div>
            @endif

            @if (isset($settings->email)) 
                <div class="media mt15">
                    <div class="icondive"><img src="{{ asset('asset/client/images/icons/mail.svg') }}" alt="icon"></div>
                    <div class="media-body getintouchinfo">
                        <a href="mailto:{{ $settings->email}}">{{ $settings->email}} <span>Hỗ trợ Online</span></a>
                    </div>
                </div>
            @endif
            
            
            
            <div class="media mt15">
                <div class="icondive"><img src="{{ asset('asset/client/images/icons/map.svg') }}" alt="icon"></div>
                <div class="media-body getintouchinfo">
                    <a >Vietnam<span>Cần Thơ, Hồ Chí Minh, Tiền Giang</span></a>
                </div>
            </div>
        </div>
        <div class="contact-data mt30">
            <h4>Mạng xã hội của tôi</h4>
            <div class="social-media-linkz mt10">
                @if (isset($settings->facebook)) 
                    <a href="{{ $settings->facebook}}" target="blank"><i class="fab fa-facebook"></i></a>
                @endif

                @if (isset($settings->twitter)) 
    
                    <a href="{{ $settings->twitter}}" target="blank"><i class="fab fa-twitter"></i></a>
                @endif

                @if (isset($settings->instagram)) 
                    <a href="{{ $settings->instagram}}" target="blank"><i class="fab fa-instagram"></i></a>
                @endif

                @if (isset($settings->linkedin)) 
                    <a href="{{ $settings->linkedin}}" target="blank"><i class="fab fa-linkedin"></i></a>
                @endif

                @if (isset($settings->youtube)) 
        
                    <a href="{{ $settings->youtube}}" target="blank"><i class="fab fa-youtube"></i></a>
                @endif
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
