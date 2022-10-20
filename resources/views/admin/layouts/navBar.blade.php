 <!-- BEGIN: Main Menu-->
 <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item me-auto"><a class="navbar-brand" href="index-2.html"><span class="brand-logo">
              <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                <defs>
                  <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                    <stop stop-color="#000000" offset="0%"></stop>
                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                  </lineargradient>
                  <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                    <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                    <stop stop-color="#FFFFFF" offset="100%"></stop>
                  </lineargradient>
                </defs>
                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                    <g id="Group" transform="translate(400.000000, 178.000000)">
                      <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                      <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                      <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                      <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                      <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                    </g>
                  </g>
                </g>
              </svg></span>
            <h2 class="brand-text">Vuexy</h2></a></li>
        <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
      </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">
          Panolar</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
            </li>

            <li class=" nav-item {{ Route::currentRouteName()== 'kontrolPaneli' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('kontrolPaneli') }}"><i data-feather='airplay'></i><span class="menu-title text-truncate" data-i18n="Analistik Pano">Analitiksel Pano</span></a>
            </li>

            <li class=" nav-item {{ Route::currentRouteName()== 'istatistikPaneli' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('istatistikPaneli') }}"><i data-feather='bar-chart'></i><span class="menu-title text-truncate" data-i18n="Analistik Pano">İstatiksel Pano</span></a>
            </li>

            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">
              Destek</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                </li>

            <li class=" nav-item {{ Route::currentRouteName()== 'istatistikPaneli' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('istatistikPaneli') }}"><i data-feather='flag'></i><span class="menu-title text-truncate" data-i18n="Analistik Pano">Yardım Merkezi</span></a>
            </li>

          <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">
            Sayfa Ayarları</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
              </li>

            {{-- sidebar-group-active open --}}
            <li class="nav-item has-sub {{ Route::currentRouteName()== 'carousel' || Route::currentRouteName() == 'mailSubscribe' ? 'sidebar-group-active open' : '' }}"><a class="d-flex align-items-center" href="#"><i data-feather='home'></i><span class="menu-title text-truncate" data-i18n="Anasayfa">Anasayfa</span></a>
              <ul class="menu-content">
                <li class=" nav-item {{ Route::currentRouteName()== 'carousel' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('carousel') }}"><i data-feather='sliders'></i><span class="menu-title text-truncate" data-i18n="Carousel">Carousel</span></a>
                </li>
      
                <li class=" nav-item {{ Route::currentRouteName()== 'kontrolPaneli' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('kontrolPaneli') }}"><i data-feather='trello'></i><span class="menu-title text-truncate" data-i18n="Hizmetlerimiz">Hizmetlerimiz</span></a>
                </li>
      
                <li class=" nav-item {{ Route::currentRouteName()== 'mailSubscribe' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('mailSubscribe') }}"><i data-feather='mail'></i><span class="menu-title text-truncate" data-i18n="Mail Aboneliği">Mail Aboneliği</span></a>
                </li>
      
                <li class=" nav-item {{ Route::currentRouteName()== 'kontrolPaneli' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('kontrolPaneli') }}"><i data-feather='package'></i><span class="menu-title text-truncate" data-i18n="Paketler">Paketler</span></a>
                </li>
      
                <li class=" nav-item {{ Route::currentRouteName()== 'kontrolPaneli' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('kontrolPaneli') }}"><i data-feather='square'></i><span class="menu-title text-truncate" data-i18n="Referanslar">Referanslar</span></a>
                </li>
      
                <li class=" nav-item {{ Route::currentRouteName()== 'kontrolPaneli' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('kontrolPaneli') }}"><i data-feather='help-circle'></i><span class="menu-title text-truncate" data-i18n="Yardım Ve Destek">Yardım Ve Destek</span></a>
                </li>
              </ul>
            </li>
  
            <li class="nav-item has-sub {{ Route::currentRouteName()== 'kontrolPaneli' ? 'sidebar-group-active open' : '' }}"><a class="d-flex align-items-center" href="#"><i data-feather='book'></i><span class="menu-title text-truncate" data-i18n="Hakkında">Hakkında</span></a>
              <ul class="menu-content">
      
                <li class=" nav-item {{ Route::currentRouteName()== 'kontrolPaneli' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('kontrolPaneli') }}"><i data-feather='trello'></i><span class="menu-title text-truncate" data-i18n="Hizmetlerimiz">Hizmetlerimiz</span></a>
                </li>
      
                <li class=" nav-item {{ Route::currentRouteName()== 'kontrolPaneli' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('kontrolPaneli') }}"><i data-feather='flag'></i><span class="menu-title text-truncate" data-i18n="Destek">Destek</span></a>
                </li>

                <li class=" nav-item {{ Route::currentRouteName()== 'kontrolPaneli' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('kontrolPaneli') }}"><i data-feather='help-circle'></i><span class="menu-title text-truncate" data-i18n="Destek">Nasıl Çalışır</span></a>
                </li>
                
      
              </ul>
            </li>
  
            <li class="nav-item has-sub {{ Route::currentRouteName()== 'kontrolPaneli' ? 'sidebar-group-active open' : '' }}"><a class="d-flex align-items-center" href="#"><i data-feather='phone'></i><span class="menu-title text-truncate" data-i18n="Hakkında">İletişim</span></a>
              <ul class="menu-content">
      
                {{-- <li class=" nav-item {{ Route::currentRouteName()== 'kontrolPaneli' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('kontrolPaneli') }}"><i data-feather='file-text'></i><span class="menu-title text-truncate" data-i18n="İletişim Formu">İletişim Formu</span></a>
                </li> --}}
      
                <li class=" nav-item {{ Route::currentRouteName()== 'kontrolPaneli' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('kontrolPaneli') }}"><i data-feather='pen-tool'></i><span class="menu-title text-truncate" data-i18n="Destek">İletişim Bilgileri</span></a>
                </li>

      
              </ul>
            </li>
  
    
                
      
      <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">
        Genel Ayarlar</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
          </li>
          <li class=" nav-item {{ Route::currentRouteName()== 'sayfalar' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('sayfalar') }}"><i data-feather="file-text"></i><span class="menu-title text-truncate" data-i18n="Sayfalar">Sayfalar</span></a>
          </li>


          <li class=" nav-item  {{ Route::currentRouteName()== 'menuler' ? 'active' : '' }}"><a class="d-flex align-items-center" href="{{ route('menuler') }}"><i data-feather='menu'></i>
          <span class="menu-title text-truncate" data-i18n="Menüler">Menüler</span></a>
          </li>
{{-- 
          <li class=" nav-item"><a class="d-flex align-items-center" href="app-email.html"><i data-feather="file-text"></i>
          <span class="menu-title text-truncate" data-i18n="Yazılar">Yazılar</span></a>
          </li> --}}



      </ul>
    </div>
  </div>
  <!-- END: Main Menu-->
