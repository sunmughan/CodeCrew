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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/style.css') }}">
    <!-- END: Custom CSS-->

    
@endsection


@section('content')



    <!-- BEGIN: Content-->
         

            
            <section class="form-control-repeater">
                <div class="row">
                <!-- Invoice repeater -->
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Invoice</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" class="invoice-repeater">
                        <div data-repeater-list="invoice">



                            <div data-repeater-item>
                            <div class="row d-flex align-items-end">
                                <div class="col-md-4 col-12">
                                <div class="mb-1">
                                    <label class="form-label" for="itemname">Item Name</label>
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
                                    <label class="form-label" for="itemcost">Cost</label>
                                    <input
                                    type="number"
                                    class="form-control"
                                    id="itemcost"
                                    aria-describedby="itemcost"
                                    placeholder="32"
                                    />
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
                                        <span>Delete</span>
                                        </button>
                                    </div>
                                  
                                </div>
                                <div class="col-md-2 col-12 mb-50">
                                    <div class="mb-1">
                                        <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">
                                        <i data-feather="x" class="me-25"></i>
                                        <span>Delete</span>
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
<!-- END: Page JS-->

<script>
  $(window).on('load',  function(){
    if (feather) {
      feather.replace({ width: 14, height: 14 });
    }
  })
</script>


@endsection
