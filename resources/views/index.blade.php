@extends('layout.layout')
@php
$pagename = 'Home';
$translator = new \App\Services\TranslationService();
    if (session()->get('locale') == 'ar') {
        $txtpagename = $translator->translate($pagename, 'ar');
        $txtHerosliderheading1 = $translator->translate('The #1 place for commercial property', 'ar');
        $txtHerosliderptag1 = $translator->translate('Lorem ipsum dolor sit consectetur adipisicing elit. Laboriosam
        recusandae', 'ar');
        $txtHerosliderheading2 = $translator->translate('The #1 place for commercial property', 'ar');
        $txtHerosliderptag2 = $translator->translate('Lorem ipsum dolor sit consectetur adipisicing elit. Laboriosam
        recusandae', 'ar');
        $txtHerosliderheading3 = $translator->translate('The #1 place for commercial property', 'ar');
        $txtHerosliderptag3 = $translator->translate('Lorem ipsum dolor sit consectetur adipisicing elit. Laboriosam
        recusandae', 'ar');
        $txtcontactusbtn = $translator->translate('Contact Us', 'ar');
        $txtScetion1heading = $translator->translate('Most Popular Places', 'ar');
        $txtScetion1tagline = $translator->translate('find properties in these cities.', 'ar');
        $txtScetion2heading = $translator->translate('Featured Properties', 'ar');
        $txtScetion2tagline = $translator->translate('handpicked exclusive properties by our team.', 'ar');
        $txtScetion3heading = $translator->translate('our partners', 'ar');
        $txtScetion3tagline = $translator->translate('Brand Partners Successful Projects Trusted Many Clients Real Estate', 'ar');
        $txtScetion5heading = $translator->translate('what people says', 'ar');
        $txtScetion5tagline = $translator->translate('people says about walls property.', 'ar');
    } else {
        $txtpagename = $pagename;
        $txtHerosliderheading1 = 'The #1 place for commercial property';
        $txtHerosliderptag1 = 'Lorem ipsum dolor sit consectetur adipisicing elit. Laboriosam recusandae';
        $txtHerosliderheading2 = 'The #1 place for commercial property';
        $txtHerosliderptag2 = 'Lorem ipsum dolor sit consectetur adipisicing elit. Laboriosam recusandae';
        $txtHerosliderheading3 = 'The #1 place for commercial property';
        $txtHerosliderptag3 = 'Lorem ipsum dolor sit consectetur adipisicing elit. Laboriosam recusandae';
        $txtcontactusbtn = 'Contact Us';
        $txtScetion1heading = 'Most Popular Places';
        $txtScetion1tagline = 'find properties in these cities.';
        $txtScetion2heading = 'Featured Properties';
        $txtScetion2tagline = 'handpicked exclusive properties by our team.';
        $txtScetion3heading = 'our partners';
        $txtScetion3tagline = 'Brand Partners Successful Projects Trusted Many Clients Real Estate';
        $txtScetion5heading = 'what people says';
        $txtScetion5tagline = 'people says about walls property.';
    }


@endphp

@section('pagename')
    {{ $txtpagename }}
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
    <div class="slider-container">
        <div class="container-slider-image-full  ">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators d-none">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active banner-max-height">
                        <img class="d-block w-100" src="{{asset('images/pic1.jpg')}}" alt="First slide">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="fadeInDown" data-delay=".2s" data-duration="1000ms"
                                                    class="text-white animated fadeInDown">
                                                    {{ $txtHerosliderheading1 }}
                                                </h2>
                                                <p data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms"
                                                    class="text-white animated fadeInUp">

                                                    {{ $txtHerosliderptag1 }}
                                                </p>
                                                <a href="{{ route('contact', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}" class="btn text-uppercase animated fadeInUp"
                                                    style="background-color: #11572E; border-color: #11572E; color: #fff;">
                                                    {{ $txtcontactusbtn }}
                                                    <i class="fa fa-angle-right arrow-btn"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item banner-max-height">
                        <img class="d-block w-100" src="{{asset('images/pic2.jpg')}}" alt="Second slide">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="animated fadeInDown"
                                                    class="text-white animated fadeInDown">
                                                    {{ $txtHerosliderheading2 }}
                                                    </h2>
                                                <p data-animation="animated fadeInUp" class="text-white animated fadeInUp ">

                                                    {{ $txtHerosliderptag2 }}
                                                </p>
                                                <a href="{{ route('contact', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}"
                                                    class="btn text-uppercase animated fadeInUp"
                                                    style="background-color: #11572E; border-color: #11572E; color: #fff;">
                                                    {{ $txtcontactusbtn }}
                                                    <i class="fa fa-angle-right arrow-btn"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item banner-max-height">
                        <img class="d-block w-100" src="{{asset('images/pic3.jpg')}}" alt="Third slide">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="animated fadeInDown"
                                                    class="text-white animated fadeInDown">
                                                    {{ $txtHerosliderheading3 }}
                                                </h2>
                                                <p data-animation="animated fadeInUp" class="text-white animated fadeInUp ">

                                                    {{ $txtHerosliderptag3 }}
                                                </p>
                                                <a href="{{ route('contact', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}"
                                                    class="btn text-uppercase animated fadeInUp"
                                                    style="background-color: #11572E; border-color: #11572E; color: #fff;">
                                                    {{ $txtcontactusbtn }}
                                                    <i class="fa fa-angle-right arrow-btn"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span> -->
                <span class="carousel-control-nav-prev">
                    <i class="fa fa-2x fa-angle-left"></i>
                </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span> -->
                <span class="carousel-control-nav-next">
                    <i class="fa fa-2x fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="clearfix"></div>
    <div class="search__area bg-light">
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
                            <input type="number" class="form-control" placeholder="Min Price - QAR" min="0"
                                style="width: 130px;">
                            <input type="number" class="form-control" placeholder="Max Price - QAR" min="0"
                                style="width: 130px;">
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
                            <button class="btn  text-uppercase btn-block"
                                style="background-color: #11572E; border-color: #11572E; color: #fff; border-radius: 5px;" onclick="window.location.href='{{ route('propertylistings', [session()->get('locale') == 'ar' ? 'ar' : 'en']) }}'">
                                search <i class="fa fa-search ml-1"></i></button>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>


    <section class="wrap__heading bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">
                            {{ $txtScetion1heading }}
                        </h2>
                        <p class="text-center text-capitalize">{{ $txtScetion1tagline }}</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-xl-5 col-padd">
                    <!-- CARD IMAGE -->

                    <a href="#">
                        <div class="card__image-hover-style-v3">
                            <div class="card__image-hover-style-v3-thumb h-475">
                                <img src="images/city-Tokyo.jpg" alt="" class="img-fluid w-100">
                            </div>
                            <div class="overlay">
                                <div class="desc">
                                    <h6 class="text-capitalize">Qatar</h6>
                                    <p class="text-capitalize">70 properties</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-7 col-xl-7">
                    <div class="row">
                        <div class="col-md-6 col-padd">
                            <!-- CARD IMAGE -->
                            <a href="#">
                                <div class="card__image-hover-style-v3">
                                    <div class="card__image-hover-style-v3-thumb h-230">
                                        <img src="images/aus.jpg" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="overlay">
                                        <div class="desc">
                                            <h6 class="text-capitalize">Al Rayyan</h6>
                                            <p class="text-capitalize">70 properties</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-padd">
                            <!-- CARD IMAGE -->
                            <a href="#">
                                <div class="card__image-hover-style-v3">
                                    <div class="card__image-hover-style-v3-thumb h-230">
                                        <img src="images/qatar.jpg" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="overlay">
                                        <div class="desc">
                                            <h6 class="text-capitalize">Dukhan</h6>
                                            <p class="text-capitalize">70 properties</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-padd">
                            <!-- CARD IMAGE -->
                            <a href="#">
                                <div class="card__image-hover-style-v3">
                                    <div class="card__image-hover-style-v3-thumb h-230">
                                        <img src="images/ny.webp" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="overlay">
                                        <div class="desc">
                                            <h6 class="text-capitalize">Mesaieed</h6>
                                            <p class="text-capitalize">70 properties</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-padd">
                            <!-- CARD IMAGE -->
                            <a href="#">
                                <div class="card__image-hover-style-v3">
                                    <div class="card__image-hover-style-v3-thumb h-230">
                                        <img src="images/london.jpg" alt="" class="img-fluid w-100">
                                    </div>
                                    <div class="overlay">
                                        <div class="desc">
                                            <h6 class="text-capitalize">Umm Salal</h6>
                                            <p class="text-capitalize">70 properties</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">
                            {{ $txtScetion2heading }}
                        </h2>
                        <p class="text-center text-capitalize">
                            {{ $txtScetion2tagline }}
                        </p>

                    </div>
                </div>
            </div>


            @livewire('home-property')
            <div class="clearfix"></div>
        </div>
    </section>



    <section class="projects__partner bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">{{ $txtScetion3heading}}</h2>
                        <p class="text-center text-capitalize">
                            {{ $txtScetion3tagline }}
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="projects__partner-logo">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <img src="images/partner-logo6.png" alt="" class="img-fluid">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/partner-logo7.png" alt="" class="img-fluid">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/partner-logo8.png" alt="" class="img-fluid">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/partner-logo1.png" alt="" class="img-fluid">
                            </li>
                            <li class="list-inline-item">
                                <img src="images/partner-logo5.png" alt="" class="img-fluid">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section id="statistic" class="statistic-section one-page-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-building fa-2x stats-icon"></i>
                        <h2 class="timer count-title count-number">500+</h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Properties Sold</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-users fa-2x stats-icon"></i>
                        <h2 class="timer count-title count-number">1200+</h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Happy Clients</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-briefcase fa-2x stats-icon"></i>
                        <h2 class="timer count-title count-number">15</h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Years in Business</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="counter">
                        <i class="fa fa-home fa-2x stats-icon"></i>
                        <h2 class="timer count-title count-number">30+</h2>
                        <div class="stats-line-black"></div>
                        <p class="stats-text">Ongoing Projects</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONIAL -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">
                            {{ $txtScetion5heading }}
                        </h2>
                        <p class="text-center text-capitalize">
                            {{  $txtScetion5tagline }}
                        </p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="testimonial owl-carousel owl-theme">
                <!-- TESTIMONIAL -->
                <div class="item testimonial__block">
                    <div class="testimonial__block-card bg-reviews">
                        <p>
                            Thank you walls property help me, choice dream home We were impressed with the build
                            quality, Plus they are competitively priced.
                        </p>
                    </div>
                    <div class="testimonial__block-users">
                        <div class="testimonial__block-users-img">
                            <img src="{{asset('images/team1.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="testimonial__block-users-name">
                            Hammad <br>
                            <span>owner, digital agency</span>
                        </div>
                    </div>
                </div>
                <!-- END TESTIMONIAL -->
                <!-- TESTIMONIAL -->
                <div class="item testimonial__block">
                    <div class="testimonial__block-card bg-reviews">
                        <p>
                            Thank you walls property help me, choice dream home We were impressed with the build
                            quality, Plus they are competitively priced.
                        </p>
                    </div>
                    <div class="testimonial__block-users">
                        <div class="testimonial__block-users-img">
                            <img src="{{asset('images/team2.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="testimonial__block-users-name">
                            RIDWAN <br>
                            <span>owner, digital agency</span>
                        </div>
                    </div>
                </div>
                <!-- END TESTIMONIAL -->
                <!-- TESTIMONIAL -->
                <div class="item testimonial__block">
                    <div class="testimonial__block-card bg-reviews">
                        <p>
                            Thank you walls property help me, choice dream home We were impressed with the build
                            quality, Plus they are competitively priced.
                        </p>
                    </div>
                    <div class="testimonial__block-users">
                        <div class="testimonial__block-users-img">
                            <img src="{{asset('images/team4.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="testimonial__block-users-name">
                            Aaliyah <br>
                            <span>owner, digital agency</span>
                        </div>
                    </div>
                </div>
                <!-- END TESTIMONIAL -->
                <!-- TESTIMONIAL -->
                <div class="item testimonial__block">
                    <div class="testimonial__block-card bg-reviews">
                        <p>
                            Thank you walls property help me, choice dream home We were impressed with the build
                            quality, Plus they are competitively priced.
                        </p>
                    </div>
                    <div class="testimonial__block-users">
                        <div class="testimonial__block-users-img">
                            <img src="{{asset('images/team2.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="testimonial__block-users-name">
                            Illyan <br>
                            <span>owner, digital agency</span>
                        </div>
                    </div>
                </div>
                <!-- END TESTIMONIAL -->
                <!-- TESTIMONIAL -->
                <div class="item testimonial__block">
                    <div class="testimonial__block-card bg-reviews">
                        <p>
                            Thank you walls property help me, choice dream home We were impressed with the build
                            quality, Plus they are competitively priced.
                        </p>
                    </div>
                    <div class="testimonial__block-users">
                        <div class="testimonial__block-users-img">
                            <img src="{{asset('images/team4.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="testimonial__block-users-name">
                            Ridwan <br>
                            <span>owner, digital agency</span>
                        </div>
                    </div>
                </div>
                <!-- END TESTIMONIAL -->

            </div>
        </div>
    </section>
    <!-- END TESTIMONIAL -->


    <!-- CALL TO ACTION -->
    <!-- <section class="cta-v1 py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <h2 class="text-uppercase text-white">Looking To Sell Or Rent Your Property?</h2>
                        <p class="text-capitalize text-white">We Will Assist You In The Best And Comfortable Property
                            Services
                            For You
                        </p>

                    </div>
                    <div class="col-lg-3">
                        <a href="#" class="btn btn-light text-uppercase ">request a quote
                            <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- END CALL TO ACTION -->
@endsection
