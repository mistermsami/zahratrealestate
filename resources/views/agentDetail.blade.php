@extends('layout.layout')
@php
    $pagenamee = 'Agent Details';
    $translator = new \App\Services\TranslationService();
    if (session()->get('locale') == 'ar') {
        $pagename = $translator->translate($pagenamee, 'ar');
        $firstName = $translator->translate($agent->first_name, 'ar');
        $lastName = $translator->translate($agent->last_name, 'ar');
        $Email = $translator->translate($agent->email, 'ar');
        $PhoneContact = $translator->translate($agent->phone_contact, 'ar');
        $OfficeContact = $translator->translate($agent->office_contact, 'ar');
        $Description = $translator->translate($agent->description, 'ar');
        $txtlisting = $translator->translate('listing', 'ar');
        $txtPropertyagent = $translator->translate('property agent', 'ar');
        $txtOffice = $translator->translate('office', 'ar');
        $txtMobile = $translator->translate('mobile', 'ar');
        $txtEmail = $translator->translate('email', 'ar');
        $txtAgentdetails = $translator->translate('Agent details', 'ar');
        $txtDescription = $translator->translate('Description', 'ar');
        $txtGreeting = $translator->translate('Hi, nice to meet you', 'ar');
        $txtReadmore = $translator->translate('read more', 'ar');
        $txtCategoriesProperty = $translator->translate('Categories Property', 'ar');
    } else {
        $pagename = $pagenamee;
        $firstName = $agent->first_name;
        $lastName = $agent->last_name;
        $Email = $agent->email;
        $PhoneContact = $agent->phone_contact;
        $OfficeContact = $agent->office_contact;
        $Description = $agent->description;
        $txtlisting = 'listing';
        $txtPropertyagent = 'property agent';
        $txtOffice = 'office';
        $txtMobile = 'mobile';
        $txtEmail = 'email';
        $txtAgentdetails = 'Agent details';
        $txtDescription = 'Description';
        $txtGreeting = 'Hi, nice to meet you';
        $txtReadmore = 'read more';
        $txtCategoriesProperty = 'Categories Property';
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

    <!-- LISTING LIST -->
    <section class="profile__agents">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row no-gutters">
                        <div class="col-lg-12 cards mt-0">
                            <div class="row">
                                <div class="col-md-6 col-lg-6">
                                    <a href="#" class="profile__agents-avatar">
                                        <img src="https://admin.zahratalshamal.com/agent/{{$agent->agentprofile}}" alt="" class="img-fluid ">
                                        <div class="total__property-agent">{{ $agent->listings->count() }}
                                            {{ $txtlisting }}</div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-6 my-auto">
                                    <div class="profile__agents-info">
                                        <h5 class="text-capitalize">
                                            <a href="#"
                                                target="_blank">{{ $firstName }}&nbsp;{{ $lastName }}</a>
                                        </h5>
                                        <p class="text-capitalize mb-1">{{ $txtPropertyagent }}</p>

                                        <ul class="list-unstyled mt-2">
                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-building"></i> {{ $txtOffice }} :</span>
                                                    {{ $OfficeContact }}</a>
                                            </li>
                                            <li><a href="#" class="text-capitalize"><span><i class="fa fa-phone"></i>
                                                        {{ $txtMobile }} :</span> {{ $PhoneContact }}</a></li>
                                            {{-- <li><a href="#" class="text-capitalize"><span><i class="fa fa-fax"></i>
                                                        fax : </span> 342 655</a></li> --}}
                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-envelope"></i> {{ $txtEmail }} :</span>
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
                    </div>
                    <!-- LOCATION -->
                    <div class="single__detail-features tabs__custom">
                        <h5 class="text-capitalize detail-heading">{{ $txtAgentdetails }}</h5>
                        <!-- FILTER VERTICAL -->
                        <ul class="nav nav-pills myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active pills-tab-one" data-toggle="pill" href="#pills-tab-one"
                                    role="tab" aria-controls="pills-tab-one" aria-selected="true">
                                    {{ $txtDescription }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pills-tab-two" data-toggle="pill" href="#pills-tab-two" role="tab"
                                    aria-controls="pills-tab-two" aria-selected="false">
                                    {{ $txtlisting }}</a>
                            </li>

                            {{-- <li class="nav-item">
                                <a class="nav-link pills-tab-four" data-toggle="pill" href="#pills-tab-four" role="tab"
                                    aria-controls="pills-tab-four" aria-selected="false">
                                    Reviews</a>
                            </li> --}}


                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="pills-tab-one" role="tabpanel"
                                aria-labelledby="pills-tab-one">
                                <div class="single__detail-desc">
                                    <h5 class="text-capitalize detail-heading">{{ $txtGreeting }}</h5>
                                    {{-- <p>{{ $agent->description}}</p> --}}
                                    @if (strlen($agent->description) > 100)
                                        <div class="show__more">
                                            <p>{{ $txtDescription }}</p>
                                            <p>{{ $Description }}</p>
                                            <a href="javascript:void(0)" class="show__more-button "
                                                style="background-color: #11572E; color: #fff;">{{ $txtReadmore }}</a>
                                        </div>
                                    @else
                                        <p>{{ $Description }}</p>
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-pane fade" id="pills-tab-two" role="tabpanel" aria-labelledby="pills-tab-two">
                                <div class="row">
                                    @foreach ($agent->listings as $listing)
                                        @php
                                            $translator = new \App\Services\TranslationService();
                                            // Translate only if the locale is Arabic
                                            if (session()->get('locale') == 'ar') {
                                                $tittle = $translator->translate($listing->tittle, 'ar');
                                                $status = $translator->translate($listing->status,  'ar');
                                                $listing_for = $translator->translate($listing->listing_for, 'ar');
                                                $propertyType = $translator->translate($listing->propertyType->pt_name, 'ar');
                                                $area_name = $translator->translate($listing->area->name, 'ar');
                                                $city_name = $translator->translate($listing->city->city_name, 'ar');
                                                $no_rooms = $translator->translate($listing->propertyDetails->rooms, 'ar' );
                                                $no_baths = $translator->translate($listing->propertyDetails->baths,'ar');
                                                $size = $translator->translate($listing->propertyDetails->size, 'ar');
                                                $price = $translator->translate($listing->price, 'ar');
                                                $slug = $listing->slug->slug;
                                                $txtfeatured = $translator->translate('featured', 'ar');
                                                $txtQatar = $translator->translate('Qatar', 'ar');
                                                $txtbaths = $translator->translate('baths', 'ar');
                                                $txtrooms = $translator->translate('rooms', 'ar');
                                                $txtbeds = $translator->translate('beds', 'ar');
                                                $txtsize = $translator->translate('size', 'ar');
                                                $txtarea = $translator->translate('area', 'ar');
                                                $txtQAR = $translator->translate('QAR', 'ar');
                                                $txtWhatsApp = $translator->translate('WhatsApp', 'ar');
                                                $txtCall = $translator->translate('Call', 'ar');
                                            } else {
                                                $tittle = $listing->tittle;
                                                $status = $listing->status;
                                                $listing_for = $listing->listing_for;
                                                $propertyType = $listing->propertyType->pt_name;
                                                $area_name = $listing->area->name;
                                                $city_name = $listing->city->city_name;
                                                $no_rooms = $listing->propertyDetails->rooms;
                                                $no_baths = $listing->propertyDetails->baths;
                                                $size = $listing->propertyDetails->size;
                                                $price = $listing->price;
                                                $slug = $listing->slug->slug;
                                                $txtfeatured = 'featured';
                                                $txtQatar = 'Qatar';
                                                $txtbaths = 'baths';
                                                $txtrooms = 'rooms';
                                                $txtbeds = 'beds';
                                                $txtsize = 'size';
                                                $txtarea = 'area';
                                                $txtQAR = 'QAR';
                                                $txtWhatsApp = 'WhatsApp';
                                                $txtCall = 'Call';

                                            }
                                        @endphp
                                        <div class="col-lg-12">
                                            <div class="card__image card__box-v1">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4 col-lg-3 col-xl-4">
                                                        <div class="card__image__header h-250">
                                                            <a
                                                                href="/{{ session('locale', 'en') }}/propertyDetail/{{ $listing->slug->slug }}">
                                                                <div class="ribbon text-capitalize"
                                                                    style="background-color:#11572E; color: #fff;">
                                                                    {{ $status }}
                                                                </div>
                                                                <img src="https://admin.zahratalshamal.com/{{$listing->images->first()->image_path}}" alt=""
                                                                    class="img-fluid w100 img-transition">
                                                                {{-- <img src="images/apart4.jpg" alt=""
                                                                    class="img-fluid w100 img-transition"> --}}
                                                                <div class="info"> {{ $listing_for }}</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                        <div class="card__image__body">

                                                            <span class="badge badge-primary text-capitalize mb-2"
                                                                style="background-color:#11572E; color: #fff;">{{ $propertyType }}</span>
                                                            <h6>
                                                                <a
                                                                    href="/{{ session('locale', 'en') }}/propertyDetail/{{ $listing->slug->slug }}">{{ $tittle }}</a>
                                                            </h6>
                                                            <div class="card__image__body-desc">
                                                                <p class="text-capitalize">
                                                                    <i class="fa fa-map-Haiderer"></i>
                                                                    {{ $area_name }},
                                                                    {{ $city_name }}, {{ $txtQatar}}
                                                                </p>
                                                            </div>

                                                            <ul class="list-inline card__content">
                                                                <li class="list-inline-item">

                                                                    <span>
                                                                        {{ $txtbaths}} <br>
                                                                        <i class="fa fa-bath"></i>
                                                                        {{ $no_baths }}
                                                                    </span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span>
                                                                        {{ $txtbeds}} <br>
                                                                        <i class="fa fa-bed"></i>
                                                                        {{ $txtbeds }}
                                                                    </span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span>
                                                                        {{ $no_rooms}} <br>
                                                                        <i class="fa fa-inbox"></i>
                                                                        {{ $no_rooms }}
                                                                    </span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <span>
                                                                        {{ $txtarea}} <br>
                                                                        <i class="fa fa-map"></i>
                                                                        {{ $size }} sq ft
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                        <div class="">
                                                            <figure>
                                                                <img src="https://admin.zahratalshamal.com/agent/{{$listing->agent->agentprofile}}" style="height: 70px; width: 70px; object-fit: cover;" alt=""
                                                                    class="img-fluid rounded-circle">
                                                            </figure>
                                                            <ul class="list-inline my-auto">
                                                                <li class="list-inline-item name">
                                                                    <a href="#">
                                                                        {{ $firstName }}
                                                                    </a>

                                                                </li>


                                                            </ul>
                                                            <ul class="list-inline my-auto ml-auto price">
                                                                <li class="list-inline-item ">

                                                                    <h6 class="mb-0">
                                                                        <span
                                                                            style="color: #11572E; font-size: small;">{{ $txtQAR}}</span>
                                                                        {{ $price }}
                                                                    </h6>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card__image card__box-v1">
                                            <div class="row no-gutters">
                                                <div class="col-md-4 col-lg-3 col-xl-4">
                                                    <div class="card__image__header h-250">
                                                        <a href="#">
                                                            <div class="ribbon text-capitalize"
                                                                style="background-color:#11572E; color: #fff;">sold out
                                                            </div>
                                                            <img src="images/apart2.jpg" alt=""
                                                                class="img-fluid w100 img-transition">
                                                            <div class="info"> for sale</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                    <div class="card__image__body">

                                                        <span class="badge badge-primary text-capitalize mb-2"
                                                            style="background-color:#11572E; color: #fff;">house</span>
                                                        <h6>
                                                            <a href="#">Ample Apartment At Last Floor</a>
                                                        </h6>
                                                        <div class="card__image__body-desc">
                                                            <!-- <p class="text-capitalize">
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!

                                                    </p> -->
                                                            <p class="text-capitalize">
                                                                <i class="fa fa-map-Haiderer"></i>
                                                                West Bay, Doha, Qatar
                                                            </p>
                                                        </div>

                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> 2
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> 3
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> 4300 sq ft
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                    <div class="card__image__footer">
                                                        <figure>
                                                            <img src="images/yman.jpg" alt=""
                                                                class="img-fluid rounded-circle">
                                                        </figure>
                                                        <ul class="list-inline my-auto">
                                                            <li class="list-inline-item name">
                                                                <a href="#">
                                                                    Madar
                                                                </a>

                                                            </li>


                                                        </ul>
                                                        <ul class="list-inline  my-auto ml-auto price">
                                                            <li class="list-inline-item ">

                                                                <h6 class="mb-0">
                                                                    <span
                                                                        style="color: #11572E; font-size: small;">QAR</span>
                                                                    350,000
                                                                </h6>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix"></div>

                            </div>

                            {{-- <div class="tab-pane fade" id="pills-tab-four" role="tabpanel"
                                aria-labelledby="pills-tab-four">

                                <!-- RATE US  WRITE -->
                                <div class="single__detail-features-review ">
                                    <div class="media mt-4">
                                        <img src="images/yman.jpg" alt="" class="img-fluid rounded-circle mr-3">
                                        <div class="media-body">
                                            <h6 class="mt-0">Madar</h6>
                                            <span class="mb-3">Mei 13, 2020</span>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">3/5</li>
                                            </ul>
                                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                Donec
                                                lacinia congue felis in faucibus.</p>

                                            <div class="media mt-4">
                                                <a class="pr-3" href="#">
                                                    <img src="images/yman.jpg" alt=""
                                                        class="img-fluid rounded-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h6 class="mt-0">Haider </h6>
                                                    <span class="mb-3">Mei 13, 2020</span>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item">
                                                            <i class="fa fa-star selected"></i>
                                                            <i class="fa fa-star selected"></i>
                                                            <i class="fa fa-star selected"></i>
                                                            <i class="fa fa-star selected"></i>
                                                            <i class="fa fa-star selected"></i>
                                                        </li>
                                                        <li class="list-inline-item">5/5</li>
                                                    </ul>
                                                    <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus
                                                        scelerisque ante sollicitudin. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media mt-4">
                                        <img src="images/eight.jpg" alt="" class="img-fluid rounded-circle mr-3">
                                        <div class="media-body">
                                            <h6 class="mt-0">Madar</h6>
                                            <span class="mb-3">Mei 13, 2020</span>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star selected"></i>
                                                </li>
                                                <li class="list-inline-item">5/5</li>
                                            </ul>
                                            <p> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus
                                                viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                                                Donec
                                                lacinia congue felis in faucibus.</p>


                                        </div>
                                    </div>
                                    <!-- COMMENT -->
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="mb-2">Your rating for this listing:</p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item">
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star selected"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </li>
                                                <li class="list-inline-item">3/5</li>
                                            </ul>
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <input type="text" class="form-control" required="required">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>What's your Email?</label>
                                                <input type="email" class="form-control" required="required">

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <input type="text" class="form-control" required="required">

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Your message</label>
                                                <textarea class="form-control" rows="4"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn  float-right "
                                        style="background-color: #11572E; color: #fff;"> Submit review <i
                                            class="fa fa-paper-plane ml-2"></i></button>
                                    <!-- END COMMENT -->
                                </div>

                                <!-- END RATE US  WRITE -->
                                <div class="clearfix"></div>
                            </div> --}}


                        </div>
                        <!-- END FILTER VERTICAL -->
                    </div>
                    <!-- END LOCATION -->
                </div>
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <!-- FORM FILTER -->
                        <div class="products__filter mb-30">
                            <div class="products__filter__group">
                                <div class="products__filter__header">
                                    <h5 class="text-center text-capitalize">Contact {{ $firstName }}</h5>
                                </div>
                                <div class="products__filter__body">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email (Optional)</label>
                                        <input type="email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label>Your message</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>

                                </div>
                                <div class="products__filter__footer">
                                    <div class="form-group mb-0">
                                        <button class="btn text-capitalize btn-block"
                                            style="background-color: #11572E; color: #fff;"> submit <i
                                                class="fa fa-paper-plane ml-1"></i></button>

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
                                    <h5 class="text-dark mb-0 text-center">{{ $txtCategoriesProperty }} </h5>
                                </div>
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#" class="text-capitalize">
                                            apartement
                                            <span class="badge " style="background-color: #11572E; color: #fff;">14</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">
                                            villa
                                            <span class="badge " style="background-color: #11572E; color: #fff;">4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">
                                            family house
                                            <span class="badge " style="background-color: #11572E; color: #fff;">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">
                                            modern villa
                                            <span class="badge " style="background-color: #11572E; color: #fff;">8</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">
                                            town house
                                            <span class="badge " style="background-color: #11572E; color: #fff;">10</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-capitalize">
                                            office
                                            <span class="badge "style="background-color: #11572E; color: #fff;">12</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END CATEGORY -->
                        </aside>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
