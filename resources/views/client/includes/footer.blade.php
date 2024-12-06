<!--Start Footer-->
<footer>
    <div class="footer-row1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="email-subs">
                        <h3>Nhận thông báo mới hàng tuần</h3>
                        <p>Hãy nhập email của bạn để chúng tôi cung ấp những thông tin mới mỗi tháng</p>
                    </div>
                </div>
                <div class="col-lg-6 v-center">
                    <div class="email-subs-form">
                        <form>
                            <input type="email" placeholder="Email Your Address" name="emails">
                            <button type="submit" name="submit" class="lnk btn-main bg-btn">Theo dõi <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-row2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-sm-6  ftr-brand-pp">
                    <a class="navbar-brand mt30 mb25 f-dark-logo" href="#"> <img src="{{ asset('asset/client/images/logo.png') }}" alt="Logo"/></a>
                    <a class="navbar-brand mt30 mb25 f-white-logo" href="#"> <img src="{{ asset('asset/client/images/white-logo.png') }}" alt="Logo" /></a>
                    <p>{{ $settings->short_intro}}</p>
                
                </div>
                <div class="col-lg-3 col-sm-6">
                    <h5>Liên hệ</h5>
                    <ul class="footer-address-list ftr-details">
                        <li>
                            <span><i class="fas fa-envelope"></i></span>
                            <p>Email <span> <a href="mailto:info@businessname.com">{{ $settings->email}}</a></span></p>
                        </li>
                        <li>
                            <span><i class="fas fa-phone-alt"></i></span>
                            <p>Điện thoại <span> <a href="tel:+10000000000">{{ $settings->phone}}</a></span></p>
                        </li>
                        <li>
                            <span><i class="fas fa-map-marker-alt"></i></span>
                            <p>Địa chỉ <span> Vienam</span></p>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <h5>Trang</h5>
                    <ul class="footer-address-list link-hover">
                        <li><a href="{{ route('project') }}">Dự án</a></li>
                        <li><a href="{{ route('product.index') }}">Sản phẩm</a></li>
                        <li><a href="javascript:void(0)">Giới thiệu</a></li>
                        <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                        <li><a href="{{ route('blog') }}">Bài viết</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-6 footer-blog-">
                    
                    <h5>Bài biết mới</h5>
                    @foreach ($blogNews as $blog)
                        
                        <div class="single-blog- mb-2">
                            
                            <div class="content">
                            
                                <h4 class="title"><a href="{{ route('blog.detail', $blog->slug) }}">{{ limit_text($blog->title, 70)}}</a></h4>
                            </div>
                        </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
    </div>
   
    <div class="footer-row3">
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-social-media-icons">
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
                        <div class="footer-">
                            <p>{{ $settings->copyright}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--End Footer-->


