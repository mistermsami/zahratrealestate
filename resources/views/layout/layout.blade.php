@php
    $translator = new \App\Services\TranslationService();
    if (session()->get('locale') == 'ar') {
        $txtTitle = 'زهرة الشمال للعقارات';
        $txtHome = 'بيت';
        $txtPrRent = 'إيجار';
        $txtPrBuy = 'يشتري';
        $txtPropertylistings = 'قائمة العقارات';
        $txtAgenst = 'الوكلاء';
        $txtBlogs = 'مدونات';
        $txtServices = 'خدمات';
        $txtAbout = 'عن';
        $txtContact = 'اتصال';
        $txtAddproperty = 'أضف خاصية';
        $txtSignin = 'تسجيل الدخول';
        $txtPrExclusive = 'خصائص حصرية';
        $txtAddress =  "العنوان: مكتب 01، الطابق الرابع، مبنى مجموعة القمرا القابضة (53)، شارع الضفاف (893)، السعد، ص.ب. 31551";
        $txtPhone = '+97470816051';
        $txtTimings = 'الأحد - الخميس / 9:00 صباحًا - 6:00 مساءً';
        $txtTimings2 = 'الجمعة / مغلق';
        $txtTimings3 = 'السبت / 9:00 صباحًا - 3:00 مساءً';

        $dir="rtl";
    } else {
        $txtTitle = 'Zahrat Alshamal Real Estate';
        $txtHome = 'Home';
        $txtPrRent = 'Rent';
        $txtPrBuy = 'Buy';
        $txtPropertylistings = 'Property Listing';
        $txtAgenst = 'Agents';
        $txtBlogs = 'Blogs';
        $txtServices = 'Services';
        $txtAbout = 'About';
        $txtContact = 'Contact';
        $txtAddproperty = 'Add Property';
        $txtSignin = 'Sign In';
        $txtPrExclusive = 'Exclusive Properties';
        $txtAddress =
            'Address: Office 01, 4th Floor, Al Qamra Holding Group Building(53), Al Difaaf Street (893), Alsaad P.O. Box 31551';
        $txtPhone = '+97470816051';
        $txtTimings = 'Sunday - Thrusday / 9:00AM - 6:00PM';
        $txtTimings2 = 'Friday / CLOSED';
        $txtTimings3 = 'Saturday / 9:00AM - 3:00PM';

        $dir="";
    }
@endphp
<!DOCTYPE html>

