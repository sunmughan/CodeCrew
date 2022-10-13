<nav id="coodiv-navbar-header" class="navbar navbar-expand-md fixed-header-layout">
    <div class="container main-header-coodiv-s">
        <a class="navbar-brand" href="{{ route('index') }}"><img width="100" src="{{ asset('assets/img/header/logo.jpg') }}" alt="" /></a>
        <button class="navbar-toggle offcanvas-toggle menu-btn-span-bar ml-auto" data-toggle="offcanvas"
            data-target="#offcanvas-menu-home">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="collapse navbar-collapse navbar-offcanvas" id="offcanvas-menu-home">
            <ul class="navbar-nav ml-auto">
    
                @foreach ($menu as $item)
                    
                <li class="nav-item {{ Route::currentRouteName()== $item->m_action ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route($item->m_action) }}">{{ $item->m_title }}</a>
                </li>

                @endforeach
               
            </ul>
        </div>
        <ul class="header-user-info-coodiv">
            <li><a role="button" id="header-login-dropdown" 
                  href="{{ route('kontrolPaneli') }}">Giriş Yap</a> <span>444-12-32</span>


            </li>
        </ul>
    </div>
</nav>



            {{-- <li class="nav-item dropdown active">
                    <a class="nav-link" href="#" role="button" id="header-first-drop-down"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home<span
                            class="sr-only">(current)</span></a>
                    <ul class="dropdown-menu coodiv-dropdown-header" aria-labelledby="header-first-drop-down">
                        <li><a class="dropdown-item" href="index.html">homepage 01</a></li>
                        <li><a class="dropdown-item"    href="https://demo.coodiv.net/html/bredh/html/v2/index.html">homepage 02<span class="nav-new-tag">new</span></a></li>
                      
                    </ul>
                </li> --}}

{{-- <li class="nav-item megamenu dropdown">
    <a class="nav-link" href="javascript:void(0)" role="button" id="services-megamenu" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Hizmetler <span
            class="megamenu-toggle"></span></a>
    <div class="dropdown-menu coodiv-dropdown-megamnu default-megamenu"
        aria-labelledby="services-megamenu">
        <div class="d-flex justify-content-center bd-highlight mb-3 megamenu-items-header">
            <div class="p-2 bd-highlight">
                <a href="hosting.html">
                    <i class="bredhicon-sun"></i>
                    <h5>İşletme Siteleri</h5>
                    <p>İşletmenize uygun özen ile tasarlanmış web çözümleri sunuyoruz.</p>
                </a>
            </div>
            <div class="p-2 bd-highlight">
                <a href="ssl.html">
                    <i class="bredhicon-award-empty"></i>
                    <h5>E-Ticaret Çözümleri</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
                        veritatis nulla eum laudantium.</p>
                </a>
            </div>
            <div class="p-2 bd-highlight">
                <a href="games.html">
                    <i class="bredhicon-steering-wheel"></i>
                    <h5>gaming servers</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
                        veritatis nulla eum laudantium.</p>
                </a>
            </div>
            <div class="p-2 bd-highlight">
                <a href="voice.html">
                    <i class="bredhicon-headphones"></i>
                    <h5>voice servers</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem,
                        veritatis nulla eum laudantium.</p>
                </a>
            </div>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="status.html">Status</a>
</li>
<li class="nav-item dropdown">
    <a class="nav-link" role="button" id="webhosting-megamenu" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" href="#">Hosting <span
            class="nav-new-tag">New</span></a>
    <div class="dropdown-menu coodiv-dropdown-header web-menu"
        aria-labelledby="webhosting-megamenu">
        <ul class="web-hosting-menu-header">
            <li><i class="fas fa-server"></i> <a href="hosting.html">shared hosting <span>Lorem
                        ipsum dolor sit amet, consectetur adipisicing</span></a></li>
            <li><i class="fab fa-squarespace"></i> <a href="dedicated.html">dedicated hosting
                    <span>Lorem ipsum dolor sit amet, consectetur adipisicing</span></a></li>
            <li><i class="fas fa-gamepad"></i> <a href="games.html">games servers <span>Lorem
                        ipsum dolor sit amet, consectetur adipisicing</span></a></li>
            <li><i class="fas fa-cloud"></i> <a href="servers.html">cloud servers <span>Lorem
                        ipsum dolor sit amet, consectetur adipisicing</span></a></li>
            <li><i class="fab fa-cpanel"></i> <a href="cpanel.html">cPanel Resellers <span>Lorem
                        ipsum dolor sit amet, consectetur adipisicing</span></a></li>
        </ul>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link" href="#" role="button" id="header-help-drop-down" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">Help<span
            class="sr-only">(current)</span></a>
    <ul class="dropdown-menu coodiv-dropdown-header" aria-labelledby="header-help-drop-down">
        <li><a class="dropdown-item" href="help-center.html">help center</a></li>
        <li><a class="dropdown-item" href="knowledgebase.html">knowledgebase</a></li>
        <li><a class="dropdown-item" href="Privacy.html">privacy</a></li>
    </ul>
</li>
<li class="nav-item dropdown">
    <a class="nav-link" href="#" role="button" id="header-pages-drop-down"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages<span
            class="sr-only">(current)</span></a>
    <ul class="dropdown-menu coodiv-dropdown-header" aria-labelledby="header-pages-drop-down">
        <li><a class="dropdown-item" href="404.html">404</a></li>
        <li><a class="dropdown-item" href="about.html">about us</a></li>
        <li><a class="dropdown-item" href="dedicated.html">dedicated hosting</a></li>
        <li><a class="dropdown-item" href="cloud-vps.html">cloud vps</a></li>
        <li><a class="dropdown-item" href="games.html">gaming servers</a></li>
        <li><a class="dropdown-item" href="ssl.html">SSL Certificate</a></li>
        <li><a class="dropdown-item" href="status.html">services status</a></li>
        <li><a class="dropdown-item" href="voice.html">TeamSpeak Servers</a></li>
        <li><a class="dropdown-item" href="servers.html">cloud servers</a></li>
        <li><a class="dropdown-item" href="contact.html">contact us</a></li>
        <li><a class="dropdown-item" href="domains.html">domains</a></li>
        <li><a class="dropdown-item" href="help-center.html">help center</a></li>
        <li><a class="dropdown-item" href="knowledgebase.html">knowledgebase</a></li>
        <li><a class="dropdown-item" href="privacy-2.html">Privacy</a></li>
        <li><a class="dropdown-item" href="hosting.html">web hosting</a></li>
        <li><a class="dropdown-item" href="wordpress.html">WordPress-hosting</a></li>
        <li><a class="dropdown-item" href="shoutcast.html">Shoutcast housting</a></li>
        <li><a class="dropdown-item" href="icecast.html">Icecast hosting</a></li>
        <li><a class="dropdown-item" href="signin.html">signin</a></li>
        <li><a class="dropdown-item" href="signup.html">signup</a></li>
    </ul>
</li>
<li class="nav-item">
    <a class="nav-link" href="contact.html">Contact us</a>
</li> --}}