@extends('layouts.master')
@section('title', 'Hakkında')

@section('css')

@endsection

@section('style')
@endsection


@section('breadcrumb-items')
<span class="sub-page-breadcrumb"><a href="{{ route('index') }}">Anasayfa</a> - Hakkında</span>
@endsection

@section('content')
<section class="padding-40-0-100 position-relative">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-4 side-text-right-container">
                <h2 class="side-text-right-title f-size25">Hizmetler ,<br> every step of the way</h2>
                <p class="side-text-right-text f-size16">
                    Whether you are looking for a <b>personal</b> website hosting plan or a <b>business</b> website
                    hosting plan, We are the perfect solution for you. Our powerful website hosting services will
                    not only help you achieve your overall website goals, but will also provide you with the
                    confidence you need in knowing that you are partnered with a <a href="#">reliable</a> and <a
                        href="#">secure</a> website hosting platform.
                    <br>
                </p>
                <p>
                    <a class="side-text-right-button" href="#">start with us now</a>
                </p>
            </div>
            <div class="col-md-7 our-services-carousel-container">
                <div class="our-services-carousel">
                    <div class="carousel-cell">
                        <div class="our-services-coresol-box">
                            <i class="h-flaticon-019-uptime"></i>
                            <h5>domain resslers</h5>
                            <p>We offers a free month of service for new customers.* Sign up for your trial offer
                                and instantly have deluxe hosting in your account with free </p>
                            <a href="#"></a>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="our-services-coresol-box">
                            <i class="h-flaticon-023-database-2"></i>
                            <h5>web hosting</h5>
                            <p>We offers a free month of service for new customers.* Sign up for your trial offer
                                and instantly have deluxe hosting in your account with free </p>
                            <a href="#"></a>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="our-services-coresol-box">
                            <i class="h-flaticon-043-servers-3"></i>
                            <h5>domain resslers</h5>
                            <p>We offers a free month of service for new customers.* Sign up for your trial offer
                                and instantly have deluxe hosting in your account with free </p>
                            <a href="#"></a>
                        </div>
                    </div>
                    <div class="carousel-cell">
                        <div class="our-services-coresol-box">
                            <i class="h-flaticon-016-database-3"></i>
                            <h5>web hosting</h5>
                            <p>We offers a free month of service for new customers.* Sign up for your trial offer
                                and instantly have deluxe hosting in your account with free </p>
                            <a href="#"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="padding-0-100 position-relative">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-7 about-us-img-section">
                <img src="{{ asset('assets/img/demo/groupofworks.jpg') }}" alt="" />
            </div>
            <div class="col-md-4 side-text-right-container d-flex mx-auto flex-column">
                <div class="mb-auto"></div>
                <h2 class="side-text-right-title f-size25">Her adımda yanınnızdayız ,<br> every step of the way</h2>
                <p class="side-text-right-text f-size16">
                    Whether you are looking for a <b>personal</b> website hosting plan or a <b>business</b> website
                    hosting plan, We are the perfect solution for you. Our powerful website hosting services will
                    not only help you achieve your overall website goals, but will also provide you with the
                    confidence you need in knowing that you are partnered with a <a href="#">reliable</a> and <a
                        href="#">secure</a> website hosting platform.
                    <br>
                </p>
                <p>
                    <a class="side-text-right-button" href="#">start with us now</a>
                </p>
                <div class="mt-auto"></div>
            </div>
        </div>
    </div>
</section>
<section class="padding-100-0 position-relative how-it-work-section">
    <div class="container">
        <h5 class="title-default-coodiv-two">Nasıl Çalışır <span>simply dummy text of the printing and typesetting
                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a type specimen book</span></h5>
        <div class="row justify-content-center mr-tp-70 how-it-work-section-row">
            <div class="col-md-4">
                <div class="how-it-works-box">
                    <i class="h-flaticon-001-bug-1"></i>
                    <h5>find your plan</h5>
                    <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="how-it-works-box">
                    <i class="h-flaticon-002-error-404"></i>
                    <h5>find your plan</h5>
                    <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="how-it-works-box">
                    <i class="h-flaticon-008-upload"></i>
                    <h5>find your plan</h5>
                    <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection



@section('script')


@endsection
