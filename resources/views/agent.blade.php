@extends('layout.layout')
@php
    $pagenamee = 'Agents';
    $translator = new \App\Services\TranslationService();
    if (session()->get('locale') == 'ar') {
        $pagename = $translator->translate($pagenamee, 'ar');
        $txtHeadingsection1 = $translator->translate('Meet the People Who Help You', 'ar');
        $txttaglinesection1 = $translator->translate('Get the assistance you need from our expert agents.', 'ar');
        $txtlisting = $translator->translate('listing', 'ar');
        $txtPropertyagent = $translator->translate('property agent', 'ar');
        $txtOffice = $translator->translate('office', 'ar');
        $txtMobile = $translator->translate('mobile', 'ar');
        $txtEmail = $translator->translate('email', 'ar');
    } else {
        $pagename = $pagenamee;
        $txtHeadingsection1 = 'Meet the People Who Help You';
        $txttaglinesection1 = 'Get the assistance you need from our expert agents.';
        $txtlisting = 'listing';
        $txtPropertyagent = 'property agent';
        $txtOffice = 'office';
        $txtMobile = 'mobile';
        $txtEmail = 'email';

    }
@endphp

@section('pagename')
    {{ $pagename }}
@endsection

@section('headtag')
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
@endsection

@section('maincontent')
    <div class="clearfix"></div>
    <h1 style="text-align: center; color:#11572E; font-size: calc(1.5rem + 1vw);">{{ $txtHeadingsection1 }}</h1>
    <p style="text-align: center;">{{ $txttaglinesection1 }}</p>
    <!-- LISTING LIST -->
    <section class="profile__agents">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- FORM FILTER -->
                    <div class="products__filter mb-30">
                        <div class="products__filter__group">
                            <div class="products__filter__header">

                                <h5 class="text-center text-capitalize">find agents</h5>
                            </div>
                            <div class="products__filter__body">
                                <div class="form-group">
                                    <label>Enter Agent name</label>
                                    <input type="text" class="form-control" placeholder="Enter agent name">

                                </div>
                            </div>
                            <div class="products__filter__footer">
                                <div class="form-group mb-0">
                                    <button class="btn text-capitalize btn-block"
                                        style="background-color: #11572E ;color: #fff;"> search agents <i
                                            class="fa fa-search ml-1"></i></button>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END FORM FILTER -->
                    <!-- ARCHIVE CATEGORY -->
                    <aside class=" wrapper__list__category">
                        <!-- CATEGORY -->
                        <div class="widget widget__archive">
                            <div class="widget__title">
                                <h5 class="text-dark mb-0 text-center">Categories Property</h5>
                            </div>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#" class="text-capitalize">
                                        apartement
                                        <span class="badge badge-primary"
                                            style="background-color: #11572E; color: #fff;">14</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-capitalize">
                                        villa
                                        <span class="badge badge-primary"
                                            style="background-color: #11572E; color: #fff;">4</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-capitalize">
                                        family house
                                        <span class="badge badge-primary"
                                            style="background-color: #11572E; color: #fff;">2</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-capitalize">
                                        modern villa
                                        <span class="badge badge-primary"
                                            style="background-color: #11572E; color: #fff;">8</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-capitalize">
                                        town house
                                        <span class="badge badge-primary"
                                            style="background-color: #11572E; color: #fff;">10</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="text-capitalize">
                                        office
                                        <span class="badge badge-primary"
                                            style="background-color: #11572E; color: #fff;">12</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END CATEGORY -->
                    </aside>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($agents as $agent)
                            @php
                                if (session()->get('locale') == 'ar') {
                                    $firstName = $translator->translate($agent->first_name, 'ar');
                                    $lastName = $translator->translate($agent->last_name, 'ar');
                                    $Email = $translator->translate($agent->email, 'ar');
                                    $PhoneContact = $translator->translate($agent->phone_contact, 'ar');
                                    $OfficeContact = $translator->translate($agent->office_contact, 'ar');
                                } else {
                                    $firstName = $agent->first_name;
                                    $lastName = $agent->last_name;
                                    $Email = $agent->email;
                                    $PhoneContact = $agent->phone_contact;
                                    $OfficeContact = $agent->office_contact;
                                }
                                if(session()->has('locale')){
                                    $locale = session()->get('locale');
                                }
                                else{
                                    $locale = 'en';
                                    }
                                // dd(session()->get('locale', 'en'))
                            @endphp
                            <div class="col-lg-6">
                                <div class="cards mt-0 mb-4">
                                    <div class="profile__agents-header">

                                            <a href="agentDetail/{{ $agent->id }}"
                                            class="profile__agents-avatar">
                                            <img src="https://admin.zahratalshamal.com/listings/{{$agent->agentprofile}}" alt="" class="img-fluid">
                                            <div class="total__property-agent">{{ $agent->listings->count() }}
                                                {{ $txtlisting }}</div>
                                        </a>
                                    </div>
                                    <div class="profile__agents-body">
                                        <div class="profile__agents-info">
                                            <h5 class="text-capitalize">
                                                {{-- <a href="{{route('agentDetail',['id'=> $agent->id])}}" --}}

                                                <a href="agentDetail/{{ $agent->id }}"
                                                    target="_blank">{{ $firstName }}&nbsp;{{ $lastName }}</a>
                                            </h5>
                                            <p class="text-capitalize mb-1">{{ $txtPropertyagent}}</p>

                                            <ul class="list-unstyled mt-2">
                                                <li><a href="#" class="text-capitalize"><span><i
                                                                class="fa fa-building"></i> {{$txtOffice}} :</span>
                                                        {{ $OfficeContact }}</a>
                                                </li>
                                                <li><a href="#" class="text-capitalize"><span><i
                                                                class="fa fa-phone"></i> {{$txtMobile}} :</span>
                                                        {{ $PhoneContact }}</a></li>

                                                <li><a href="#" class="text-capitalize"><span><i
                                                                class="fa fa-envelope"></i> {{$txtEmail}} :</span>
                                                        {{ $Email }}</a></li>
                                            </ul>
                                            <p class="mb-0 mt-3">
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

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-lg-6">
                            <div class="cards mt-0">
                                <div class="profile__agents-header">
                                    <a href="agentDetail" class="profile__agents-avatar">
                                        <img src="images/team4.jpg" alt="" class="img-fluid">
                                        <div class="total__property-agent">20 listing</div>
                                    </a>
                                </div>
                                <div class="profile__agents-body">
                                    <div class="profile__agents-info">
                                        <h5 class="text-capitalize">
                                            <a href="agentDetail" target="_blank">Hannah</a>
                                        </h5>
                                        <p class="text-capitalize mb-1">property agent</p>

                                        <ul class="list-unstyled mt-2">
                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-building"></i> office :</span> 123 456
                                                    789</a>
                                            </li>
                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-phone"></i> mobile :</span> 123 456
                                                    789</a></li>

                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-envelope"></i> email :</span>
                                                    agents@property.com</a></li>
                                        </ul>
                                        <p class="mb-0 mt-3">
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

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cards mt-0">
                                <div class="profile__agents-header">
                                    <a href="#" class="profile__agents-avatar">
                                        <img src="images/team2.jpg" alt="" class="img-fluid">
                                        <div class="total__property-agent">20 listing</div>
                                    </a>
                                </div>
                                <div class="profile__agents-body">
                                    <div class="profile__agents-info">
                                        <h5 class="text-capitalize mb-0">
                                            <a href="#" target="_blank">MEERAB</a>
                                        </h5>
                                        <p class="text-capitalize mb-1">property agent</p>

                                        <ul class="list-unstyled mt-2">
                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-building"></i>
                                                        office :</span> 123 456
                                                    789</a>
                                            </li>
                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-phone"></i>
                                                        mobile :</span> 123 456
                                                    789</a></li>

                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-envelope"></i>
                                                        email :</span>
                                                    agents@property.com</a></li>
                                        </ul>
                                        <p class="mb-0 mt-3">
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

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cards">
                                <div class="profile__agents-header">
                                    <a href="#" class="profile__agents-avatar">
                                        <img src="images/team1.jpg" alt="" class="img-fluid">
                                        <div class="total__property-agent">20 listing</div>
                                    </a>
                                </div>
                                <div class="profile__agents-body">
                                    <div class="profile__agents-info">
                                        <h5 class="text-capitalize mb-0">
                                            <a href="#" target="_blank">RIDWAN</a>
                                        </h5>
                                        <p class="text-capitalize mb-1">property agent</p>

                                        <ul class="list-unstyled mt-2">
                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-building"></i>
                                                        office :</span> 123 456
                                                    789</a>
                                            </li>
                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-phone"></i>
                                                        mobile :</span> 123 456
                                                    789</a></li>

                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-envelope"></i>
                                                        email :</span>
                                                    agents@property.com</a></li>
                                        </ul>
                                        <p class="mb-0 mt-3">
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

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cards">
                                <div class="profile__agents-header">
                                    <a href="#" class="profile__agents-avatar">
                                        <img src="images/team3.jpg" alt="" class="img-fluid">
                                        <div class="total__property-agent">20 listing</div>
                                    </a>
                                </div>
                                <div class="profile__agents-body">
                                    <div class="profile__agents-info">
                                        <h5 class="text-capitalize mb-0">
                                            <a href="#" target="_blank">Aaliyah</a>
                                        </h5>
                                        <p class="text-capitalize mb-1">property agent</p>

                                        <ul class="list-unstyled mt-2">
                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-building"></i>
                                                        office :</span> 123 456
                                                    789</a>
                                            </li>
                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-phone"></i>
                                                        mobile :</span> 123 456
                                                    789</a></li>

                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-envelope"></i>
                                                        email :</span>
                                                    agents@property.com</a></li>
                                        </ul>
                                        <p class="mb-0 mt-3">
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

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- END LISTING LIST -->

    <!-- CALL TO ACTION -->
    <section class="bg-theme-v1" style="background-color: rgb(214, 162, 29);">
        <div class="cta">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-12 text-center">
                        <h2 class="text-uppercase text-white">signup & build your dream house</h2>
                        <p class="text-capitalize text-white">We'll help you to grow your career and growth, please contact
                            team Zahrat Alshamal real estate and get this offer promo</p>
                        <a href="#" class="btn text-uppercase "
                            style="background-color: #11572E; color: #fff;">request a quote
                            <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION -->
@endsection
