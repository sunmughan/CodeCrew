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

    @endif
   

    @if(Route::currentRouteName()== 'iletisim')

    <div class="row">
        <div class="col-md-5">
            <h3 class="mt-3 main-header-text-title mr-tp-60"><span>You still got questions ?</span>you can talk
                to our humans.
                @yield('breadcrumb-items')
            </h3>
            <div class="contact-us-social-icons">
                <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="tw" href="#"><i class="fab fa-twitter"></i></a>
                <a class="yb" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="col-md-7">
            <form class="row form-contain-home contact-page-form-send" id="ajax-contact" method="post"
                action="https://demo.coodiv.net/html/bredh/html/v1/mailer.php">

                <h5>get in touch <span>discouver how can our services grow your business.</span></h5>
                <div id="form-messages"></div>

                <div class="col-md-12">

                    <div class="field input-field">
                        <input class="form-contain-home-input" type="text" id="name" name="name"
                            placeholder="entre your name" required>

                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <div class="col-md-12">

                    <div class="field input-field">
                        <input class="form-contain-home-input" type="email" id="email" name="email"
                            placeholder="entre your email" required>

                        <i class="far fa-envelope"></i>
                    </div>
                </div>

                <div class="col-md-12">

                    <div class="field input-field">
                        <textarea class="form-contain-home-input" id="message" name="message"
                            placeholder="entre your message" required></textarea>

                    </div>
                </div>

                <div class="btn-holder-contect">
                    <button type="submit">Send</button>

                </div>
            </form>

        </div>
    </div>

    @endif


    @if(Route::currentRouteName()== 'hakkinda')

    <h3 class="mt-3 main-header-text-title"><span>best web hosting provider 2019 adwords</span>about bredh team
      @yield('breadcrumb-items')
    </h3>

    @endif

    
    @if(Route::currentRouteName()== 'yardimMerkezi')

    <h3 class="mt-3 main-header-text-title"><span>best web hosting provider 2019 adwords</span>about bredh team
      @yield('breadcrumb-items')
    </h3>

    @endif


</main>