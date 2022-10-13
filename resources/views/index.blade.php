@extends('layouts.master')
@section('title', 'Anasayfa')

@section('css')

@endsection

@section('style')
@endsection




@section('content')
<section class="padding-100-0-50">
    <div class="container">
        <h5 class="title-default-coodiv-two">start your web site now with coodiv <span>simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                specimen book</span></h5>
        <div class="row justify-content-start">
            <div class="col-md-4">
                <div class="icon-hom-page-service-holder"><img src="{{ asset('assets/img/svgs/Detailed/Battery.svg') }}" alt="" /></div>
                <h5 class="icon-hom-page-service-title">web hosting</h5>
                <p class="icon-hom-page-service-text">Simply Dummy Text Of The Printing And Typesetting Industry.
                    Lorem Ipsum Has Been The Industry's </p>
            </div>
           
            <div class="col-md-8 mr-tp-60 hom-page-service-more">
                <span class="hom-page-service-more-banner"><img src="{{ asset('assets/img/bg/cercle.png') }}" alt="" /></span>
                <h5 class="hom-page-service-more-title">check out our latest offers <span>Simply Dummy Text Of The
                        Printing And Typesetting Industry</span></h5>
                <form
                    action="https://codeoxy.us16.list-manage.com/subscribe/post?u=49eb75689a0b6e7eb66b67e51&amp;id=4366ef611f"
                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                    class="validate hom-page-service-more-form" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group">
                            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                        </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text"
                                name="b_49eb75689a0b6e7eb66b67e51_4366ef611f" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Subscribe" name="subscribe"
                                id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
                <script type="e1c4e3aa2a7008edd99466cb-text/javascript">
                (function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='BIRTHDAY';ftypes[3]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);
                </script>

                <div class="hom-page-service-more-payment">
                    <a data-toggle="tooltip" data-placement="top" title="İyzico ile ödeme kabul ediliyor" href="javascript:void(0)"><img
                            src="{{ asset('assets/img/payment/paymentBand.svg') }}" alt="" /></a>
                   
                    <a data-toggle="tooltip" data-placement="top" title="Bitcoin ile ödeme kabul ediliyor" href="#"><img
                            src="{{ asset('assets/img/payment/icon-bitcoin.png') }}" alt="" /></a>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="padding-100-0 position-relative">
    <div class="body_overlay_ono"></div>
    <div class="container">
        <h5 class="title-default-coodiv-two">check out awesome plans, and order now <span class="mr-tp-20">chose
                which package is best for you.</span></h5>
        <div class="row justify-content-center">
            <div id="monthly-yearly-chenge" class="mr-tp-40 style-two">
                <a class="active monthly-price"> <span class="change-box-text">billed monthly</span> <span
                        class="change-box"></span></a>
                <a class="yearli-price"> <span class="change-box-text">billed annually</span></a>
            </div>
        </div>
        <div class="row justify-content-start second-pricing-table-container mr-tp-30">
            <div class="col-md-4">
                <div class="second-pricing-table">
                    <h5 class="second-pricing-table-title">Basic plan <span>mostly for personal using</span></h5>
                    <span class="second-pricing-table-price monthly">
                        <i class="monthly">$299.99<small>/mo</small></i>
                        <i class="yearly">$799.99<small>/year</small></i>
                    </span>
                    <ul class="second-pricing-table-body">
                        <li>2 TB of space</li>
                        <li>unlimited bandwidth</li>
                        <li>full backup systems</li>
                        <li>free domain</li>
                        <li class="not-chacked">unlimited database</li>
                    </ul>
                    <a class="second-pricing-table-button" href="#">next setup</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="second-pricing-table">
                    <h5 class="second-pricing-table-title">Expert plan <span>mostly for personal using</span></h5>
                    <span class="second-pricing-table-price monthly">
                        <i class="monthly">$399.99<small>/mo</small></i>
                        <i class="yearly">$899.99<small>/year</small></i>
                    </span>
                    <ul class="second-pricing-table-body">
                        <li>2 TB of space</li>
                        <li>unlimited bandwidth</li>
                        <li>full backup systems</li>
                        <li>free domain</li>
                        <li class="not-chacked">unlimited database</li>
                    </ul>
                    <a class="second-pricing-table-button" href="#">next setup</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="second-pricing-table active">
                    <h5 class="second-pricing-table-title">Relluxe plan <span>mostly for personal using</span></h5>
                    <span class="second-pricing-table-price monthly">
                        <i class="monthly">$499.99<small>/mo</small></i>
                        <i class="yearly">$999.99<small>/year</small></i>
                    </span>
                    <ul class="second-pricing-table-body">
                        <li>2 TB of space</li>
                        <li>unlimited bandwidth</li>
                        <li>full backup systems</li>
                        <li>free domain</li>
                        <li>unlimited database</li>
                    </ul>
                    <a class="second-pricing-table-button" href="#">next setup</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="our-pertners">
    <div class="container">
        <h2 class="d-none">our pertners</h2>
        <div class="owl-carousel pertners-carousel owl-theme">
            <div class="item">
                <a href="#"> <img src="{{ asset('assets/img/pertners/logo1.png') }}" alt="" /> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{ asset('assets/img/pertners/logo2.png') }}" alt="" /> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{ asset('assets/img/pertners/logo3.png') }}" alt="" /> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{ asset('assets/img/pertners/logo4.png') }}" alt="" /> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{ asset('assets/img/pertners/logo5.png') }}" alt="" /> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{ asset('assets/img/pertners/logo1.png') }}" alt="" /> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{ asset('assets/img/pertners/logo2.png') }}" alt="" /> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{ asset('assets/img/pertners/logo3.png') }}" alt="" /> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{ asset('assets/img/pertners/logo4.png') }}" alt="" /> </a>
            </div>
            <div class="item">
                <a href="#"> <img src="{{ asset('assets/img/pertners/logo5.png') }}" alt="" /> </a>
            </div>
        </div>
    </div>
