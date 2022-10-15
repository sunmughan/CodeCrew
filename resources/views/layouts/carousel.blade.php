<main class="container mb-auto">

    @if (Route::currentRouteName()== 'index' )
			
    <div class="carousel carousel-main">
        <div class="carousel-cell">
            <h3 class="mt-3 main-header-text-title"><span>{{ $carousel->ca_topText }}</span> {{ $carousel->ca_mainText }}<small>{{ $carousel->ca_description }}</small></h3>
           @if ($carousel->ca_searchStatus == 1)

           <form action="" method="POST" id="domain-search-header" class="col-md-6">
                <i class="fas fa-globe"></i>
                <input type="text" placeholder="Site içinde arama yapabilirsiniz" id="domain" name="domains">
                <span class="inline-button-domain-order">
                    {{-- <button data-toggle="tooltip" data-placement="left" title="transfer" id="transfer-btn"
                        type="submit" name="transfer" value="Transfer"><i class="fas fa-undo"></i></button> --}}
                    <button data-toggle="tooltip" data-placement="left" title="search" id="search-btn"
                        type="submit" name="submit" value="Search"><i class="fas fa-search"></i></button>
                </span>
            </form>
               
           @endif
                  
        </div>

       
    </div>

    @endif
   

    @if(Route::currentRouteName()== 'iletisim')

    <div class="row">
        <div class="col-md-5">
            <h3 class="mt-3 main-header-text-title mr-tp-60"><span>Hala soruların mı var ?</span>Bizimle iletişime geçebilirsin.
                @yield('breadcrumb-items')
            </h3>
            <div class="contact-us-social-icons">
                <a class="fb" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="tw" href="#"><i class="fab fa-twitter"></i></a>
                <a class="yb" href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
      @if ($contact->c_formStatus == 1)
      <div class="col-md-7">
        <form class="row form-contain-home contact-page-form-send" id="ajax-contact" method="POST"
            action="">

            <h5>İletişime geç <span>CodeCrew ile iletişime geç.</span></h5>
            <div id="form-messages"></div>

            <div class="col-md-12">

                <div class="field input-field">
                    <input class="form-contain-home-input" type="text" id="name" name="name"
                        placeholder="İsim ve soyisim girin" required>

                    <i class="fas fa-user"></i>
                </div>
            </div>

            <div class="col-md-12">

                <div class="field input-field">
                    <input class="form-contain-home-input" type="email" id="email" name="email"
                        placeholder="E-posta adresi girin" required>

                    <i class="far fa-envelope"></i>
                </div>
            </div>

            <div class="col-md-12">

                <div class="field input-field">
                    <textarea class="form-contain-home-input" id="message" name="message"
                        placeholder="Mesajınızı yazın" required></textarea>

                </div>
            </div>

            <div class="btn-holder-contect">
                <button type="submit">Gönder</button>

            </div>
        </form>

    </div>
      @endif
    </div>

    @endif


    @if(Route::currentRouteName()== 'hakkinda')

    <h3 class="mt-3 main-header-text-title">CodeCrew Hakkında
      @yield('breadcrumb-items')
    </h3>

    @endif

    
    @if(Route::currentRouteName()== 'yardimMerkezi')

    <h3 class="mt-3 main-header-text-title">Yardım Merkezi
      @yield('breadcrumb-items')
    </h3>

    @endif


</main>