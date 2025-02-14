@extends('layout.layout')
@php
    $pagename = 'Property Listings';
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
    <!-- BREADCRUMB -->
    <div class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__breadcrumb-v1">
                        <ol class="breadcrumb mb-0 bg-light">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> </a></li>
                            <li class="breadcrumb-item"> <a href="#">Property</a></li>
                            <li class="breadcrumb-item active"> <span class="text-capitalize" style="color: #11572E;"> Luxury family home</span>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMB -->
    <div class="search__area bg__shadow">
        <div class="container">
            <div class="search__area">
                <div class="container">
                    <div class="search__area-inner">
                        <div class="row">
                            <div class="btnsdiv">
                                <div style="display: flex; gap: 10px;">
                                    <button class="btns status-btn active" onclick="toggleStatus(this, 'buy')"
                                            style="background-color: #11572E; color: #fff; ">
                                         Buy
                                    </button>
                                    <button class="btns status-btn" onclick="toggleStatus(this, 'rent')"
                                            style="background-color: #fff; color: #11572E;  ">
                                         Rent
                                    </button>
                                </div>

                            </div>
                            <div style="margin: 10px 20px;">
                                <div id="buyOptions" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                    <button class="togbtn toggle-btn active" onclick="setActiveToggle(this)"
                                            style="background-color: #11572E; color: #fff; border: 1px solid #11572E; border-radius: 5px; transition: 0.3s;  font-size: 12px; border: 1px solid #11572E">
                                        ALL
                                    </button>
                                    <button class="togbtn toggle-btn" onclick="setActiveToggle(this)"
                                            style="background-color: #fff; color: #11572E; transition: 0.3s;  font-size: 12px; border: 1px solid #11572E;border-radius: 5px;border-radius: 5px; ">
                                        Off Plan
                                    </button>
                                    <button class="togbtn toggle-btn" onclick="setActiveToggle(this)"
                                            style="background-color: #fff; color: #11572E; transition: 0.3s; padding: 5px 15px; font-size: 12px; border: 1px solid #11572E;border-radius: 5px;">
                                        Ready
                                    </button>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
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
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
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
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
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
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
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
                            </div>
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group" style="display: flex; gap: 10px; align-items: center;">
                                    <input type="number" class="form-control" placeholder="Min Price - QAR" min="0" style="width: 130px;">
                                    <input type="number" class="form-control" placeholder="Max Price - QAR" min="0" style="width: 130px;">
                                </div>

                            </div>

                            <!-- <div class="col-12 col-lg-3 col-md-3" style="margin-left: 30px;">
                                <div class="min-max-slider" data-legendnum="2">
                                    <label for="min">Minimum price</label>
                                    <input id="min" class="min" name="min" type="range" step="1" min="30000" max="100000" />
                                    <label for="max">Maximum price</label>
                                    <input id="max" class="max" name="max" type="range" step="1" min="30000" max="100000" />
                                </div>





                            </div> -->

                            <!-- <div class="col-12 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <div class="filter__price">
                                        <input class="price-range" type="text" name="my_range" value=""  />
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-12 col-lg-2 col-md-3">
                                <div class="form-group">
                                    <button class="btn  text-uppercase btn-block" style="background-color: #11572E; border-color: #11572E; color: #fff; border-radius: 5px; margin-left: 10px;"> search <i
                                            class="fa fa-search ml-1"></i></button>
                                </div>
                                <!-- <div style="margin: 10px 20px;">
                                    <div id="buyOptions" style="display: flex; gap: 10px; flex-wrap: wrap;">
                                        <button class="togbtn toggle-btn active" onclick="setActiveToggle(this)"
                                                style="background-color: #11572E; color: #fff; border: 1px solid #11572E; border-radius: 5px; transition: 0.3s; padding: 5px 15px; font-size: 12px;">
                                            ALL
                                        </button>
                                        <button class="togbtn toggle-btn" onclick="setActiveToggle(this)"
                                                style="background-color: #fff; color: #11572E; border: 1px solid #11572E; border-radius: 5px; transition: 0.3s; padding: 5px 15px; font-size: 12px;">
                                            Off Plan
                                        </button>
                                        <button class="togbtn toggle-btn" onclick="setActiveToggle(this)"
                                                style="background-color: #fff; color: #11572E; border: 1px solid #11572E; border-radius: 5px; transition: 0.3s; padding: 5px 15px; font-size: 12px;">
                                            Ready
                                        </button>
                                    </div>
                                </div> -->
                            </div>


                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LISTING LIST -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tabs__custom-v2 ">
                                <!-- FILTER VERTICAL -->
                                <ul class="nav nav-pills myTab" role="tablist">
                                    <li class="list-inline-item mr-auto">
                                        <span class="title-text" style="color: #11572E;">Sort by</span>
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Based Properties
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Low to High Price</a>
                                                <a class="dropdown-item" href="javascript:void(0)">High to Low Price
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">Sell Properties</a>

                                                <a class="dropdown-item" href="javascript:void(0)">Rent Properties</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#pills-tab-one" role="tab"
                                            aria-controls="pills-tab-one" aria-selected="true">
                                            <span class="fa fa-th-list"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#pills-tab-two" role="tab"
                                            aria-controls="pills-tab-two" aria-selected="false">
                                            <span class="fa fa-th-large"></span></a>
                                    </li>
                                </ul>



                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="pills-tab-one" role="tabpanel"
                                        aria-labelledby="pills-tab-one">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card__image card__box-v1">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-4 col-lg-3 col-xl-4">
                                                            <div class="card__image__header h-250">
                                                                <a href="propertyDetail">
                                                                    <div class="ribbon text-capitalize" style="background-color: #11572E;">sold out</div>
                                                                    <img src="images/apart2.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
                                                                <h6>
                                                                    <a href="#">Luxury Villa, The Pearl, Doha, Qatar
                                                                    </a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!

                    </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
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
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/eight.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-auto ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6 class="mb-0">
                                        <span style="color: #11572E; font-size: small;">QAR</span> 350,000
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
                                                                    <div class="ribbon text-capitalize" style="background-color: #11572E;">sold out</div>
                                                                    <img src="images/apart6.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
                                                                <h6>
                                                                    <a href="#">Ample Apartment At Last Floor</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!

                                    </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
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
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/logo.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-atuo ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6 class="mb-0">
                                        <span style="color: #11572E; font-size: small;">QAR</span> 350,000
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
                                                                    <div class="ribbon text-capitalize" style="background-color: #11572E;">sold out</div>
                                                                    <img src="images/apart4.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
                                                                <h6>
                                                                    <a href="#">Ample Apartment At Last Floor</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!

                                    </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
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
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/logo.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-atuo ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6 class="mb-0">
                                        <span style="color: #11572E; font-size: small;">QAR</span> 350,000
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
                                                                    <div class="ribbon text-capitalize" style="background-color: #11572E;">sold out</div>
                                                                    <img src="images/apart6.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
                                                                <h6>
                                                                    <a href="#">Family Home For Sale</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!

                                        </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
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
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/logo.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-atuo ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6 class="mb-0">
                                        <span style="color: #11572E; font-size: small;">QAR</span> 350,000
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
                                                                    <div class="ribbon text-capitalize" style="background-color: #11572E;">sold out</div>
                                                                    <img src="images/apart3.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
                                                                <h6>
                                                                    <a href="#">Luxury Villa With Pool</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!

                                        </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
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
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/logo.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-atuo ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6 class="mb-0">
                                        <span style="color: #11572E; font-size: small;">QAR</span> 350,000
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
                                                                    <div class="ribbon text-capitalize" style="background-color: #11572E;">sold out</div>
                                                                    <img src="images/apart4.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
                                                                <h6>
                                                                    <a href="#">184 Lexington Avenue</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!

                                        </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
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
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/logo.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-atuo ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6 class="mb-0">
                                        <span style="color: #11572E; font-size: small;">QAR</span> 350,000
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
                                                                    <div class="ribbon text-capitalize" style="background-color: #11572E;">sold out</div>
                                                                    <img src="images/apart7.jpg" alt=""
                                                                        class="img-fluid w100 img-transition">
                                                                    <div class="info"> for sale</div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                                            <div class="card__image__body">

                                                                <span
                                                                    class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
                                                                <h6>
                                                                    <a href="#">The Citizen Apartment 5th Floor</a>
                                                                </h6>
                                                                <div class="card__image__body-desc">
                                                                    <!-- <p class="text-capitalize">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, alias!

                                        </p> -->
                                                                    <p class="text-capitalize">
                                                                        <i class="fa fa-map-marker"></i>
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
                                                        <div
                                                            class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                                            <div class="card__image__footer">
                                                                <figure>
                                                                    <img src="images/logo.jpg" alt=""
                                                                        class="img-fluid rounded-circle">
                                                                </figure>
                                                                <ul class="list-inline my-auto">
                                                                    <li class="list-inline-item name">
                                                                        <a href="#">
                                                                            tom wilson
                                                                        </a>

                                                                    </li>


                                                                </ul>
                                                                <ul class="list-inline my-atuo ml-auto price">
                                                                    <li class="list-inline-item ">

                                                                        <h6 class="mb-0">
                                        <span style="color: #11572E; font-size: small;">QAR</span> 350,000
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
                                    <div class="tab-pane fade show active" id="pills-tab-two" role="tabpanel"
                                        aria-labelledby="pills-tab-two">
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4">
                                               <a href="propertyDetail">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;" >featured</div>
                                                        <img src="images/apart4.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info" style="background-color: #11572E;"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
                                                        <h6 class="text-capitalize">
                                                            vila in coral gables
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
                                                            <a href="https://wa.me/1234567890"
                                                               class="btn btn-sm"
                                                               style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                               target="_blank">
                                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                                            </a>

                                                            <!-- Call Button -->
                                                            <a href="tel:1234567890"
                                                               class="btn btn-sm ml-2"
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
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;" >featured</div>
                                                        <img src="images/apart2.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info" style="background-color: #11572E;"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
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
                                                            <a href="https://wa.me/1234567890"
                                                               class="btn btn-sm"
                                                               style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                               target="_blank">
                                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                                            </a>

                                                            <!-- Call Button -->
                                                            <a href="tel:1234567890"
                                                               class="btn btn-sm ml-2"
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
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;" >featured</div>
                                                        <img src="images/apart3.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info" style="background-color:#11572E;"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
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
                                                            <a href="https://wa.me/1234567890"
                                                               class="btn btn-sm"
                                                               style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                               target="_blank">
                                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                                            </a>

                                                            <!-- Call Button -->
                                                            <a href="tel:1234567890"
                                                               class="btn btn-sm ml-2"
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
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;" >featured</div>
                                                        <img src="images/apart7.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info" style="background-color: #11572E;"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
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
                                                            <a href="https://wa.me/1234567890"
                                                               class="btn btn-sm"
                                                               style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                               target="_blank">
                                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                                            </a>

                                                            <!-- Call Button -->
                                                            <a href="tel:1234567890"
                                                               class="btn btn-sm ml-2"
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
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;" >featured</div>
                                                        <img src="images/apart4.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info" style="background-color: #11572E;"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
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
                                                            <a href="https://wa.me/1234567890"
                                                               class="btn btn-sm"
                                                               style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                               target="_blank">
                                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                                            </a>

                                                            <!-- Call Button -->
                                                            <a href="tel:1234567890"
                                                               class="btn btn-sm ml-2"
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
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;" >featured</div>
                                                        <img src="images/apart6.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info" style="background-color: #11572E;"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
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
                                                            <a href="https://wa.me/1234567890"
                                                               class="btn btn-sm"
                                                               style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                               target="_blank">
                                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                                            </a>

                                                            <!-- Call Button -->
                                                            <a href="tel:1234567890"
                                                               class="btn btn-sm ml-2"
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
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;" >featured</div>
                                                        <img src="images/apart3.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info" style="background-color: #11572E;"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
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
                                                            <a href="https://wa.me/1234567890"
                                                               class="btn btn-sm"
                                                               style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                               target="_blank">
                                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                                            </a>

                                                            <!-- Call Button -->
                                                            <a href="tel:1234567890"
                                                               class="btn btn-sm ml-2"
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
                                            <div class="col-md-4 col-lg-4">
                                                <!-- ONE -->
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;" >featured</div>
                                                        <img src="images/apart2.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info" style="background-color: #11572E;"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
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
                                                            <a href="https://wa.me/1234567890"
                                                               class="btn btn-sm"
                                                               style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                               target="_blank">
                                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                                            </a>

                                                            <!-- Call Button -->
                                                            <a href="tel:1234567890"
                                                               class="btn btn-sm ml-2"
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
                                            <div class="col-md-4 col-lg-4">
                                                <!-- TWO -->
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;" >featured</div>
                                                        <img src="images/apart6.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info" style="background-color: #11572E;"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
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
                                                            <a href="https://wa.me/1234567890"
                                                               class="btn btn-sm"
                                                               style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                               target="_blank">
                                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                                            </a>

                                                            <!-- Call Button -->
                                                            <a href="tel:1234567890"
                                                               class="btn btn-sm ml-2"
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
                                        <div class="row">
                                            <div class="col-md-4 col-lg-4">
                                                <!-- THREE -->
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;" >featured</div>
                                                        <img src="images/apart6.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info" style="background-color: #11572E;"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
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
                                                            <a href="https://wa.me/1234567890"
                                                               class="btn btn-sm"
                                                               style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                               target="_blank">
                                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                                            </a>

                                                            <!-- Call Button -->
                                                            <a href="tel:1234567890"
                                                               class="btn btn-sm ml-2"
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
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;" >featured</div>
                                                        <img src="images/apart4.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info" style="background-color: #11572E;"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
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
                                                            <a href="https://wa.me/1234567890"
                                                               class="btn btn-sm"
                                                               style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                               target="_blank">
                                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                                            </a>

                                                            <!-- Call Button -->
                                                            <a href="tel:1234567890"
                                                               class="btn btn-sm ml-2"
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
                                            <div class="col-md-4 col-lg-4">
                                                <div class="card__image card__box-v1">
                                                    <div class="card__image-header h-250">
                                                        <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;" >featured</div>
                                                        <img src="images/apart7.jpg" alt=""
                                                            class="img-fluid w100 img-transition">
                                                        <div class="info" style="background-color: #11572E;"> for sale</div>
                                                    </div>
                                                    <div class="card__image-body">
                                                        <span
                                                            class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">house</span>
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
                                                            <a href="https://wa.me/1234567890"
                                                               class="btn btn-sm"
                                                               style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                               target="_blank">
                                                                <i class="fa fa-whatsapp"></i> WhatsApp
                                                            </a>

                                                            <!-- Call Button -->
                                                            <a href="tel:1234567890"
                                                               class="btn btn-sm ml-2"
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
                                        <div class="cleafix"></div>
                                    </div>



                                </div>
                                <!-- END FILTER VERTICAL -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END LISTING LIST -->

@endsection
