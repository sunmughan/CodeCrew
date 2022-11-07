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



  @foreach ($referances as $item)

  @php
      $id = uniqid("ref");
  @endphp
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
              href="javascript:void(0)"
              data-bs-target="#modal-{{ $id }}{{ $item->r_id }}"
              data-bs-toggle="modal"
              class="stretched-link text-nowrap add-new-role"
            >
                
              </a>
              <h4 class="fw-bolder">{{ $item->r_name }} </h4>
            </div>
          </div>
        <div class="col-sm-5">
          <div class="d-flex align-items-end justify-content-center h-100">
            <img
              src="{{ asset($item->r_logo) }}"
              class="img-fluid mt-2"
              alt="Image"
              width="85"
            />
          </div>
        </div>
       
      </div>
    </div>
  </div>
  {{--  --}}

  
<div class="modal modal-slide-in new-user-modal fade" id="modal-{{ $id }}{{ $item->r_id }}">
  <div class="modal-dialog">
    <form class="add-new-user modal-content pt-0"  method="POST" enctype="multipart/form-data" action="{{ route('referanceUpdatePost',$item->r_id) }}">
      @csrf
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
            placeholder="Referans İsmi"
            value="{{ $item->r_name }}"
            name="r_name"
          />
        </div>

        <div class="mb-1">
          <label class="form-label" for="basic-icon-default-fullname">Referans Website Linki</label>
          <input
            type="text"
            class="form-control dt-full-name"
            id="basic-icon-default-fullname"
            placeholder="Referans Website Linki"
            value="{{ $item->r_url }}"
            name="r_url"
          />
        </div>
        <div class="mb-1">
          <label class="form-label" for="basic-icon-default-uname">Referans Logosu</label>
          <div class="col-md-12">

            <img style="border: 1px  solid #161D31;margin:10px;" width="200" src="{{ asset($item->r_logo) }}" alt="">
          </div>
          <input type="hidden" name="r_oldLogo" value="{{ $item->r_logo }}">
          <input class="form-control" name="r_logo" type="file" id="formFile">
        </div>
        
        <button type="submit" class="btn btn-primary me-1 data-submit">Güncelle</button>
        <a href="{{ route('referanceDeleteGet',$item->r_id) }}" class="btn btn-danger me-1 data-submit ">Sil</a>
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">İptal</button>
      </div>
    </form>
  </div>
</div>

      
  @endforeach



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
              data-bs-target="#modal-new"
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



  
<div class="modal modal-slide-in new-user-modal fade" id="modal-new">
  <div class="modal-dialog">
    <form action="{{ route('referanceInsertPost') }}" method="POST" enctype="multipart/form-data" class="add-new-user modal-content pt-0">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      @csrf
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
            placeholder="Referans İsmi"
            name="r_name"
          />
        </div>

        <div class="mb-1">
          <label class="form-label" for="basic-icon-default-fullname">Referans Website Linki</label>
          <input
            type="text"
            class="form-control dt-full-name"
            id="basic-icon-default-fullname"
            placeholder="Referans Website Linki"
            name="r_url"
          />
        </div>
        <div class="mb-1">
          <label class="form-label" for="basic-icon-default-uname">Referans Logosu</label>
          <input class="form-control" name="r_logo" type="file" id="formFile">
        </div>
        
        <button type="submit" class="btn btn-primary me-1 data-submit">Ekle</button>
        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">İptal</button>
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
