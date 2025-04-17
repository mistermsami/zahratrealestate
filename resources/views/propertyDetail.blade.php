@extends('layout.layout')
@php
    $pagename = 'Property Details';


    $translator = new \App\Services\TranslationService();
    // Translate only if the locale is Arabic
    if (session()->get('locale') == 'ar') {
        $tittle = $translator->translate($listing->tittle, 'ar');
        $listing_for = $translator->translate($listing->listing_for, 'ar');
        if(!empty($listing->area->name)){
        $area_name = $translator->translate($listing->area->name, 'ar');
        }else{
            $area_name = '';
        }
        $city_name = $translator->translate($listing->city->city_name, 'ar');
        $no_rooms = $translator->translate($listing->propertyDetails->rooms, 'ar');
        $no_baths = $translator->translate($listing->propertyDetails->baths, 'ar');
        $size = $translator->translate($listing->propertyDetails->size, 'ar');
        $price = $translator->translate($listing->price, 'ar');
        $propertyType = $translator->translate($listing->propertyType->pt_name, 'ar');
        $description = $translator->translate($listing->description, 'ar');
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
        $txtDescription = $translator->translate('description', 'ar');
        $txtPropertDescription = $translator->translate('Property Description', 'ar');
        $txtReadmore = $translator->translate('read more', 'ar');
        $txtPropertydetails = $translator->translate('property details', 'ar');

        $txtSendmessage = $translator->translate('send message', 'ar');
        $txtpropertyid = $translator->translate('Property ID', 'ar');
        $txtPrice = $translator->translate('Price', 'ar');
        $txtPropertysize = $translator->translate('Property Size', 'ar');
        $txtBathrooms = $translator->translate('Bathrooms', 'ar');
        $txtBedrooms = $translator->translate('Bedrooms', 'ar');
        $txtGarage = $translator->translate('Garage', 'ar');
        $txtGaragesize = $translator->translate('Garage Size', 'ar');
        $txtYearbuit = $translator->translate('Year Built', 'ar');
        $txtPropertytype = $translator->translate('Property Type', 'ar');
        $txtPropertystatus = $translator->translate('Property Status', 'ar');
        $txtFeature = $translator->translate('features', 'ar');
        $txtAirconditioning = $translator->translate('air conditioning', 'ar');
        $txtSwimimgpool = $translator->translate('swiming pool', 'ar');
        $txtCentralheating = $translator->translate('Central Heating', 'ar');
        $txtGym = $translator->translate('GYM', 'ar');
        $txtWindowcovering = $translator->translate('window Covering', 'ar');
        $txtCarparking = $translator->translate('car parking', 'ar');
        $txtLocation = $translator->translate('location', 'ar');
        $txtSimilarproperty = $translator->translate('similiar properties', 'ar');
    } else {
        $tittle = $listing->tittle;
        $listing_for = $listing->listing_for;
        if(!empty($listing->area->name)){
            $area_name = $listing->area->name;
        }else{
            $area_name = '';
        }

        $city_name = $listing->city->city_name;
        $no_rooms = $listing->propertyDetails->rooms;
        $no_baths = $listing->propertyDetails->baths;
        $size = $listing->propertyDetails->size;
        $price = $listing->price;
        $slug = $listing->slug->slug;
        $propertyType = $listing->propertyType->pt_name;
        $description = $listing->description;
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
        $txtDescription = 'description';
        $txtPropertDescription = 'Property Description';
        $txtReadmore = 'read more';
        $txtPropertydetails = 'property details';
        $txtSendmessage = 'send message';
        $txtpropertyid = 'Property ID';
        $txtPrice = 'Price';
        $txtPropertysize = 'Property Size';
        $txtBathrooms = 'Bathrooms';
        $txtBedrooms = 'Bedrooms';
        $txtGarage = 'Garage';
        $txtGaragesize = 'Garage Size';
        $txtYearbuit = 'Year Built';
        $txtPropertytype = 'Property Type';
        $txtPropertystatus = 'Property Status';
        $txtFeature = 'features';
        $txtAirconditioning = 'air conditioning';
        $txtSwimimgpool = 'swiming pool';
        $txtCentralheating = 'Central Heating';
        $txtGym = 'GYM';
        $txtWindowcovering = 'window Covering';
        $txtCarparking = 'car parking';
        $txtLocation = 'location';
        $txtSimilarproperty = 'similiar properties';

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

    <!-- SINGLE DETAIL -->
    <section class="single__Detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- TITLE PROPERTY AND PRICE  -->
                    <div class="single__detail-area pt-0 pb-4">
                        <div class="row">
                            <div class="col-md-8 col-lg-8">
                                <div class="single__detail-area-title">
                                    <h3 class="text-capitalize">{{ $tittle }}</h3>
                                    <p>{{ $area_name }}, {{ $city_name }}, {{ $txtQatar}}</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4">
                                <div class="single__detail-area-price">
                                    <h3 class="text-capitalize text-gray"><span
                                            style="color: #11572E; font-size: 18px;">{{$txtQAR}}</span> {{ $price }}</h3>

                                    {{-- <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="badge  p-2 rounded"
                                                style="background-color: #11572E; color: #fff;"><i
                                                    class="fa fa-exchange"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="badge  p-2 rounded"
                                                style="background-color: #11572E; color: #fff;"><i
                                                    class="fa fa-heart"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="badge  p-2 rounded"
                                                style="background-color: #11572E; color: #fff;"><i
                                                    class="fa fa-print"></i></a>
                                        </li>
                                    </ul> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END TITLE PROPERTY AND PRICE  -->

                    <!-- SLIDER IMAGE DETAIL -->
                    <div class="slider__image__detail-large-two owl-carousel owl-theme">
                        @foreach ($listing->images as $image)
                        @if ($image)


                            <div class="item">
                                <div class="slider__image__detail-large-one">
                                    <img src="https://admin.zahratalshamal.com/{{ $image->image_path }}" alt=""
                                        class="img-fluid w-100 img-transition">
                                    <div class="description">
                                        {{-- <figure>
                                        <img src="images/yman.jpg" alt="" class="img-fluid">
                                    </figure> --}}
                                        <span class="badge text-capitalize mb-2"
                                            style="background-color: #11572E; color: #fff;">{{ $propertyType }}</span>
                                        <div class="price">
                                            <h4 class="text-capitalize text-gray"><span
                                                    style="color:yellow; font-size: 16px;">QAR</span> {{ $price }}
                                            </h4>
                                        </div>
                                        <h4 class="text-capitalize">{{ $tittle }}</h4>

                                    </div>

                                </div>
                            </div>
                            @else
                            <div class="item">
                                <div class="slider__image__detail-large-one">
                                    <img src="images/blank-img.jpg" alt=""
                                        class="img-fluid w-100 img-transition">
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="slider__image__detail-thumb-two owl-carousel owl-theme">
                        @foreach ($listing->images as $image)
                            <div class="item">
                                <div class="slider__image__detail-thumb-one">
                                    <img src="https://admin.zahratalshamal.com/{{ $image->image_path }}" alt=""
                                        class="img-fluid w-100 img-transition">
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- END SLIDER IMAGE DETAIL -->
                </div>
                <div class="col-lg-4 pt-5">
                    <!-- FORM FILTER -->
                    <div class="products__filter mb-30">
                        <div class="products__filter__group">
                            <div class="products__filter__header">

                                <h5 class="text-center text-capitalize">property filter</h5>
                            </div>
                            <div class="products__filter__body">
                                <div class="form-group">

                                    <select class="wide select_option">
                                        <option data-display="Property Status">Property Status</option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="wide select_option">
                                        <option data-display="Property Type">Property Type</option>
                                        <option>Showroom</option>
                                        <option>Apartment</option>
                                        <option>Penthouse</option>
                                        <option>Hotel Apartment</option>
                                        <option>Chalet</option>
                                        <option>Townhouse</option>
                                        <option>Office</option>
                                        <option>Retail Shop</option>
                                        <option>Compound Villa</option>
                                        <option>Standalone Villa</option>
                                        <option>Commercial Villa</option>
                                        <option>Retail Space</option>
                                        <option>Shop</option>
                                        <option>Restaurant</option>
                                        <option>Land</option>
                                        <option>Whole Building</option>
                                        <option>Labor Camp</option>
                                        <option>Warehouse</option>
                                        <option>Factory</option>
                                        <option>School</option>
                                        <option>Clinic / Hospital</option>
                                        <option>Land Plot</option>
                                        <option>Industrial Land</option>
                                        <option>Duplex</option>
                                        <option>Hotel</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="wide select_option">
                                        <option data-display="Area From">Area From </option>
                                        <option>1500</option>
                                        <option>1200</option>
                                        <option>900</option>
                                        <option>600</option>
                                        <option>300</option>
                                        <option>100</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="wide select_option">
                                        <option data-display="Locations">Locations</option>
                                        <option>Doha</option>
                                        <option>Al Wakrah</option>
                                        <option>Al Khor</option>
                                        <option>Al Rayyan</option>
                                        <option>Umm Salal</option>
                                        <option>Al Shamal</option>
                                        <option>Dukhan</option>
                                        <option>Mesaieed</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="wide select_option">
                                        <option data-display="Bedrooms">Bedrooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <select class="wide select_option">
                                            <option data-display="Bathrooms">Bathrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="mb-3">Price range</label>
                                    <div class="min-max-slider" data-legendnum="2">
                                        <label for="min">Minimum price</label>
                                        <input id="min" class="min" name="min" type="range" step="1"
                                            min="30000" max="100000" />
                                        <label for="max">Maximum price</label>
                                        <input id="max" class="max" name="max" type="range"
                                            step="1" min="30000" max="100000" />
                                    </div>
                                </div>
                            </div>
                            <div class="products__filter__footer">
                                <div class="form-group mb-0">
                                    <button class="btn text-capitalize btn-block"
                                        style="background-color: #11572E; color: #fff;"><i class="fa fa-search ml-1"></i>
                                        search
                                        property </button>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END FORM FILTER -->

                    <!-- END FORM FILTER -->
                    <div class="sticky-top">
                        <!-- PROFILE AGENT -->
                        <div class="profile__agent mb-30">
                            <div class="profile__agent__group">

                                <div class="profile__agent__header">
                                    <div class="profile__agent__header-avatar">
                                        <figure>
                                            <img src="https://admin.zahratalshamal.com/agent/{{$listing->agent->agentprofile}}" alt="" class="img-fluid">
                                        </figure>

                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <h5 class="text-capitalize">{{ $listing->agent->first_name}} {{ $listing->agent->last_name}}</h5>
                                            </li>
                                            <li><a href="tel:123456"><i
                                                        class="fa fa-phone-square mr-1"></i>{{ $listing->agent->office_contact}}</a></li>
                                            {{-- <li><a href="javascript:void(0)"><i class=" fa fa-building mr-1"></i>
                                                    Company name</a>
                                            </li> --}}
                                            <li> <a href="/{{ session('locale', 'en') }}/agentDetail/{{$listing->agent->id}}" class="text-primary">View My Profile</a>
                                            </li>
                                        </ul>


                                    </div>

                                </div>
                                <div class="profile__agent__body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <textarea class="form-control required" rows="5" required="required"
                                            placeholder="I'm interest in [ Listing Single ]"></textarea>
                                    </div>
                                </div>
                                <div class="profile__agent__footer">
                                    <div class="form-group mb-0">
                                        <button class="btn text-capitalize btn-block"
                                            style="background-color: #11572E; color: #fff;"> send message <i
                                                class="fa fa-paper-plane ml-1"></i></button>

                                    </div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- DESCRIPTION -->
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="single__detail-desc">
                                {{-- <h6 class="text-capitalize detail-heading">{{$description}}</h6> --}}
                                <p><b>{{$txtPropertDescription}}</b></p>
                                <div class="show__more">
                                    <p>
                                        {{ $description }}</p>
                                    <a href="javascript:void(0)" class="show__more-button"
                                        style="background-color: #11572E; color: #fff;">{{ $txtReadmore}}</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <!-- PROPERTY DETAILS SPEC -->
                            <div class="single__detail-features">
                                <h6 class="text-capitalize detail-heading">{{ $txtPropertydetails}}</h6>
                                <!-- INFO PROPERTY DETAIL -->
                                <div class="property__detail-info">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <ul class="property__detail-info-list list-unstyled">
                                                <li><b>{{ $txtpropertyid}}:</b> ZSRPL{{ $listing->id }}</li>
                                                <li><b>{{ $txtPrice}}:</b> QAR {{ $price }}</li>
                                                <li><b>{{ $txtPropertysize}}:</b> {{ $size }} Sq Ft</li>
                                                <li><b>{{ $txtBedrooms}}:</b> {{ $no_rooms }}</li>
                                                <li><b>{{ $txtBathrooms}}:</b> {{ $no_baths }}</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <ul class="property__detail-info-list list-unstyled">
                                                <li><b>{{ $txtGarage}}:</b> {{ $listing->propertyDetails->garage }}</li>
                                                <li><b>{{ $txtGaragesize}}:</b> {{ $listing->propertyDetails->garage_size }} SqFt
                                                </li>
                                                <li><b>{{ $txtYearbuit}}:</b> {{ $listing->propertyDetails->built_year }}</li>
                                                <li><b>{{ $txtPropertytype}}:</b> {{ $propertyType }}</li>
                                                <li><b>{{ $txtPropertystatus}}:</b> {{ $listing_for }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    {{-- <h5 style="color: #11572E;">Additional details</h5>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <ul class="property__detail-info-list list-unstyled">
                                                <li><b>Property ID:</b> RV151</li>
                                                <li><b>Price:</b> QAR 484,400</li>
                                                <li><b>Property Size:</b> 1466 Sq Ft</li>
                                                <li><b>Bedrooms:</b> 4</li>
                                                <li><b>Bathrooms:</b> 2</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <ul class="property__detail-info-list list-unstyled">
                                                <li><b>Garage:</b> 1</li>
                                                <li><b>Garage Size:</b> 458 SqFt</li>
                                                <li><b>Year Built:</b> 2019-01-09</li>
                                                <li><b>Property Type:</b> Full Family Home</li>
                                                <li><b>Property Status:</b> For rent</li>
                                            </ul>
                                        </div>
                                    </div> --}}

                                </div>
                                <!-- END INFO PROPERTY DETAIL -->
                            </div>
                            <!-- END PROPERTY DETAILS SPEC -->
                            <div class="clearfix"></div>

                            <!-- FEATURES -->
                            <div class="single__detail-features">
                                <h6 class="text-capitalize detail-heading">{{ $txtFeature}}</h6>
                                <ul class="list-unstyled icon-checkbox">
                                    @if ($listing->propertyFeatures->air_conditioning == '1')
                                        <li>{{ $txtAirconditioning}}</li>
                                    @endif
                                    @if ($listing->propertyFeatures->swimming_pool == '1')
                                        <li>{{ $txtSwimimgpool}}</li>
                                    @endif
                                    @if ($listing->propertyFeatures->central_heating == '1')
                                        <li>{{ $txtCentralheating}}</li>
                                    @endif
                                    @if ($listing->propertyFeatures->gym == '1')
                                        <li>{{ $txtGym}}</li>
                                    @endif
                                    @if ($listing->propertyFeatures->window_covering == '1')
                                        <li>{{ $txtWindowcovering}}</li>
                                    @endif
                                    @if ($listing->propertyFeatures->car_parking == '1')
                                        <li>{{ $txtCarparking}}</li>
                                    @endif
                                </ul>
                            </div>
                            <!-- END FEATURES -->

                            <!-- END FLOR PLAN -->
                            {{-- <div class="single__detail-features">
                                <h6 class="text-capitalize detail-heading">property video</h6>
                                <div class="single__detail-features-video">
                                    <figure class=" mb-0">
                                        <div class="home__video-area text-center">
                                            <img src="images/pd1.jpg" alt="" class="img-fluid">
                                            <a href="https://youtu.be/dQtLx6dsbcI" class="play-video-1 ">
                                                <i class="icon fa fa-play text-white"></i>
                                            </a>
                                        </div>

                                    </figure>
                                </div>
                            </div> --}}


                            <!-- LOCATION -->
                            <div class="single__detail-features">
                                <h6 class="text-capitalize detail-heading">{{ $txtLocation}}</h6>
                                <!-- FILTER VERTICAL -->
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-map-location-tab" data-toggle="pill"
                                            href="#pills-map-location" role="tab" aria-controls="pills-map-location"
                                            aria-selected="true">
                                            <i class="fa fa-map-marker"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-street-view-tab" data-toggle="pill"
                                            href="#pills-street-view" role="tab" aria-controls="pills-street-view"
                                            aria-selected="false">
                                            <i class="fa fa-street-view "></i></a>
                                    </li>


                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-map-location" role="tabpanel"
                                        aria-labelledby="pills-map-location-tab">
                                        <div id="map-canvas">
                                            <iframe class="h600 w100" src="{{ $listing->google_map_link }}"
                                                style="border:0;" allowfullscreen="" aria-hidden="false"
                                                tabindex="0"></iframe>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-street-view" role="tabpanel"
                                        aria-labelledby="pills-street-view-tab">
                                        <iframe class="h600 w100" src="{{ $listing->google_map_link }}"
                                            style="border:0;" allowfullscreen></iframe>
                                    </div>


                                </div>
                                <!-- END FILTER VERTICAL -->
                            </div>
                            <!-- END LOCATION -->

                        </div>
                    </div>
                    <!-- END DESCRIPTION -->
                </div>
            </div>

            <!-- SIMILIAR PROPERTY -->
            {{-- <div class="row">
                <div class="col-lg-12 mt-4">
                    <div class="similiar__item">
                        <h6 class="text-capitalize detail-heading">
                            {{ $txtSimilarproperty}}
                        </h6>
                        <div class="similiar__property-carousel owl-carousel owl-theme">
                            <div class="item">
                                <!-- ONE -->
                                <a href="propertyDetail.html">
                                    <div class="card__image">
                                        <div class="card__image-header h-250">
                                            <div class="ribbon text-capitalize" style="background-color: goldenrod;">
                                                featured</div>
                                            <img src="images/pd1.jpg" alt=""
                                                class="img-fluid w100 img-transition">
                                            <div class="info"> for sale</div>
                                        </div>
                                        <div class="card__image-body">
                                            <span class="badge text-capitalize mb-2"
                                                style="background-color: #11572E;color: #fff;">house</span>
                                            <h6 class="text-capitalize">
                                                <a href="#">vila in coral gables</a>
                                            </h6>

                                            <p class="text-capitalize">
                                                <i class="fa fa-map-marker"></i>
                                                West Bay, Doha, Qatar
                                            </p>
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
                                        <div class="card__image-footer d-flex justify-content-between align-items-center">
                                            <div>
                                                <!-- WhatsApp Button -->
                                                <a href="https://wa.me/1234567890" class="btn btn-sm"
                                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                    target="_blank">
                                                    <i class="fa fa-whatsapp"></i> WhatsApp
                                                </a>

                                                <!-- Call Button -->
                                                <a href="tel:1234567890" class="btn btn-sm ml-2"
                                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                                    <i class="fa fa-phone"></i> Call
                                                </a>
                                            </div>
                                            <h6 class="mb-0">
                                                <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <!-- TWO -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize" style="background-color: goldenrod;">featured
                                        </div>
                                        <img src="images/apart4.jpg" alt=""
                                            class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge text-capitalize mb-2"
                                            style="background-color: #11572E;color: #fff;">house</span>
                                        <h6 class="text-capitalize">
                                            <a href="#">Ample Apartment At Last Floor</a>
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            West Bay, Doha, Qatar
                                        </p>
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
                                    <div class="card__image-footer d-flex justify-content-between align-items-center">
                                        <div>
                                            <!-- WhatsApp Button -->
                                            <a href="https://wa.me/1234567890" class="btn btn-sm"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                target="_blank">
                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                            </a>

                                            <!-- Call Button -->
                                            <a href="tel:1234567890" class="btn btn-sm ml-2"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                                <i class="fa fa-phone"></i> Call
                                            </a>
                                        </div>
                                        <h6 class="mb-0">
                                            <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- THREE -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize" style="background-color: goldenrod;">featured
                                        </div>
                                        <img src="images/apart6.jpg" alt=""
                                            class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge text-capitalize mb-2"
                                            style="background-color: #11572E;color: #fff;">house</span>
                                        <h6 class="text-capitalize">
                                            <a href="#">Contemporary Apartment</a>
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            West Bay, Doha, Qatar
                                        </p>
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
                                    <div class="card__image-footer d-flex justify-content-between align-items-center">
                                        <div>
                                            <!-- WhatsApp Button -->
                                            <a href="https://wa.me/1234567890" class="btn btn-sm"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                target="_blank">
                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                            </a>

                                            <!-- Call Button -->
                                            <a href="tel:1234567890" class="btn btn-sm ml-2"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                                <i class="fa fa-phone"></i> Call
                                            </a>
                                        </div>
                                        <h6 class="mb-0">
                                            <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- FOUR -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize" style="background-color: goldenrod;">featured
                                        </div>
                                        <img src="images/pd4.jpg" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge text-capitalize mb-2"
                                            style="background-color: #11572E;color: #fff;">house</span>
                                        <h6 class="text-capitalize">
                                            <a href="#">Family Home For Sale</a>
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            West Bay, Doha, Qatar
                                        </p>
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
                                    <div class="card__image-footer d-flex justify-content-between align-items-center">
                                        <div>
                                            <!-- WhatsApp Button -->
                                            <a href="https://wa.me/1234567890" class="btn btn-sm"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                target="_blank">
                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                            </a>

                                            <!-- Call Button -->
                                            <a href="tel:1234567890" class="btn btn-sm ml-2"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                                <i class="fa fa-phone"></i> Call
                                            </a>
                                        </div>
                                        <h6 class="mb-0">
                                            <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- FIVE -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize" style="background-color: goldenrod;">featured
                                        </div>
                                        <img src="images/apart3.jpg" alt=""
                                            class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge text-capitalize mb-2"
                                            style="background-color: #11572E;color: #fff;">house</span>
                                        <h6 class="text-capitalize">
                                            <a href="#">184 Lexington Avenue</a>
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            West Bay, Doha, Qatar
                                        </p>
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
                                    <div class="card__image-footer d-flex justify-content-between align-items-center">
                                        <div>
                                            <!-- WhatsApp Button -->
                                            <a href="https://wa.me/1234567890" class="btn btn-sm"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                target="_blank">
                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                            </a>

                                            <!-- Call Button -->
                                            <a href="tel:1234567890" class="btn btn-sm ml-2"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                                <i class="fa fa-phone"></i> Call
                                            </a>
                                        </div>
                                        <h6 class="mb-0">
                                            <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- SIX -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize" style="background-color: goldenrod;">featured
                                        </div>
                                        <img src="images/apart7.jpg" alt=""
                                            class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge text-capitalize mb-2"
                                            style="background-color: #11572E;color: #fff;">house</span>
                                        <h6 class="text-capitalize">
                                            <a href="#">Luxury Villa With Pool</a>
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            West Bay, Doha, Qatar
                                        </p>
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
                                    <div class="card__image-footer d-flex justify-content-between align-items-center">
                                        <div>
                                            <!-- WhatsApp Button -->
                                            <a href="https://wa.me/1234567890" class="btn btn-sm"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                target="_blank">
                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                            </a>

                                            <!-- Call Button -->
                                            <a href="tel:1234567890" class="btn btn-sm ml-2"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                                <i class="fa fa-phone"></i> Call
                                            </a>
                                        </div>
                                        <h6 class="mb-0">
                                            <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize" style="background-color: goldenrod;">featured
                                        </div>
                                        <img src="images/pd6.jpg" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge text-capitalize mb-2"
                                            style="background-color: #11572E;color: #fff;">house</span>
                                        <h6 class="text-capitalize">
                                            <a href="#">The Citizen Apartment 5th Floor</a>
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            West Bay, Doha, Qatar
                                        </p>
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
                                    <div class="card__image-footer d-flex justify-content-between align-items-center">
                                        <div>
                                            <!-- WhatsApp Button -->
                                            <a href="https://wa.me/1234567890" class="btn btn-sm"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                target="_blank">
                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                            </a>

                                            <!-- Call Button -->
                                            <a href="tel:1234567890" class="btn btn-sm ml-2"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                                <i class="fa fa-phone"></i> Call
                                            </a>
                                        </div>
                                        <h6 class="mb-0">
                                            <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                                        </h6>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- SEVEN -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <div class="ribbon text-capitalize" style="background-color: goldenrod;">featured
                                        </div>
                                        <img src="images/pd5.jpg" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> for sale</div>
                                    </div>
                                    <div class="card__image-body">
                                        <span class="badge text-capitalize mb-2"
                                            style="background-color: #11572E;color: #fff;">house</span>
                                        <h6 class="text-capitalize">
                                            <a href="#">Family Home For Sale</a>
                                        </h6>

                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            West Bay, Doha, Qatar
                                        </p>
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
                                    <div class="card__image-footer d-flex justify-content-between align-items-center">
                                        <div>
                                            <!-- WhatsApp Button -->
                                            <a href="https://wa.me/1234567890" class="btn btn-sm"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                target="_blank">
                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                            </a>

                                            <!-- Call Button -->
                                            <a href="tel:1234567890" class="btn btn-sm ml-2"
                                                style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                                <i class="fa fa-phone"></i> Call
                                            </a>
                                        </div>
                                        <h6 class="mb-0">
                                            <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                                        </h6>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}


        </div>
    </section>
@endsection
