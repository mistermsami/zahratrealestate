<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Zahrat Alshamal Real Estate">
    <!-- <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com"> -->


    <link rel="stylesheet" href="./css/faq.css">
    <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"
/>
<title>Zahrat Alshamal Real Estate</title>

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

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="theme-color" content="#3454d1">
    <link href="./css/styles.css?fd365619e86ad9137a29" rel="stylesheet">

</head>

<body>



    <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
        <div class="container">
            <a class="navbar-brand" href="#" style="padding: 0;">
                <img src="images/zrs_logo_simple-0.png" alt="" style="width: 80px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main_nav99">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link active" href="./index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./listing-style-v5.html">Property Listing</a></li>
                    <li class="nav-item"><a class="nav-link" href="./agent.html">Agents</a></li>
                    <li class="nav-item"><a class="nav-link" href="./blog.html">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="./about-us.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="./contact.html">Contact</a></li>
                </ul>
                <ul class="navbar-nav ">
                    <li>
                        <a href="./add-property.html" class="btn text-capitalize" style="background-color: #11572E; color: #fff;">
                            <i class="fa fa-plus-circle mr-1"></i> Add Property
                        </a>
                    </li>
                    <li class="navbar-nav" >
                        <a href="./login.html" class="lang-btn" style=" text-decoration: none; color: #11572E;">
                            Sign In
                        </a>
                    </li>
                    <li class="navbar-nav">
                        <button id="langToggle" class="lang-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10" fill="none" stroke="#11572E" stroke-width="2"/>
                                <line x1="12" y1="2" x2="12" y2="22" stroke="#11572E" stroke-width="2"/>
                                <line x1="2" y1="12" x2="22" y2="12" stroke="#11572E" stroke-width="2"/>
                            </svg>
                            <span id="langText">EN</span>
                        </button>
                    </li>


                </ul>
            </div>
        </div>
    </nav>




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
                        <img class="d-block w-100" src="images/pic1.jpg" alt="First slide">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="fadeInDown" data-delay=".2s" data-duration="1000ms"
                                                    class="text-white animated fadeInDown">
                                                    The #1 place for commercial
                                                    property</h2>
                                                <p data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms"
                                                    class="text-white animated fadeInUp">

                                                    Lorem ipsum dolor sit consectetur adipisicing elit. Laboriosam  recusandae
                                                </p>
                                                <a href="./contact.html" class="btn text-uppercase animated fadeInUp" style="background-color: #11572E; border-color: #11572E; color: #fff;">
                                                    Contact Us
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
                        <img class="d-block w-100" src="images/pic2.jpg" alt="Second slide">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="animated fadeInDown"
                                                    class="text-white animated fadeInDown">
                                                    The #1 place for commercial
                                                    property</h2>
                                                <p data-animation="animated fadeInUp"
                                                    class="text-white animated fadeInUp ">

                                                    Lorem ipsum dolor sit consectetur adipisicing elit. Laboriosam  recusandae
                                                </p>
                                                <a href="../PROPERTY/contact.html" class="btn text-uppercase animated fadeInUp" style="background-color: #11572E; border-color: #11572E; color: #fff;">
                                                    Contact Us
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
                        <img class="d-block w-100" src="images/pic3.jpg" alt="Third slide">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="animated fadeInDown"
                                                    class="text-white animated fadeInDown">
                                                    The #1 place for commercial
                                                    property</h2>
                                                <p data-animation="animated fadeInUp"
                                                    class="text-white animated fadeInUp ">

                                                    Lorem ipsum dolor sit consectetur adipisicing elit. Laboriosam  recusandae
                                                </p>
                                                <a href="../PROPERTY/contact.html" class="btn text-uppercase animated fadeInUp" style="background-color: #11572E; border-color: #11572E; color: #fff;">
                                                    Contact Us
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
                            <button class="btn  text-uppercase btn-block" style="background-color: #11572E; border-color: #11572E; color: #fff; border-radius: 5px;"> search <i
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


    <section class="wrap__heading bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">
                            most popular places
                        </h2>
                        <p class="text-center text-capitalize">find properties in these cities.</p>
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
                            featured properties
                        </h2>
                        <p class="text-center text-capitalize">handpicked exclusive properties by our team.</p>

                    </div>
                </div>
            </div>

            <!--=========================================
=            Section Gallery two            =
==========================================-->
            <div class="card__image-filter">
                <div class="filterizr-control">
                    <ul class="list-inline filterizr-filter">
    <li class="list-inline-item filtr-active btn-filter" data-filter="all"
        style="background-color: #11572E; border-color: #11572E; color: #fff;">
        All Property
    </li>
    <li class="list-inline-item btn-filter" data-filter="1"
        style="transition: background-color 0.3s; color: #000;"
        onmouseover="this.style.backgroundColor='#11572E'; this.style.color='#fff';"
        onmouseout="this.style.backgroundColor=''; this.style.color='#000';">
        Residential
    </li>
    <li class="list-inline-item btn-filter" data-filter="2"
        style="transition: background-color 0.3s; color: #000;"
        onmouseover="this.style.backgroundColor='#11572E'; this.style.color='#fff';"
        onmouseout="this.style.backgroundColor=''; this.style.color='#000';">
        Commercial
    </li>
    <li class="list-inline-item btn-filter" data-filter="4"
        style="transition: background-color 0.3s; color: #000;"
        onmouseover="this.style.backgroundColor='#11572E'; this.style.color='#fff';"
        onmouseout="this.style.backgroundColor=''; this.style.color='#000';">
        Land
    </li>
