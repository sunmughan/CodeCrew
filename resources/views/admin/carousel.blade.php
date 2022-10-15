@extends('admin.layouts.master')
@section('title', 'Kontrol Paneli')

@section('css')



@endsection

@section('style')

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/plugins/extensions/ext-component-toastr.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/style.css') }}">
    <!-- END: Custom CSS-->

    
@endsection


@section('content')



    <!-- BEGIN: Content-->

    <script>

        let load_Actions = "{{ route('loadActions') }}",
        inserMenu = "{{ route('insertMenu') }}",
        token = "{{ csrf_token() }}";
    </script>


@php
    echo '<pre>'; print_r($carousel); echo '</pre>';
@endphp
         
<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Carousel Düzenle</h4>
      </div>
      <div class="card-body">
        <form class="form form-horizontal">
          <div class="row">
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="first-name">Üst Yazı</label>
                </div>
                <div class="col-sm-9">
                  <input type="text"  class="form-control" name="ca_topText"  value="{{ $carousel->ca_topText }}" placeholder="First Name">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="email-id">Başlık</label>
                </div>
                <div class="col-sm-9">
                  <input type="email"  class="form-control" name="ca_mainText" value="{{ $carousel->ca_mainText }}" placeholder="Email">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="contact-info">Açıklama</label>
                </div>
                <div class="col-sm-9">
                  <input type="text"  class="form-control" name="ca_description" value="{{ $carousel->ca_description }}" placeholder="Mobile">
                </div>
              </div>
            </div>
           
            <div class="col-sm-9 offset-sm-3">
              <button type="reset" class="btn btn-primary me-1 waves-effect waves-float waves-light">Kaydet</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
            
       

      <!-- END: Content-->

@endsection



@section('script')

<!-- BEGIN: Page JS-->
<!-- END: Page JS-->

<script>
  $(window).on('load',  function(){
    if (feather) {
      feather.replace({ width: 14, height: 14 });
    }
  })
</script>


@endsection
