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


<h3>Referans Listesi</h3>
<p class="mb-2">
 Websitenin referanslar bölümünde yer almasını istediğiniz iş ortaklarını ya da müşterilerinizi ekleyebilirsiniz.
</p>

<!-- Role cards -->
<div class="row">



  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="card-body row">
        <div class="d-flex justify-content-between">
            <span>Referans Düzenle</span>
            <a href="javascript:void(0);" class="text-body"><i data-feather="edit" class="font-medium-5"></i></a>
          </div>
          <div class="col-sm-7">
            <div class="card-body text-sm-end text-center ps-sm-0">
              <a
                href="{{ route('index') }}"
               
                class="stretched-link text-nowrap "
              >
                
              </a>
              <h4 class="fw-bolder">Nike </h4>
            </div>
          </div>
        <div class="col-sm-5">
          <div class="d-flex align-items-end justify-content-center h-100">
            <img
              src="{{ asset('assets/img/pertners/nike.svg') }}"
              class="img-fluid mt-2"
              alt="Image"
              width="85"
            />
          </div>
        </div>
       
      </div>
    </div>
  </div>


  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">
      <div class="row">
        <div class="col-sm-5">
          <div class="d-flex align-items-end justify-content-center h-100">
            <img
              src="{{ asset('adminAssets/images/illustrations/faq-illustrations.svg') }}"
              class="img-fluid mt-2"
              alt="Image"
              width="85"
            />
          </div>
        </div>
        <div class="col-sm-7">
          <div class="card-body text-sm-end text-center ps-sm-0">
            <a
              href="javascript:void(0)"
              data-bs-target="#modals-slide-in"
              data-bs-toggle="modal"
              class="stretched-link text-nowrap add-new-role"
            >
              <span class="btn btn-primary mb-1">Referans Ekle</span>
            </a>
            <p class="mb-0">Yeni bir referans ekle</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>


<div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
  <div class="modal-dialog">
    <form class="add-new-user modal-content pt-0">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      <div class="modal-header mb-1">
        <h5 class="modal-title" id="exampleModalLabel">Referans Ekle</h5>
      </div>
      <div class="modal-body flex-grow-1">
        <div class="mb-1">
          <label class="form-label" for="basic-icon-default-fullname">Referans İsmi</label>
          <input
            type="text"
            class="form-control dt-full-name"
            id="basic-icon-default-fullname"
            placeholder="John Doe"
            name="user-fullname"
          />
        </div>
        <div class="mb-1">
          <label class="form-label" for="basic-icon-default-uname">Referans Logosu</label>
          <input
            type="text"
            id="basic-icon-default-uname"
            class="form-control dt-uname"
            placeholder="Web Developer"
            name="user-name"
          />
        </div>
        
        <button type="submit" class="btn btn-primary me-1 data-submit">Submit</button>
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </form>
  </div>
</div>

@endsection



@section('script')


<script>
  $(window).on('load',  function(){
    if (feather) {
      feather.replace({ width: 14, height: 14 });
    }
  })
</script>


@endsection