</ul>

                </div>
                <div class="row">
                    <div class="filtr-container">

                        <div class="col-md-6 col-lg-4 filtr-item" data-category="2, 4" data-title="">
                           <a href="propertyDetail.html">
                            <div class="card__image card__box-v1">
                                <div class="card__image-header h-250">

                                    <img src="images/beautiful-Apartment.jpg" alt="" class="img-fluid w100 img-transition" >
                                    <div class="info" style="background-color: #11572E"> for sale</div>
                                </div>
                                <div class="card__image-body">

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

                        <div class="col-md-6 col-lg-4 filtr-item" data-category="4" data-title="">
                            <div class="card__image card__box-v1">
                                <div class="card__image-header h-250">

                                    <img src="images/apart2.jpg" alt="" class="img-fluid w100 img-transition">
                                    <div class="info" style="background-color: #11572E"> for sale</div>
                                </div>
                                <div class="card__image-body">

                                    <h6 class="text-capitalize">
                                        Ample Apartment At Last Floor
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

                        <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-title="">
                            <div class="card__image card__box-v1">
                                <div class="card__image-header h-250">

                                    <img src="images/apart3.jpg" alt="" class="img-fluid w100 img-transition">
                                    <div class="info" style="background-color: #11572E"> for sale</div>
                                </div>
                                <div class="card__image-body">

                                    <h6 class="text-capitalize">
                                        Contemporary Apartment
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


                        <div class="col-md-6 col-lg-4 filtr-item" data-category="2, 4" data-title="">
                            <div class="card__image card__box-v1">
                                <div class="card__image-header h-250">

                                    <img src="images/apart4.jpg" alt="" class="img-fluid w100 img-transition">
                                    <div class="info" style="background-color: #11572E"> for sale</div>
                                </div>
                                <div class="card__image-body">

                                    <h6 class="text-capitalize">
                                        Family Home For Sale
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

                        <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-title="">
                            <div class="card__image card__box-v1">
                                <div class="card__image-header h-250">
                                    <img src="images/apart6.jpg" alt="" class="img-fluid w100 img-transition">
                                    <div class="info" style="background-color: #11572E"> for sale</div>
                                </div>
                                <div class="card__image-body">

                                    <h6 class="text-capitalize">
                                        Luxury Villa With Pool
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

                        <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-title="">
                            <div class="card__image card__box-v1">
                                <div class="card__image-header h-250">
                                    <img src="images/apart7.jpg" alt="" class="img-fluid w100 img-transition">
                                    <div class="info" style="background-color: #11572E"> for sale</div>
                                </div>
                                <div class="card__image-body">
                                    <h6 class="text-capitalize">
                                        184 Lexington Avenue
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
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>



    <section class="projects__partner bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">our partners</h2>
                        <p class="text-center text-capitalize">Brand Partners Successful Projects Trusted Many Clients
                            Real Estate</p>
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
                            what people says
                        </h2>
                        <p class="text-center text-capitalize">people says about walls property.</p>
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
                            <img src="images/team1.jpg" alt="" class="img-fluid">
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
                            <img src="images/team2.jpg" alt="" class="img-fluid">
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
                            <img src="images/team4.jpg" alt="" class="img-fluid">
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
                            <img src="images/team2.jpg" alt="" class="img-fluid">
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
                            <img src="images/team4.jpg" alt="" class="img-fluid">
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

    <!-- Footer  -->
    <footer>
        <div class="wrapper__footer bg-theme-footer" style="background-color: #11572E;">
            <div class="container">
                <div class="row">
                    <!-- ADDRESS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <figure>
                                <img src="images/1ftlogo.png" alt="" class="logo-footer" >
                            </figure>
                            <!-- <p>
                                Zahrat Alshamal Real Estate is a trusted name in the property market, offering expert services for buying, selling, and investing in real estate. Our team is dedicated to providing reliable solutions with a focus on customer satisfaction and integrity.

                            </p> -->

                            <ul class="list-unstyled mb-0 mt-1">
                                <li> <b> <i class="fa fa-map-marker"></i></b><span>Address: Office 01, 4th Floor, Al Qamra Holding Group Building(53), Al Difaaf Street (893), Alsaad

                                    P.O. Box 31551</span> </li>
                                <li> <b><i class="fa fa-phone-square"></i></b><span>+97470816051</span> </li>
                                <li> <b><i class="fa fa-headphones"></i></b><span>admin@zahratalshamal.com</span> </li>
                                <li> <b><i class="fa fa-clock-o"></i></b><span>Mon - Sun / 9:00AM - 8:00PM</span> </li>
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

                                    <button class="btn btn-block text-capitalize" type="button" style="background-color: goldenrod;">subscribe


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
    <script src="./js/index.bundle.js?fd365619e86ad9137a29"></script>
    <script src="./js/faq.js"></script>
</body>

</html>