</section>
<section class="section-wth-amwaj">
    <div class="bg_overlay_section-amwaj">
        <img src="{{ asset('assets/img/bg/b_bg_02.jpg') }}" alt="img-bg">
    </div>
    <div class="container">
        <div class="row justify-content-between mr-tp-50">
            <div class="col-md-6 side-text-right-container">
                <h2 class="side-text-right-title">We are with you ,<br> every step of the way</h2>
                <p class="side-text-right-text">
                    Whether you are looking for a <b>personal</b> website hosting plan or a <b>business</b> website
                    hosting plan, We are the perfect solution for you. Our powerful website hosting services will
                    not only help you achieve your overall website goals, but will also provide you with the
                    confidence you need in knowing that you are partnered with a <a href="#">reliable</a> and <a
                        href="#">secure</a> website hosting platform.
                    <br>
                    <br> We are one of the easiest website hosting platforms to use, and remain committed to
                    providing our customers with one of the best hosting solutions on the market.
                <p>
                    <a class="side-text-right-button" href="#">start with us now</a>
            </div>
            <div class="col-md-5">
                <div class="display-on-hover-box-container">
                    <a href="#tab1" class="display-on-hover-box-items">
                        <img src="{{ asset('assets/img/svgs/hover-box/quality-badge.svg') }}" alt="" />
                    </a>
                    <a href="#tab2" class="display-on-hover-box-items">
                        <img src="{{ asset('assets/img/svgs/hover-box/inclined-rocket.svg') }}" alt="" />
                    </a>
                    <a href="#tab3" class="display-on-hover-box-items">
                        <img src="{{ asset('assets/img/svgs/hover-box/public-speech.svg') }}" alt="" />
                    </a>
                    <a href="#tab4" class="display-on-hover-box-items">
                        <img src="{{ asset('assets/img/svgs/hover-box/big-light.svg') }}" alt="" />
                    </a>
                    <a href="#tab5" class="display-on-hover-box-items">
                        <img src="{{ asset('assets/img/svgs/hover-box/big-lifesaver.svg') }}" alt="" />
                    </a>
                    <a href="#tab6" class="display-on-hover-box-items">
                        <img src="{{ asset('assets/img/svgs/hover-box/headphones-with-thin-mic.svg') }}" alt="" />
                    </a>
                    <a href="#tab7" class="display-on-hover-box-items">
                        <img src="{{ asset('assets/img/svgs/hover-box/inclined-paper-plane.svg') }}" alt="" />
                    </a>
                    <a href="#tab8" class="display-on-hover-box-items">
                        <img src="{{ asset('assets/img/svgs/hover-box/big-telephone.svg') }}" alt="" />
                    </a>
                    <div class="display-on-hover-box-content">
                        <div class="display-on-hover-box-cotent-items">
                            <div id="tab1" class="tab-content-hover">
                                <h5>word press hosting</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit
                                    amet elit. Lorem ipsum dolor sit amet</p>
                            </div>
                            <div id="tab2" class="tab-content-hover">
                                <h5>word press2 hosting</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit
                                    amet elit. Lorem ipsum dolor sit amet</p>
                            </div>
                            <div id="tab3" class="tab-content-hover">
                                <h5>word press3 hosting</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit
                                    amet elit. Lorem ipsum dolor sit amet</p>
                            </div>
                            <div id="tab4" class="tab-content-hover">
                                <h5>word press4 hosting</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit
                                    amet elit. Lorem ipsum dolor sit amet</p>
                            </div>
                            <div id="tab5" class="tab-content-hover">
                                <h5>word press5 hosting</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit
                                    amet elit. Lorem ipsum dolor sit amet</p>
                            </div>
                            <div id="tab6" class="tab-content-hover">
                                <h5>word press6 hosting</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit
                                    amet elit. Lorem ipsum dolor sit amet</p>
                            </div>
                            <div id="tab7" class="tab-content-hover">
                                <h5>word press7 hosting</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit
                                    amet elit. Lorem ipsum dolor sit amet</p>
                            </div>
                            <div id="tab8" class="tab-content-hover">
                                <h5>word press8 hosting</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Lorem ipsum dolor sit
                                    amet elit. Lorem ipsum dolor sit amet</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-ads-section">
    <h1>12% OFF for all Web hosting services</h1>
