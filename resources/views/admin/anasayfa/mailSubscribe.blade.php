@extends('admin.layouts.master')
@section('title', 'Kontrol Paneli')

@section('css')



@endsection

@section('style')

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/plugins/extensions/ext-component-toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/vendors/css/extensions/toastr.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/style.css') }}">
    <!-- END: Custom CSS-->

    
@endsection

@section('breadcrumb-title','Mail Aboneliği Ayarları')

@section('breadcrumb-items')
<li class="breadcrumb-item"><a href="{{ route('kontrolPaneli') }}">Pano</a>
</li>
<li class="breadcrumb-item"><a href="javascript:void(0);">Anasayfa</a>
</li>
<li class="breadcrumb-item active">Mail Aboneliği Ayarları
</li>
    
@endsection

@section('content')



    <!-- BEGIN: Content-->

    <script>

        let mailSubscribeStatusPost = "{{ route('mailSubscribeStatus') }}",
        mailSubscribeUpdatePost = "{{ route('mailSubscribeUpdatePost') }}",
        token = "{{ csrf_token() }}";
    </script>



<div class="col-sm-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">Abone Olma</h4>
    </div>
    <div class="card-body">
      
      <div class="row justify-content-md-center">
     
        <div class="col-md-auto">
            <div class="form-check form-switch">
              <input style="width: 150px;height: 100px;" type="checkbox" {{ $mailSubscribe->ms_status == true ? 'checked' : '' }} class="form-check-input " id="mailSubscribeStatus" data-bs-toggle="modal" data-bs-target="#addNewCard" id="customSwitch3">
              <label style="line-height:100px; padding-left:20px; " class="form-check-label " for="customSwitch3">Kapat / Aç</label>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
         
<div class="col-md-12 col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Mail Aboneliği Düzenle</h4>
      </div>
      <div class="card-body">

        <form class="form form-horizontal" id="mailSubscribeUpdateForm">
          <div class="row">
            

            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="email-id">Başlık</label>
                </div>
                <div class="col-sm-9">
                  <input type="email"  class="form-control" name="ms_title" value="{{ $mailSubscribe->ms_title }}" placeholder="Başlık">
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="mb-1 row">
                <div class="col-sm-3">
                  <label class="col-form-label" for="contact-info">Açıklama</label>
                </div>
                <div class="col-sm-9">
                  <input type="text"  class="form-control" name="ms_description" value="{{ $mailSubscribe->ms_description }}" placeholder="Açıklama">
                </div>
              </div>
            </div>
           
            <div class="col-sm-9 offset-sm-3">
              <button type="button" class="btn btn-primary me-1 waves-effect waves-float waves-light mailSubscribeUpdatePost">Kaydet</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
            

           <!-- add new card modal  -->
<div class="modal fade" id="addNewCard" tabindex="-1" aria-labelledby="addNewCardTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-sm-5 mx-50 pb-5">
        <h1 class="text-center mb-1" id="addNewCardTitle">Mail Aboneliği</h1>
        <p class="text-center">Mail Aboneliği ayarını değiştirmek istediğinizden emin misiniz?</p>

          <div class="col-12 text-center">
            <button type="button" id="mailSubscribeStatusUpdate" aria-label="Close" data-bs-dismiss="modal"  class="btn btn-primary me-1 mt-1">Evet</button>
            <button type="reset" class="btn btn-outline-secondary mt-1" data-bs-dismiss="modal" aria-label="Close">
              Hayır
            </button>
          </div>


      </div>
    </div>
  </div>
</div>
       

      <!-- END: Content-->

@endsection

@section('script')

<script src="{{ asset('adminAssets/vendors/js/extensions/toastr.min.js') }}"></script>

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