<html lang="{{ App::getLocale() }} " dir="{{$dir}}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Zahrat Alshamal Real Estate">
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <!-- <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com"> -->


    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <title>@yield('pagename') - {{ $txtTitle }}</title>

    @yield('headtag')


    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <meta name="theme-color" content="#3454d1">
    <link href="{{ asset('css/styles.css?fd365619e86ad9137a29') }}" rel="stylesheet">


    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5KVPK354');
    </script>


    <!-- End Google Tag Manager -->
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KVPK354"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
        <!-- End Google Tag Manager (noscript) -->


    <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('/', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}" style="padding: 0;">
                <img src="{{ asset('images/zrs_logo_simple-0.png') }}" alt="" style="width: 80px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav99">
                <ul class="navbar-nav mx-auto">
                    {{-- <li class="nav-item"><a class="nav-link active" href="{{route('/')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('propertylistings')}}">Property Listing</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('agent')}}">Agents</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('about-us')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li> --}}

                    {{-- <li class="nav-item"><a class="nav-link active"
                            href="{{ route('/', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtHome }}</a>
                    </li> --}}
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('buyproperty', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtPrBuy }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('rentproperty', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtPrRent }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('exclusiveproperty', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtPrExclusive }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('propertylistings', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtPropertylistings }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('agent', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtAgenst }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('services', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtServices }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('about-us', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtAbout }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('contact', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtContact }}</a>
                    </li>



                    {{-- <li class="nav-item"><a class="nav-link"
                            href="{{ url('/' . App::getLocale()) }}">{{ __('messages.home') }}</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ url('/' . App::getLocale() . '/propertylistings') }}">{{ __('messages.property_listings') }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ url('/' . App::getLocale() . '/agents') }}">{{ __('messages.agents') }}</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ url('/' . App::getLocale() . '/blog') }}">{{ __('messages.blogs') }}</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ url('/' . App::getLocale() . '/about-us') }}">{{ __('messages.about') }}</a></li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ url('/' . App::getLocale() . '/contact') }}">{{ __('messages.contact') }}</a>
                    </li> --}}

                </ul>
                @php
                    if (session()->get('locale') == 'ar') {
                        $ml = 'margin-left: 15px;';
                    }
                    else {
                        $ml = '';
                        }
                @endphp
                <ul class="navbar-nav ">

                    <li>
                        <a href="{{ route('add-property', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}" class="btn text-capitalize"
                            style="background-color: #11572E; color: #fff; {{$ml}}">
                            <i class="fa fa-plus-circle mr-1"></i> {{ $txtAddproperty }}
                        </a>
                    </li>
                    <li class="navbar-nav">
                        <a href="#" class="lang-btn"
                            style=" text-decoration: none; color: #11572E;">
                            {{ $txtSignin }}
                        </a>
                    </li>
                    <li class="navbar-nav">
                        <button class="lang-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" fill="none" stroke="#11572E"
                                    stroke-width="2" />
                                <line x1="12" y1="2" x2="12" y2="22" stroke="#11572E"
                                    stroke-width="2" />
                                <line x1="2" y1="12" x2="22" y2="12" stroke="#11572E"
                                    stroke-width="2" />
                            </svg>
                            {{-- <a href="{{ route('lang.switch', ['locale' => 'en']) }}" style="text-decoration: none; color: #11572E;">
                                <span >EN</span>|
                                </a>
                            <a href="{{ route('lang.switch', ['locale' => 'ar']) }}" style="text-decoration: none; color: #11572E;">
                                <span >AR</span>
                                </a> --}}
                                @php
                                $currentLocale = session('locale', 'en');
                            @endphp
                            @if (session()->get('locale') == 'ar')
                            <a href="{{ route('lang.switch', ['locale' => 'en']) }}" style="text-decoration: none; color: #11572E;">
                                EN
                            </a>
                            @else
                            <a href="{{ route('lang.switch', ['locale' => 'ar']) }}" style="text-decoration: none; color: #11572E;">
                                AR
                            </a>
                            @endif


                            {{-- <span id="langText" onclick="window.location.href='{{ route('lang.switch', ['locale' => 'ar']) }}">AR</span> --}}
                        </button>
                    </li>
                    {{-- <button id="langToggle" class="lang-btn">
                        <a href="{{ url(App::getLocale() === 'en' ? '/ar' : '/en') }}">
                            <span id="langText">{{ App::getLocale() === 'en' ? 'AR' : 'EN' }}</span>
                        </a>
                    </button> --}}
                    {{-- @php
                        $currentLocale = App::getLocale();
                        $newLocale = $currentLocale === 'en' ? 'ar' : 'en';
                    @endphp

                    <button id="langToggle" class="lang-btn">
                        <a href="{{ route('switch.language', $newLocale) }}">
                            <span id="langText">{{ $currentLocale === 'en' ? 'AR' : 'EN' }}</span>
                        </a>
                    </button> --}}
                    {{-- <div class="language-switcher">
                        <a href="{{ route('lang.switch', ['locale' => 'en']) }}">EN</a> |
                        <a href="{{ route('lang.switch', ['locale' => 'ar']) }}">Arabic</a>
                    </div> --}}


                </ul>
            </div>
        </div>
    </nav>


    @yield('maincontent')



    <!-- Footer  -->
    <footer>
        <div class="wrapper__footer bg-theme-footer" style="background-color: #11572E;">
            <div class="container">
                <div class="row">
                    <!-- ADDRESS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <figure>
                                <img src="{{ asset('images/1ftlogo.png') }}" alt="" class="logo-footer">
                            </figure>
                            <!-- <p>
                                Zahrat Alshamal Real Estate is a trusted name in the property market, offering expert services for buying, selling, and investing in real estate. Our team is dedicated to providing reliable solutions with a focus on customer satisfaction and integrity.

                            </p> -->

                            <ul class="list-unstyled mb-0 mt-1">
                                <li> <b> <i class="fa fa-map-marker"></i></b><span>{{ $txtAddress }}</span> </li>
                                <li> <b><i class="fa fa-phone-square"></i></b><span>{{ $txtPhone }}</span> </li>
                                <li> <b><i class="fa fa-headphones"></i></b><span>admin@zahratalshamal.com</span> </li>
                                <li> <b><i class="fa fa-clock-o"></i></b><span>{{ $txtTimings }} <br> {{ $txtTimings2 }} <br> {{ $txtTimings3 }}</span> </li>
                            </ul>
                        </div>

                    </div>
                    <!-- END ADDRESS -->

                    <!-- QUICK LINKS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <h4 class="footer-title">Quick Links</h4>
                            <div class="link__category-two-column">
                                <ul class="list-unstyled">
                                    <li class="list-inline-item">
                                        <a href="{{ route('blog', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">Blog</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Career</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">House</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Residential</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Residential Tower</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">The Pearl, Doha</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">West Bay</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Lusail City</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Al Wakrah</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Modern Home</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Luxury Villas</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Beachfront Properties</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Property Listing</a>
                                    </li>
                                </ul>


                            </div>
                        </div>
                    </div>
                    <!-- END QUICK LINKS -->


                    <!-- NEWSLETTERS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <h4 class="footer-title">follow us </h4>
                            <p class="mb-2">
                                Follow us and stay in touch to get the latest news
                            </p>
                            <p>
                                <button class="btn btn-social btn-social-o facebook mr-1" onclick="window.open('https://www.facebook.com/share/19ZTqSR91P/?mibextid=wwXIfr', '_blank')">
                                    <i class="fa fa-facebook-f"></i>
                                </button>
                                <button class="btn btn-social btn-social-o tiktok mr-1" onclick="window.open('https://www.tiktok.com/@zahrat_al_shamal', '_blank')">
                                    <i class="fa fa-tumblr"></i>
                                </button>

                                <button class="btn btn-social btn-social-o linkedin mr-1" onclick="window.open('https://www.linkedin.com/company/zahratalshamal/', '_blank')">
                                    <i class="fa fa-linkedin"></i>
                                </button>
                                <button class="btn btn-social btn-social-o instagram mr-1" onclick="window.open('https://www.instagram.com/zahrat_al_shamal_real_estate/', '_blank')">
                                    <i class="fa fa-instagram"></i>
                                </button>
                                <button class="btn btn-social btn-social-o whatsapp mr-1" onclick="window.open('https://wa.me/+97470816051', '_blank')">
                                    <i class="fa fa-whatsapp"></i>
                                </button>
                            </p>
                            <br>
                            <h4 class="footer-title">newsletter</h4>
                            <!-- Form Newsletter -->
                            <div class="widget__form-newsletter ">
                                <p>

                                    Don’t miss to subscribe to our news feeds, kindly fill the form below
                                </p>
                                <div class="mt-3">
                                    <input type="text" class="form-control mb-2" placeholder="Your email address">

                                    <button class="btn btn-block text-capitalize" type="button"
                                        style="background-color: goldenrod;">subscribe


                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END NEWSLETTER -->
                </div>
            </div>
        </div>

        <!-- End Footer  -->
    </footer>

    <!-- SCROLL TO TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
    <!-- Default Scripts -->
    {{-- @push('scripts')
    <script src="{{ asset('js/index.bundle.js?fd365619e86ad9137a29') }}"></script>
    <script src="{{ asset('js/faq.js') }}"></script>
@endpush --}}
    @if (!in_array(Route::currentRouteName(), ['propertylistings']))
        <script src="{{ asset('js/index.bundle.js?fd365619e86ad9137a29') }}"></script>
        <script src="{{ asset('js/faq.js') }}"></script>
    @endif
</body>

</html>
