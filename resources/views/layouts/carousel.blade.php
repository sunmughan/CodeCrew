<main class="container mb-auto">

    @if (Route::currentRouteName()== 'index' )
			
    <div class="carousel carousel-main">
        <div class="carousel-cell">
            <h3 class="mt-3 main-header-text-title"><span>the best domain provider in the area</span>secure and
                guaranteed <small>order you own now</small></h3>
            <form action="https://demo.coodiv.net/html/bredh/html/v1/domains.html" id="domain-search-header"
                class="col-md-6">
                <i class="fas fa-globe"></i>
                <input type="text" placeholder="Site içinde arama yapabilirsiniz" id="domain" name="domains">
                <span class="inline-button-domain-order">
                    {{-- <button data-toggle="tooltip" data-placement="left" title="transfer" id="transfer-btn"
                        type="submit" name="transfer" value="Transfer"><i class="fas fa-undo"></i></button> --}}
                    <button data-toggle="tooltip" data-placement="left" title="search" id="search-btn"
                        type="submit" name="submit" value="Search"><i class="fas fa-search"></i></button>
                </span>
            </form>
            {{-- <span class="col-md-6 domain-search-header-pricetext">starting at <b>$0.99/year</b></span> --}}
            <div class="owl-theme owl-domain-prices-previw col-md-7">
                
                <div class="domain-name-classes item">
                    <div class="domain-img"><img src="{{ asset('assets/img/domain/black/com.png') }}" alt="" /></div>
                    <span class="price">$2.99</span>
                    <span class="features-domains">
                        <a data-toggle="tooltip" data-placement="right" title="on sale"><img
                                src="{{ asset('assets/img/svgs/Time.svg') }}" alt="" /></a>
                        <a data-toggle="tooltip" data-placement="right" title="secure"><img
                                src="{{ asset('assets/img/svgs/Locked.svg') }}" alt="" /></a>
                    </span>
                </div>
              
           
           
            </div>
        </div>

       
    </div>
   

    @else

    <h3 class="mt-3 main-header-text-title"><span>best web hosting provider 2019 adwords</span>about bredh team
        <span class="sub-page-breadcrumb"><a href="#">homepage</a> - about bredh team</span>
    </h3>

    @endif


</main>