</section>
<section class="perlex-efect-section parallax-window padding-100-0 position-relative" data-parallax="scroll"
    data-image-src="{{ asset('assets/img/demo/office.jpg') }}">

    <h6 class="d-none">video section</h6>
    <span class="perlex-hidden-iverlow"></span>
    <a class="play-button-in-section video-btn" data-toggle="modal"
        data-src="https://player.vimeo.com/video/58385453?badge=0" data-target="#videomodal" href="#">
        <i class="fas fa-play"></i>
        <span class="waves wave-1"></span>
        <span class="waves wave-2"></span>
        <span class="waves wave-3"></span>
        <span class="waves wave-4"></span>
    </a>
</section>
<section class="map-server-places-section position-relative">
    <div class="container">
        <div class="map-gene-server-place">
            <img src="{{ asset('assets/img/maps/map.png') }}" alt="" />
            <div class="server-places-spans">
                <span style="top: 45%;left: 53%;"> <b>Türkiye</b> <small class="bad">Türkiyenin tamamında</small></span>
            </div>
        </div>
        <div class="map-comment-area">
            <h3 class="map-comment-area-title">We are running in all of the world</h3>
            <p class="map-comment-area-text">Our 4 million users are the 4 million reasons why you have to use our
                services. Each service we provide is a source of real-time intelligence about new and current
                threats. That’s how we run our servers to make that network even stronger.</p>
        </div>
    </div>
    <div class="maps-comments-area-overflow"></div>
</section>

@endsection



@section('script')


@endsection
