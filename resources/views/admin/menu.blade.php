@extends('admin.layouts.master')
@section('title', 'Kontrol Paneli')

@section('css')



@endsection

@section('style')

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/pages/dashboard-ecommerce.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/plugins/extensions/ext-component-toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/vendors/css/forms/select/select2.min.css') }}">
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


         

            
            <section class="form-control-repeater">
                <div class="row">
                <!-- Invoice repeater -->
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Menüler</h4>
                    </div>
                    <div class="card-body">
                        <div data-repeater-list="invoice">



                            @foreach ($menu as $item)
                        <form method="POST"  class="invoice-repeater menuForm">

                            <div data-repeater-item>
                                <div class="row d-flex align-items-end">
                                    <div class="col-md-2 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="itemname">Menü İsmi</label>
                                            <input
                                            type="text"
                                            class="form-control"
                                            id="m_title"
                                            aria-describedby="itemname"
                                            placeholder="Vuexy Admin Template"
                                            value="{{ $item->m_title }}"
                                            />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-2 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="menuAction">Menü Yönlendirmesi</label>
                                                <select class="form-select actionSelect" id="select2-basic">
                                                    <option value="{{ $item->m_action }}">{{ $item->m_action }}</option>
                                                </select>
                                        </div>
                                    </div>

                                    <div class="col-md-2 col-12">
                                        <div class="mb-1">
                                            <label class="form-label" for="m_author">Author</label>
                                            <input type="text" name="m_author" id="m_author"  readonly class="form-control-plaintext" id="m_author" value="{{ $item->m_author }}" />
                                        </div>
                                        </div>
                
                
                                        <div class="col-md-2 col-12">
                                            <label class="mb-1 form-label" for="">Anamenü </label>
                                            <div class="mb-1">
                                                <div class="form-check form-check-primary">
                                                    <input type="checkbox" class="form-check-input" id="colorCheck1" {{ $item->m_main == true ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="colorCheck1">Ana menü</label>
                                                  </div>
                                            </div>
                                            </div>
                                        <div class="col-md-1 col-12">
                                            <label class="mb-1 form-label" for="">Durum </label>
                                            <div class="mb-1">
                                                    <div class="form-check form-switch form-check-primary">
                                                        <input type="checkbox" class="form-check-input" id="customSwitch10" {{ $item->m_status == true ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="customSwitch10">
                                                          <span class="switch-icon-left"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></span>
                                                          <span class="switch-icon-right"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span>
                                                        </label>
                                                      </div>
                                            </div>
                                            </div>
                
                                   
                
                                    <div class="col-md-1 col-12 mb-50">
                                        <div class="mb-1">
                                            <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                            <i data-feather="x" class="me-25"></i>
                                            <span>Sil</span>
                                            </button>
                                        </div>
                                    
                                    </div>
                                    <div class="col-md-2 col-12 mb-50">
                                        <div class="mb-1">
                                            <button m_id="{{ $item->m_id }}" class="btn btn-outline-success text-nowrap px-1 menuInsert" type="button">
                                            <i data-feather='save' class="me-25"></i>
                                            <span>Kaydet</span>
                                            </button>
                                        </div>
                                    
                                    </div>
                                </div>
                                <hr />
                            </div>

                        </form>

                            @endforeach


                            



                        </div>
                        <div class="row">
                            <div class="col-12">
                            <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                <i data-feather="plus" class="me-25"></i>
                                <span>Yeni Ekle</span>
                            </button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- /Invoice repeater -->
                </div>
            </section>


      <!-- END: Content-->

@endsection



@section('script')

<!-- BEGIN: Page JS-->
<script src="{{ asset('adminAssets/js/scripts/forms/form-repeater.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ asset('adminAssets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script src="{{ asset('adminAssets/js/scripts/forms/form-select2.min.js') }}"></script>
<script src="{{ asset('adminAssets/js/scripts/extensions/ext-component-blockui.js') }}"></script>
<!-- END: Page JS-->

<script>
  $(window).on('load',  function(){
    if (feather) {
      feather.replace({ width: 14, height: 14 });
    }
  })
</script>


@endsection
