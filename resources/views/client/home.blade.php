@extends('client.layouts.master')

@section('main')
    <!--Start Hero-->
    <section class="hero-card-web bg-gradient12 shape-bg3">
        <div class="hero-main-rp container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="hero-heading-sec">
                        <h2 class="wow fadeIn" data-wow-delay="0.3s"><span>Web</span> <span>Mobile</span> <span>Graphic</span> <span>Marketing</span></h2>
                        <p class="wow fadeIn" data-wow-delay="0.6s">
                            Giải pháp phát triển Website và App nhằm chuyển đổi và đổi mới doanh nghiệp.
                        </p>
                        <a href="" class="btn-round- btn-br bg-btn2">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="btn-round- btn-br bg-btn2">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="" class="btn-round- btn-br bg-btn2">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="" class="btn-round- btn-br bg-btn2">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a data-bs-toggle="offcanvas" href="#offcanvasExample" class="btn-round- btn-br bg-btn2">
                            <i class="fas fa-phone-alt"></i>
                        </a>
                        <div class="awards-block-tt  wow fadeIn" data-wow-delay="1s"><img src="{{ asset('asset/client/images/hero/awards-logo.png') }}" alt="awards-logo" class="img-fluid"/></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-content-sec wow fadeIn" data-wow-delay="0.8s">
                        <div class="video-intro-pp"><a class="video-link play-video" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><span class="triangle-play"></span></a></div>
                        <div class="title-hero-oth">
                            <p>CHÚNG TÔI THIẾT KẾ GIẢI PHÁP KỸ THUẬT SỐ <span>DÀNH CHO THƯƠNG HIỆU VÀ CÔNG TY</span></p>
                        </div>
                    </div>
                    <div class="hero-right-scmm">
                        <div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
                            <div class="owl-carousel service-card-prb">
                                <div class="service-slide card-bg-a" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="{{ asset('asset/client/images/service/vr.png') }}">
                                            </div>
                                            <div class="title-serv-c"><span>VR</span> Solution</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-slide card-bg-b" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="{{ asset('asset/client/images/service/app-develop.png') }}">
                                            </div>
                                            <div class="title-serv-c"><span>Custom</span> App Solution</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-slide card-bg-c" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="{{ asset('asset/client/images/service/startup.png') }}">
                                            </div>
                                            <div class="title-serv-c"><span>Startup</span> Solution</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-slide card-bg-d" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="{{ asset('asset/client/images/service/car-rental.png') }}">
                                            </div>
                                            <div class="title-serv-c"><span>Car</span> Rental Solution</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-slide card-bg-e" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="{{ asset('asset/client/images/service/marketing.png') }}">
                                            </div>
                                            <div class="title-serv-c"><span>Marketing</span> Solution</div>
                                        </div>
                                    </a>
                                </div>
                                <div class="service-slide card-bg-f" data-tilt data-tilt-max="10" data-tilt-speed="1000">
                                    <a href="#">
                                        <div class="service-card-hh">
                                            <div class="image-sr-mm">
                                                <img alt="custom-sport" src="{{ asset('asset/client/images/service/ewallet.png') }}">
                                            </div>
                                            <div class="title-serv-c"><span>e-Wallet</span> Solution</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Hero-->

    <!--Start Service-->
    <section class="service-section-app pad-tb dark-bg2 mt-5" id="services">
        <div class="sctxt">Web Development</div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="common-heading ptag">
                        <span>Service</span>
                        <h2>Dịch vụ</h2>
                        <p class="mb30">
                            Chúng tôi nghĩ lớn và nắm trong tay tất cả các nền tảng
                            công nghệ hàng đầu để cung cấp cho bạn nhiều loại dịch vụ.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row upset">
                <div class="col-lg-4 col-md-6 mt30 wow fadeIn" data-wow-delay="0.2s">
                    <div class="service-card-app hoshd">
                        <h4>App Development</h4>
                        <ul class="-service-list mt10">
                            <li> <a href="#">iPhone</a> </li>
                            <li> <a href="#">Android</a> </li>
                            <li> <a href="#">Cross Platform</a> </li>
                        </ul>
                        <div class="tec-icon mt30">
                            <ul class="servc-icon-sldr">
                                <li><a href="#"><div class="img-iconbb"><img src="{{ asset('asset/client/images/icons/android.svg') }}" alt="img"></div> </a></li>
                                <li><a href="#"><div class="img-iconbb"><img src="{{ asset('asset/client/images/icons/apple.svg') }}" alt="img"></div> </a></li>
                                <li><a href="#"><div class="img-iconbb"><img src="{{ asset('asset/client/images/icons/tablet.svg') }}" alt="img"></div> </a></li>
                            </ul>
                        </div>
                        <p class="mt20">Design and develop a creative website with our microscopic detailing and scrupulous strategies.</p>
                        <a href="javascript:void(0)" class="mt20 link-prbs">Read More <i class="fas fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt30 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-card-app hoshd">
                        <h4>Web Development</h4>
                        <ul class="-service-list mt10">
                            <li> <a href="#">UI/UX</a> </li>
                            <li> <a href="#">PHP</a> </li>
                            <li> <a href="#">Java</a> </li>
                            <li> <a href="#">WordPress</a></li>
                        </ul>
                        <div class="tec-icon mt30">
                            <ul class="servc-icon-sldr">
                                <li><a href="#"><div class="img-iconbb"><img src="{{ asset('asset/client/images/icons/ux.svg') }}" alt="img"></div></a></li>
                                <li><a href="#"><div class="img-iconbb"><img src="{{ asset('asset/client/images/icons/php.svg') }}" alt="img"></div></a></li>
                                <li><a href="#"><div class="img-iconbb"><img src="{{ asset('asset/client/images/icons/java.svg') }}" alt="img"></div></a></li>
                                <li><a href="#"><div class="img-iconbb"><img src="{{ asset('asset/client/images/icons/wordpress.svg') }}" alt="img"></div></a></li>
                            </ul>
                        </div>
                        <p class="mt20">Design and develop a creative website with our microscopic detailing and scrupulous strategies.</p>
                        <a href="javascript:void(0)" class="mt20 link-prbs">Read More <i class="fas fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt30 wow fadeIn" data-wow-delay="0.8s">
                    <div class="service-card-app hoshd">
                        <h4>eCommerce Development</h4>
                        <ul class="-service-list mt10">
                            <li> <a href="#">Magento</a> </li>
                            <li> <a href="#">Shopify</a> </li>
                            <li> <a href="#">Woo-commerce</a></li>
                        </ul>
                        <div class="tec-icon mt30">
                            <ul class="servc-icon-sldr">
                                <li><a href="#"><div class="img-iconbb"><img src="{{ asset('asset/client/images/icons/magento.svg') }}" alt="img"></div></a></li>
                                <li><a href="#"><div class="img-iconbb"><img src="{{ asset('asset/client/images/icons/shopify.svg') }}" alt="img"></div></a></li>
                                <li><a href="#"><div class="img-iconbb"><img src="{{ asset('asset/client/images/icons/woocommerce.svg') }}" alt="img"></div></a></li>
                            </ul>
                        </div>
                        <p class="mt20">Design and develop a creative website with our microscopic detailing and scrupulous strategies.</p>
                        <a href="javascript:void(0)" class="mt20 link-prbs">Read More <i class="fas fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Service-->
    <!--why choose-->
    <section class="why-choos-lg pad-tb deep-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="common-heading text-l">
                        <span>TẠI SAO CHỌN CHÚNG TÔI</span>
                        <h2 class="mb20">Why The Niwax <span class="text-second text-bold">Ranked Top</span> Among The Leading Web & App Development Companies</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        <div class="itm-media-object mt40 tilt-3d">
                            <div class="media">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ asset('asset/client/images/icons/computers.svg') }}" alt="icon" class="layer"></div>
                                <div class="media-body">
                                    <h4>Streamlined Project Management</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                            <div class="media mt40">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ asset('asset/client/images/icons/worker.svg') }}" alt="icon" class="layer"></div>
                                <div class="media-body">
                                    <h4>A Dedicated Team of Experts</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                            <div class="media mt40">
                                <div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img src="{{ asset('asset/client/images/icons/deal.svg') }}" alt="icon" class="layer"></div>
                                <div class="media-body">
                                    <h4>Completion of Project in Given Time</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s"><img src="{{ asset('asset/client/images/about/about-company.jpg') }}" alt="image" class="img-fluid"></div>
                    <p class="text-center mt30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <div class="cta-card mt60 text-center">
                        <h3 class="mb20">Let's Start a  <span class="text-second text-bold">New Project</span> Together</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper.</p>
                        <a href="#" class="btn-outline lnk mt30">Request A Quote    <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End why choose-->
    <!--Start Portfolio-->
    <section class="portfolio-section pad-tb" id="work">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Our Work</span>
                        <h2 class="mb20">Our Latest Creative Work</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 col mt40 wow fadeIn" data-wow-delay="0.2s">
                    <div class="isotope_item up-hor">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('asset/client/images/portfolio/app-img1.jpg') }}" alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info-div shdo">
                            <h4><a href="#">Pets Care & Training App</a></h4>
                            <p>iOs, Android</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt40 wow fadeIn" data-wow-delay="0.4s">
                    <div class="isotope_item up-hor">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('asset/client/images/portfolio/app-img2.jpg') }}" alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info-div shdo">
                            <h4><a href="#">Car Rental App</a></h4>
                            <p>Graphic, Print</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt40 wow fadeIn" data-wow-delay="0.6s">
                    <div class="isotope_item up-hor">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('asset/client/images/portfolio/app-img3.jpg') }}" alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info-div shdo">
                            <h4><a href="#">Event Management App</a></h4>
                            <p>Graphic, Print</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt40 wow fadeIn" data-wow-delay="0.8s">
                    <div class="isotope_item up-hor">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('asset/client/images/portfolio/app-img4.jpg') }}" alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info-div shdo">
                            <h4><a href="#">Restaurant App</a></h4>
                            <p>iOs, Android</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt40 wow fadeIn" data-wow-delay="1s">
                    <div class="isotope_item up-hor">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('asset/client/images/portfolio/app-img5.jpg') }}" alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info-div shdo">
                            <h4><a href="#">Restaurant / Hotel App</a></h4>
                            <p>Graphic, Print</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mt40 wow fadeIn" data-wow-delay="1.2s">
                    <div class="isotope_item up-hor">
                        <div class="item-image">
                            <a href="#"><img src="{{ asset('asset/client/images/portfolio/app-img6.jpg') }}" alt="image" class="img-fluid" /> </a>
                        </div>
                        <div class="item-info-div shdo">
                            <h4><a href="#">Super Mart App</a></h4>
                            <p>Graphic, Print</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Portfolio-->

    <!--Start Location-->
    <section class="our-office pad-tb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading">
                        <span>Our Locations</span>
                        <h2>Our Office</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center upset shape-numm">
                <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">
                    <div class="office-card">
                        <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                            <img src="{{ asset('asset/client/images/location/newyork.png') }}" alt="New York" class="img-fluid" />
                        </div>
                        <div class="office-text">
                            <h4>New York</h4>
                            <p>603 FA Forest Avenue, New York, USA 10021</p>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".5s">
                    <div class="office-card">
                        <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                            <img src="{{ asset('asset/client/images/location/sydeny.png') }}" alt="sydney" class="img-fluid" />
                        </div>
                        <div class="office-text">
                            <h4>Sydney</h4>
                            <p>2449 Columbia Boulevard, Sydney, 10021</p>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".8s">
                    <div class="office-card mb0">
                        <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                            <img src="{{ asset('asset/client/images/location/rome.png') }}" alt="rome" class="img-fluid" />
                        </div>
                        <div class="office-text">
                            <h4>Rome</h4>
                            <p>9988 Piazzetta Scalette Rubiani 99, Rome, 84090</p>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-map-marker-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-phone-alt"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fas fa-envelope"></i></a>
                            <a href="javascript:void(0)" target="blank" class="btn-outline rount-btn"><i class="fab fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Location-->


    <section class="blogs-section bg-flat6 pb120 pt120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="common-heading-2">
                        <span class="text-effect-1">what's going on</span>
                        <h2 class="mb30">Bài viết mới nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt30">
                    <div class="single-blog-post- up-hor shdo">
                        <div class="single-blog-img-">
                            <a href="#"><img src="{{ asset('asset/client/images/blog/blog-dg-1.jpg') }}" alt="girl" class="img-fluid"/></a>
                            <div class="entry-blog-post dg-bg2">
                                <span class="bypost-"><a href="#"><i class="fas fa-tag"></i> Nodejs</a></span>
                                <span class="posted-on-">
                           <a href="#"><i class="fas fa-clock"></i> Sep 23, 2020</a>
                           </span>
                            </div>
                        </div>
                        <div class="blog-content-tt">
                            <div class="single-blog-info-">
                                <h4><a href="#">Everything You Need To Know About Nodejs!</a></h4>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                            <div class="post-social">
                                <div class="ss-inline-share-wrapper ss-hover-animation-fade ss-inline-total-counter-left ss-left-inline-content ss-small-icons ss-with-spacing ss-circle-icons ss-without-labels">
                                    <div class="ss-inline-share-content">
                                        <div class="ss-social-icons-container">
                                            <a href="javascript:void(0)">Shares</a>
                                            <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook"></i></a>
                                            <a href="javascript:void(0)" target="blank"><i class="fab fa-twitter"></i></a>
                                            <a href="javascript:void(0)" target="blank"><i class="fab fa-linkedin"></i></a>
                                            <a href="javascript:void(0)" target="blank"><i class="fas fa-envelope"></i></a>
                                            <a href="javascript:void(0)" target="blank"><i class="fab fa-facebook-messenger"></i></a>
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
    <!--End Blogs-->



    <!-- lead generaton popup start -->
    <div class="modal leadpopup" id="leadModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="innerbody">
                        <div class="innerleft">
                            <div class="leadbtnclose"> <button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                            <h3>Liên hệ ngay để được tư vấn</h3>
                            <p class="mt10"></p>
                            <div class="form-block mt20">
                                <form action="#" id="quotes-form" method="post">
                                    <div class="fieldsets row">
                                        <div class="col-md-12 form-group floating-label">
                                            <input type="text" placeholder=" " required="required" class="floating-input">
                                            <label>Họ tên*</label>
                                        </div>
                                        <div class="col-md-12 form-group floating-label">
                                            <input type="email" placeholder=" " required="required" class="floating-input">
                                            <label>Email*</label>
                                        </div>
                                    </div>
                                    <div class="fieldsets row">
                                        <div class="col-md-12 form-group floating-label">
                                            <input type="tel" placeholder=" " required="required" class="floating-input">
                                            <label>Số điện thoại*</label>
                                        </div>
                                    </div>
                                    <div class="fieldsets mt20">
                                        <button type="submit" name="submit" class="lnk btn-main bg-btn">
                                            Liên hệ <i class="fas fa-chevron-right fa-icon"></i>
                                            <span class="circle"></span>
                                        </button>
                                    </div>
                                    <p class="trm"><i class="fas fa-lock"></i>Chúng tôi tôn trọng quyền riêng tư của bạn.</p>
                                </form>
                            </div>
                        </div>
                        <div class="innerright" data-background="{{ asset('asset/client/images/service/mockup-app.jpg') }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
