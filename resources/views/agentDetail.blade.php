@extends('layout.layout')
@php
    $pagename = 'Agent Details';
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
                                        <img src="{{ asset('images/team4.jpg') }}" alt="" class="img-fluid ">
                                        <div class="total__property-agent">{{ $agent->listings->count() }} listing</div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-lg-6 my-auto">
                                    <div class="profile__agents-info">
                                        <h5 class="text-capitalize">
                                            <a href="#"
                                                target="_blank">{{ $agent->first_name }}&nbsp;{{ $agent->last_name }}</a>
                                        </h5>
                                        <p class="text-capitalize mb-1">property agent</p>

                                        <ul class="list-unstyled mt-2">
                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-building"></i> office :</span>
                                                    {{ $agent->office_contact }}</a>
                                            </li>
                                            <li><a href="#" class="text-capitalize"><span><i class="fa fa-phone"></i>
                                                        mobile :</span> {{ $agent->phone_contact }}</a></li>
                                            <li><a href="#" class="text-capitalize"><span><i class="fa fa-fax"></i>
                                                        fax : </span> 342 655</a></li>
                                            <li><a href="#" class="text-capitalize"><span><i
                                                            class="fa fa-envelope"></i> email :</span>
                                                    {{ $agent->email }}</a></li>
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
                        <h5 class="text-capitalize detail-heading">Agent details</h5>
                        <!-- FILTER VERTICAL -->
                        <ul class="nav nav-pills myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active pills-tab-one" data-toggle="pill" href="#pills-tab-one"
                                    role="tab" aria-controls="pills-tab-one" aria-selected="true">
                                    Description
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pills-tab-two" data-toggle="pill" href="#pills-tab-two" role="tab"
                                    aria-controls="pills-tab-two" aria-selected="false">
                                    Listing</a>
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
                                    <h5 class="text-capitalize detail-heading">Hi, nice to meet you</h5>
                                    <p>{{ $agent->description}}</p>
                                    {{-- <div class="show__more">
                                        <p>description</p>
                                        <p>{{ $agent->description}}</p>
                                        <a href="javascript:void(0)" class="show__more-button "
                                            style="background-color: #11572E; color: #fff;">read more</a>
                                    </div> --}}
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-pane fade" id="pills-tab-two" role="tabpanel"
                                aria-labelledby="pills-tab-two">
                                <div class="row">
                                    @foreach ($agent->listings as $listing)
                                    <div class="col-lg-12">
                                        <div class="card__image card__box-v1">
                                            <div class="row no-gutters">
                                                <div class="col-md-4 col-lg-3 col-xl-4">
                                                    <div class="card__image__header h-250">
                                                        <a href="{{route('propertyDetail', $listing->slug->slug)}}">
                                                            <div class="ribbon text-capitalize"
                                                                style="background-color:#11572E; color: #fff;">{{$listing->status}}
                                                            </div>
                                                            <img src="images/apart4.jpg" alt=""
                                                                class="img-fluid w100 img-transition">
                                                            <div class="info"> {{ $listing->listing_for}}</div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                    <div class="card__image__body">

                                                        <span class="badge badge-primary text-capitalize mb-2"
                                                            style="background-color:#11572E; color: #fff;">{{ $listing->propertyType->pt_name}}</span>
                                                        <h6>
                                                            <a href="{{route('propertyDetail', $listing->slug->slug)}}">{{ $listing->tittle}}</a>
                                                        </h6>
                                                        <div class="card__image__body-desc">
                                                            <p class="text-capitalize">
                                                                <i class="fa fa-map-Haiderer"></i>
                                                                {{ $listing->area->name}}, {{ $listing->city->city_name}}, Qatar
                                                            </p>
                                                        </div>

                                                        <ul class="list-inline card__content">
                                                            <li class="list-inline-item">

                                                                <span>
                                                                    baths <br>
                                                                    <i class="fa fa-bath"></i> {{ $listing->propertyDetails->baths}}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    beds <br>
                                                                    <i class="fa fa-bed"></i> {{ $listing->propertyDetails->rooms}}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    rooms <br>
                                                                    <i class="fa fa-inbox"></i> {{ $listing->propertyDetails->rooms}}
                                                                </span>
                                                            </li>
                                                            <li class="list-inline-item">
                                                                <span>
                                                                    area <br>
                                                                    <i class="fa fa-map"></i> {{ $listing->propertyDetails->size}} sq ft
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
                                                                    {{$agent->first_name}}
                                                                </a>

                                                            </li>


                                                        </ul>
                                                        <ul class="list-inline my-auto ml-auto price">
                                                            <li class="list-inline-item ">

                                                                <h6 class="mb-0">
                                                                    <span
                                                                        style="color: #11572E; font-size: small;">QAR</span>
                                                                        {{ $listing->price}}
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
                                                            <img src="images/apart6.jpg" alt=""
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
                                                            <img src="images/apart7.jpg" alt=""
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
                                                            <a href="#">Family Home For Sale</a>
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
                                                            <img src="images/apart3.jpg" alt=""
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
                                                            <a href="#">Luxury Villa With Pool</a>
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
                                                            <a href="#">184 Lexington Avenue</a>
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
                                                            <img src="images/apart4.jpg" alt=""
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
                                                            <a href="#">The Citizen Apartment 5th Floor</a>
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

                            <div class="tab-pane fade" id="pills-tab-four" role="tabpanel"
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
                            </div>


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
                                    <h5 class="text-center text-capitalize">Contact Hannah</h5>
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
                                    <h5 class="text-dark mb-0 text-center">Categories Property</h5>
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
