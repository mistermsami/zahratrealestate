@extends('layout.layout')
@php
    $pagename = 'Contact Us';
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
<style>
    .btn-social.instagram{
        background-color: #E1306C;
    }
    .btn-social.tiktok{
        background-color: #000;
    }
</style>
    <div class="clearfix"></div>


    <section class="wrap__contact-map" style="margin-bottom: 30px;">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29056.940011734676!2d51.476765167253755!3d25.276987219097847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e45c5c4c51c7a85%3A0x57776dc1e8abf08b!2sQatar!5e0!3m2!1sen!2sqa!4v1619508519257!5m2!1sen!2sqa"
                width="100%"
                height="400"
                style="border:0; border-radius: 8px;"
                allowfullscreen=""
                loading="lazy">
              </iframe>
            </div>
          </div>
        </div>
      </section>

    <!-- Form contact -->
    <section class="wrap__contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h5>contact us</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your name <span class="required"></span></label>
                                <input type="text" class="form-control" name="name" required="">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Your email <span class="required"></span></label>
                                <input type="email" class="form-control" name="email" required="">

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>website <span class="required"></span></label>
                                <input type="text" class="form-control" name="website" required="">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Subject <span class="required"></span></label>
                                <input type="text" class="form-control" name="subject" required="">

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Your message </label>
                                <textarea class="form-control" rows="9" name="message"></textarea>
                            </div>
                            <div class="form-group float-right mb-0">
                                <button type="submit" class="btn  btn-contact" style="background-color: #11572E; color: #fff;">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="wrap__contact-open-hours">
                        <h5 class="text-capitalize">open hours</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center justify-content-between"><span>Monday - Thrusday</span>
                                <span>09 AM - 06 PM</span></li>
                            <li class="d-flex align-items-center justify-content-between"><span>Friday</span> <span>Closed</span></li>
                            <li class="d-flex align-items-center justify-content-between"><span>Saturday</span>
                                <span>09 AM - 03 PM</span></li>
                        </ul>
                    </div>
                    <div class="wrap__contact-open-hours mt-4">
                        <h5 class="text-capitalize">Contact Details</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center justify-content-between"><span><b>Phone:&nbsp;&nbsp;</b> +97470816051</span></li>
                            <li class="d-flex align-items-center justify-content-between"><span><b>Email:&nbsp;&nbsp;</b> admin@zahratalshamal.com</span></li>
                            <li class="d-flex align-items-center justify-content-between"><span><b>Adderss:&nbsp;&nbsp;</b>Office 01, 4th Floor, Al Qamra Holding Group Building(53), Al Difaaf Street (893), Alsaad P.O. Box 31551</span></li>
                        </ul>
                    </div>
                    {{-- <h5>Info location</h5> --}}
                    <div class="wrap__contact-form-office">



                        <div class="social__media">
                            <h5>find us</h5>
                            <ul class="list-inline">

                                <li class="list-inline-item">
                                    <a href="{{url ('https://www.facebook.com/share/19ZTqSR91P/?mibextid=wwXIfr')}}"  target="_blank" class="btn btn-social rounded text-white facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{url ('https://www.instagram.com/zahrat_al_shamal_real_estate/')}}"  target="_blank" class="btn btn-social rounded text-white instagram">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{url ('https://wa.me/+97470816051')}}" target="_blank" class="btn btn-social rounded text-white whatsapp">
                                        <i class="fa fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{url ('https://www.tiktok.com/@zahrat_al_shamal')}}"  target="_blank" class="btn btn-social rounded text-white tiktok">
                                        <i class="fa fa-tumblr"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{url ('https://www.linkedin.com/company/zahratalshamal/')}}"  target="_blank" class="btn btn-social rounded text-white linkedin">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Form contact  -->



    <div class="faq">
        <div class="accordion__wrapper">
            <h1 class="accordion__title">Frequently Asked Questions</h1>

            <!-- Accordion 1 -->
            <div class="accordion">
                <div class="accordion__header">
                    <h2 class="accordion__question">What is real estate?</h2>
                    <span class="accordion__icon">
                        <i id="accordion-icon" class="ri-add-line"></i>
                    </span>
                </div>
                <div class="accordion__content">
                    <p class="accordion__answer">Real estate refers to land, buildings, and natural resources like water and minerals. It can be residential, commercial, industrial, or agricultural.</p>
                </div>
            </div>

            <!-- Accordion 2 -->
            <div class="accordion">
                <div class="accordion__header">
                    <h2 class="accordion__question">How can I buy property?</h2>
                    <span class="accordion__icon">
                        <i id="accordion-icon" class="ri-add-line"></i>
                    </span>
                </div>
                <div class="accordion__content">
                    <p class="accordion__answer">To buy property, start by determining your budget, researching the market, and consulting a licensed real estate agent. Once you find a property, you can negotiate terms and complete the transaction through a legal contract.</p>
                </div>
            </div>

            <!-- Accordion 3 -->
            <div class="accordion">
                <div class="accordion__header">
                    <h2 class="accordion__question">What are the types of real estate investments?</h2>
                    <span class="accordion__icon">
                        <i id="accordion-icon" class="ri-add-line"></i>
                    </span>
                </div>
                <div class="accordion__content">
                    <p class="accordion__answer">Real estate investments include residential properties, commercial properties, industrial properties, and real estate investment trusts (REITs). Each has unique benefits and risks.</p>
                </div>
            </div>

            <!-- Accordion 4 -->
            <div class="accordion">
                <div class="accordion__header">
                    <h2 class="accordion__question">What should I consider before renting a property?</h2>
                    <span class="accordion__icon">
                        <i id="accordion-icon" class="ri-add-line"></i>
                    </span>
                </div>
                <div class="accordion__content">
                    <p class="accordion__answer">Before renting a property, consider its location, amenities, rental cost, lease terms, and proximity to essential services like schools, markets, and transportation.</p>
                </div>
            </div>

            <!-- Accordion 5 -->
            <div class="accordion">
                <div class="accordion__header">
                    <h2 class="accordion__question">How can I sell my property?</h2>
                    <span class="accordion__icon">
                        <i id="accordion-icon" class="ri-add-line"></i>
                    </span>
                </div>
                <div class="accordion__content">
                    <p class="accordion__answer">To sell your property, determine its market value, prepare it for viewings, and list it with a reputable real estate agency. Marketing and negotiation skills are key to getting the best price.</p>
                </div>
            </div>
        </div>
    </div>

@endsection
