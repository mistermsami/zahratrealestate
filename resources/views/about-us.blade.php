@extends('layout.layout')
@php
    $pagename = 'About Us';
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


    <!-- ABOUT -->
    <section class="home__about bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title__leading">
                        <h6 class="text-uppercase" style="color: #11572E;">trusted By thousands</h6>
                        <h2 class="text-capitalize">why choose use?</h2>
                        <p>
                            The first step in selling your property is to get a valuation from local experts. They will
                            inspect your home and take into account its unique features, the area and market conditions
                            before providing you with the most accurate valuation.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <a href="#" class="btn mt-3 text-capitalize" style="background-color: #11572E; color: #fff;"> read more
                            <i class="fa fa-angle-right ml-3 "></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__image">
                        <div class="about__image-top">
                            <div class="about__image-top-hover">
                                <img src="images/about-us.jpg" alt="" class="img-fluid">
                            </div>

                        </div>
                        <div class="about__image-bottom">
                            <div class="about__image-bottom-hover">
                                <img src="images/about-us1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->



    <section class="projects__partner ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">our other successful projects</h2>
                        <p class="text-center text-capitalize">brand partners successful projects trusted many clients
                            building real estate since 1985 we experiance </p>
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

    <!-- OUR TEAM -->
    <section class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">
                            our Team
                        </h2>
                        <p class="text-center text-capitalize">see our top of the month teams</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="wrap-agent">
    <div class="team-member">
        <div class="team-img">
            <img alt="team member" class="img-fluid w-100" src="images/team1.jpg">
        </div>
        <div class="team-hover">
            <div class="desk">
                <h5>
                    Hi There !
                </h5>
                <p>
                    I am Senior Agent Property
                </p>
                <a class="btn" href="#" style="background-color: #11572E ;color: #fff;">
                    Agent Profile
                </a>
            </div>
            <ul class="list-inline s-link mb-0">
                <li class="list-inline-item">
                    <a href="#">
                        <i class="fa fa-facebook">
                        </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                        <i class="fa fa-twitter">
                        </i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#">
                        <i class="fa fa-google-plus">
                        </i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="team-title">
            <h6>
                Hammad
            </h6>
            <span>
                Agent Real Estate
            </span>
        </div>
    </div>
</div>
                </div>
                <div class="col-md-4">
                    <div class="wrap-agent">
                        <div class="team-member">
                            <div class="team-img">
                                <img alt="team member" class="img-fluid w-100" src="images/team4.jpg">
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <h5>
                                        Hi There !
                                    </h5>
                                    <p>
                                        I am Senior Agent Property
                                    </p>
                                    <a class="btn " href="agentDetail.html" style="background-color: #11572E; color: #fff;">
                                        Agent Profile
                                    </a>
                                </div>
                                <ul class="list-inline s-link mb-0">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fa fa-google-plus">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-title">
                                <h5>
                                    Hamnah
                                </h5>
                                <span>
                                    Agent Real Estate
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wrap-agent">
                        <div class="team-member">
                            <div class="team-img">
                                <img alt="team member" class="img-fluid w-100" src="images/team2.jpg">
                            </div>
                            <div class="team-hover">
                                <div class="desk">
                                    <h5>
                                        Hi There !
                                    </h5>
                                    <p>
                                        I am Senior Agent Property
                                    </p>
                                    <a class="btn " href="#" style="background-color: #11572E; color: #fff;">
                                        Agent Profile
                                    </a>
                                </div>
                                <ul class="list-inline s-link mb-0">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fa fa-facebook">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fa fa-twitter">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <i class="fa fa-google-plus">
                                            </i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="team-title">
                                <h5>
                                    Mubashir
                                </h5>
                                <span>
                                    Agent Real Estate
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
