<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Bredh flat responsive HTML & WHMCS hosting and domains template">
	<meta name="author" content="coodiv.net (nedjai mohamed)">
	<link rel="icon" href="{{ asset('favicon.ico') }}">
	<title>{{ env("APP_NAME") }} @yield('title')</title>

	
    @include('layouts.css')
    @yield('style')

	
	
</head>

<body>
    @include('layouts.videoModal')

	@include('layouts.preloader')


	<div id="coodiv-header" class="d-flex mx-auto flex-column">
		<div class="bg_overlay_header">
			<div class="bg-img-header-new-standard">&nbsp;</div>
		</div>

		@include('layouts.navBar')


		<div class="mt-auto header-top-height"></div>
		
        @include('layouts.carousel')

		<div class="mt-auto"></div>
	</div>


    @yield('content')

	@include('layouts.footer')

	@include('layouts.script')
</body>

<!-- Mirrored from demo.coodiv.net/html/bredh/html/v1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 May 2022 10:31:35 GMT -->

</html>