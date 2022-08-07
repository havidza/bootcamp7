<nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <img src="{{ asset('images/logo.png') }}" alt="" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#benefits">Benefits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#pricing">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimonials">Testimoni</a>
                </li>
                <li class="nav-item">
                    <div class="language">
                        <!-- <button onclick="changeLanguage('eng')" class="btn btn-skin btn-block btn-sm">
                          English</button> -->
            
                        <p class="text-end">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <!-- GTranslate: https://gtranslate.io/ -->
                            <a href="#" onclick="doGTranslate('id|en');return false;" title="English" class="gflag nturl" style="background-position:-0px -0px;"><img src="//gtranslate.net/flags/blank.png" height="24" width="24" alt="English" /></a>
                            <a href="#" onclick="doGTranslate('en|id');return false;" title="Indonesia" class="gflag nturl" style="background-position:-300px -300px;"><img src="//gtranslate.net/flags/16.png" height="24" width="24" alt="Indonesia"></a>
                        </p>
            
                        <style type="text/css">
                            a.gflag {
                                vertical-align: text-top;
                                font-size: 24px;
                                padding: 0px 2px 2px 2px;
                                background-repeat: no-repeat;
                                background-image: url(//gtranslate.net/flags/24.png);
                            }
            
                            a.gflag img {
                                border: 0;
                                width: 24px;
                            }
            
                            a.gflag:hover {
                                background-image: url(//gtranslate.net/flags/24a.png);
                            }
            
                            #goog-gt-tt {
                                display: none !important;
                            }
            
                            .goog-te-banner-frame {
                                display: none !important;
                            }
            
                            .goog-te-menu-value:hover {
                                text-decoration: none !important;
                            }
            
                            body {
                                top: 0 !important;
                            }
            
                            #google_translate_element2 {
                                display: none !important;
                            }
                        </style>
            
                        <div id="google_translate_element2"></div>
                        <script type="text/javascript">
                            function googleTranslateElementInit2() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'id',
                                    autoDisplay: false
                                }, 'google_translate_element2');
                            }
                        </script>
                        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
            
            
                        <script type="text/javascript">
                            /* <![CDATA[ */
                            eval(function(p, a, c, k, e, r) {
                                e = function(c) {
                                    return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36))
                                };
                                if (!''.replace(/^/, String)) {
                                    while (c--) r[e(c)] = k[c] || e(c);
                                    k = [function(e) {
                                        return r[e]
                                    }];
                                    e = function() {
                                        return '\\w+'
                                    };
                                    c = 1
                                };
                                while (c--)
                                    if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
                                return p
                            }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}', 43, 43, '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'), 0, {}))
                            /* ]]> */
                        </script>
            
            
                    </div>
                </li>
            </ul>

            @auth
            <div class="d-flex user-logged nav-item-dropdown no-arrow">
                <a href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Halo, {{ Auth::user()->name }}!
                    @if (Auth::user()->avatar)
                    <img src={{ Auth::user()->avatar }} class="user-photo rounded-circle" alt="">    
                    @else
                    <img src="https://ui-avatars.com/api/?name=Admin" class="user-photo rounded-circle" alt="">    
                    @endif
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="right: 0; left: auto;">
                        <li>
                            <a href="{{ route('dashboard') }}" class="dropdown-item">My Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">Sign Out</a>
                            <form action="{{ route('logout') }}" id="logout-form" method="post" style="display: none">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </form>
                        </li>
                    </ul>
                </a>
            </div>          
            @else
            <div class="d-flex">
                <a href="{{ route('login') }}" class="btn btn-master btn-secondary me-3">
                    Sign In
                </a>
                <a href="{{ route('login') }}" class="btn btn-master btn-primary">
                    Sign Up
                </a>
            </div>
            @endauth
        </div>
    </div>
    <script>
       $(document).ready(function(){ 

        $('.nav-link').on("click", function(){

        $('.nav-link').removeClass('active');

        $(this).addClass('active');
        });
        });
    </script>
</nav>
<br>