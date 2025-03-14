@php
    $translator = new \App\Services\TranslationService();
    if (session()->get('locale') == 'ar') {
        $txtTitle = $translator->translate('Zahrat Alshamal Real Estate', 'ar');
        $txtHome = $translator->translate('Home', 'ar');
        $txtPropertylistings = $translator->translate('Property Listing', 'ar');
        $txtAgenst = $translator->translate('Agents', 'ar');
        $txtBlogs = $translator->translate('Blogs', 'ar');
        $txtAbout = $translator->translate('About', 'ar');
        $txtContact = $translator->translate('Contact', 'ar');
        $txtAddproperty = $translator->translate('Add Property', 'ar');
        $txtSignin = $translator->translate('Sign In', 'ar');
        $txtAddress = $translator->translate(
            'Address: Office 01, 4th Floor, Al Qamra Holding Group Building(53), Al Difaaf Street (893), Alsaad P.O. Box 31551',
            'ar',
        );
        $txtPhone = $translator->translate('+97470816051', 'ar');
        $txtTimings = $translator->translate('Mon - Sun / 9:00AM - 8:00PM', 'ar');
    } else {
        $txtTitle = 'Zahrat Alshamal Real Estate';
        $txtHome = 'Home';
        $txtPropertylistings = 'Property Listing';
        $txtAgenst = 'Agents';
        $txtBlogs = 'Blogs';
        $txtAbout = 'About';
        $txtContact = 'Contact';
        $txtAddproperty = 'Add Property';
        $txtSignin = 'Sign In';
        $txtAddress =
            'Address: Office 01, 4th Floor, Al Qamra Holding Group Building(53), Al Difaaf Street (893), Alsaad P.O. Box 31551';
        $txtPhone = '+97470816051';
        $txtTimings = 'Mon - Sun / 9:00AM - 8:00PM';
    }
@endphp
<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Zahrat Alshamal Real Estate">
    <!-- <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com"> -->


    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <title>@yield('pagename') - {{ $txtTitle }}</title>

    @yield('headtag')


    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="theme-color" content="#3454d1">
    <link href="{{ asset('css/styles.css?fd365619e86ad9137a29') }}" rel="stylesheet">

</head>

<body>



    <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
        <div class="container">
            <a class="navbar-brand" href="#" style="padding: 0;">
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

                    <li class="nav-item"><a class="nav-link active"
                            href="{{ route('/', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtHome }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('propertylistings', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtPropertylistings }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('agent', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtAgenst }}</a>
                    </li>
                    <li class="nav-item"><a class="nav-link"
                            href="{{ route('blog', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}">{{ $txtBlogs }}</a>
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
                <ul class="navbar-nav ">
                    <li>
                        <a href="{{ route('add-property') }}" class="btn text-capitalize"
                            style="background-color: #11572E; color: #fff;">
                            <i class="fa fa-plus-circle mr-1"></i> {{ $txtAddproperty }}
                        </a>
                    </li>
                    <li class="navbar-nav">
                        <a href="{{ route('login') }}" class="lang-btn"
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

                            <a href="{{ route('lang.switch', ['locale' => 'en']) }}" style="text-decoration: none; color: #11572E;">
                                EN
                            </a> |
                            <a href="{{ route('lang.switch', ['locale' => 'ar']) }}" style="text-decoration: none; color: #11572E;">
                                AR
                            </a>


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
                                <li> <b><i class="fa fa-clock-o"></i></b><span>{{ $txtTimings }}</span> </li>
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
                                        <a href="#">Commercial</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Business</a>
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
                                <button class="btn btn-social btn-social-o facebook mr-1">
                                    <i class="fa fa-facebook-f"></i>
                                </button>
                                <button class="btn btn-social btn-social-o twitter mr-1">
                                    <i class="fa fa-twitter"></i>
                                </button>

                                <button class="btn btn-social btn-social-o linkedin mr-1">
                                    <i class="fa fa-linkedin"></i>
                                </button>
                                <button class="btn btn-social btn-social-o instagram mr-1">
                                    <i class="fa fa-instagram"></i>
                                </button>

                                <button class="btn btn-social btn-social-o youtube mr-1">
                                    <i class="fa fa-youtube"></i>
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
