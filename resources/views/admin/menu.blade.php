@extends('admin.layouts.master')
@section('title', 'Kontrol Paneli')

@section('css')



@endsection

@section('style')

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/pages/dashboard-ecommerce.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/plugins/charts/chart-apex.min.css') }}">
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
                        <form action="#" class="invoice-repeater">
                        <div data-repeater-list="invoice">



                            <div data-repeater-item>
                            <div class="row d-flex align-items-end">
                                <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="itemname">Menü İsmi</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    id="itemname"
                                    aria-describedby="itemname"
                                    placeholder="Vuexy Admin Template"
                                    />
                                </div>
                                </div>
            
                                <div class="col-md-2 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="menuAction">Menü Yönlendirmesi</label>
                                            <select class="form-select actionSelect" id="select2-basic">
                                              <option value="default">Yönlendirme Seçin</option>
                                          
                                            </select>
                                    </div>
                                </div>
            
                                <div class="col-md-2 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="itemquantity">Quantity</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    id="itemquantity"
                                    aria-describedby="itemquantity"
                                    placeholder="1"
                                    />
                                </div>
                                </div>
            
                                <div class="col-md-1 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="staticprice">Price</label>
                                    <input type="text" readonly class="form-control-plaintext" id="staticprice" value="$32" />
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
                                        <button class="btn btn-outline-success text-nowrap px-1" data-repeater-delete type="button">
                                        <i data-feather='save' class="me-25"></i>
                                        <span>Kaydet</span>
                                        </button>
                                    </div>
                                  
                                </div>
                            </div>
                            <hr />
                            </div>



                        </div>
                        <div class="row">
                            <div class="col-12">
                            <button class="btn btn-icon btn-primary" type="button" data-repeater-create>
                                <i data-feather="plus" class="me-25"></i>
                                <span>Add New</span>
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-page-block">Default</button>
                            </div>
                        </div>
                        </form>
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
