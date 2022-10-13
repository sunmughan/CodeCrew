@extends('layouts.master')
@section('title', 'İletişim')

@section('css')

@endsection

@section('style')
@endsection



@section('breadcrumb-items')
<span class="sub-page-breadcrumb"><a href="{{ route('index') }}">Anasayfa</a> - İletişim</span>
@endsection

@section('content')
<div id="mobile-form-contact-height"></div>
<section class="padding-20-0 mob-display-none">
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-md-5">
                <h5 class="immediate-help-center-title">Acil yardım mı lazım?</h5>
                <p class="immediate-help-center-text">Destek ekibimiz 7/24 sizinle</p>
                <a class="immediate-help-center-link" href="#">00213 123 45 67 89</a>
                <a class="immediate-help-center-link" href="#"><span class="__cf_email__"
                        data-cfemail="afdcdadfdfc0dddbefccc0c0cbc6d981c1cadb">[email&#160;protected]</span></a>
            </div>
        </div>
    </div>
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
            <h3 class="map-comment-area-title">Dünyanın her yerine yayılıyoruz</h3>
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
