@extends('layout.layout')
@php
    $pagename = 'Services';


if (session()->get('locale') == 'ar'){
    $pagename = 'خدمات';
    $sec1subheading = 'خدمات يمكنك الوثوق بها';
    $sec1heading = 'بيع وتأجير المساكن الفاخرة';
    $sec1para1 = 'اكتشف تشكيلةً راقيةً من الفلل والبنتهاوسات والشقق والعقارات المطلة على الواجهة البحرية، المصممة لحياةٍ راقية. يساعدك فريقنا في العثور على المنزل المثالي الذي يناسب أسلوبك واحتياجاتك وأهدافك الاستثمارية.';

    // $sec2mainheading = 'رسالتنا ورؤيتنا';
    $sec2heading = 'حلول العقارات التجارية';
    $sec2para1 = 'نوفر مساحات مكتبية فاخرة، وعقارات تجارية، واستثمارات تجارية في مواقع مميزة في قطر. سواءً كنت تُطلق مشروعًا جديدًا أو تُوسّع أعمالك، يضمن لك مستشارونا الخبراء العثور على العقار التجاري المثالي.';

    $sec3heading = 'إدارة الممتلكات';
    $sec3para1 = 'يتولى فريقنا الخبير إدارة التأجير والصيانة وعلاقات المستأجرين وتحسين الاستثمار، مما يضمن الحفاظ على قيمة عقارك وجاذبيته. نوفر لك إدارة عقارات سهلة ومريحة لتتمكن من التركيز على تعظيم عوائدك.';

    $sec4heading = 'استشارات الاستثمار';
    $sec4para1 = 'نقدم توجيهات استراتيجية للاستثمارات العقارية عالية العوائد، ونساعد المستثمرين على الاستفادة من سوق قطر المتنامي. يُجري فريقنا تحليلات شاملة للسوق وتقييمات للمخاطر لضمان فرص استثمارية مربحة.';

    $sec5heading = 'تطوير وتسويق المشاريع';
    $sec5para1 = 'من الفكرة إلى التنفيذ، نطور ونسوّق وندير مشاريع عقارية راقية بدقة وخبرة. خدماتنا الشاملة لإدارة المشاريع تضمن إطلاقًا ناجحًا للعقارات وحضورًا قويًا في السوق.';
}
else{
    $pagename = 'Services';
    $sec1subheading = 'Services You Can Trust';
    $sec1heading = 'Luxury Residential Sales & Leasing';
    $sec1para1 = 'Discover an elite selection of luxury villas, penthouses, apartments, and waterfront properties designed for refined living. Our team assists in finding the perfect home that matches your style, needs, and investment goals.';

    // $sec2mainheading = 'Our Mission & Vision';
    $sec2heading = 'Commercial Real Estate Solutions';
    $sec2para1 = 'We offer premium office spaces, retail properties, and commercial investments in prime locations across Qatar. Whether you are launching a startup or expanding your business, our expert advisors ensure you find the ideal commercial property.';

    $sec3heading = 'Property Management';
    $sec3para1 = 'Our expert team handles leasing, maintenance, tenant relations, and investment optimization, ensuring your property maintains its value and appeal. We provide hassle-free property management so you can focus on maximizing your returns.';

    $sec4heading = 'Investment Consultancy';
    $sec4para1 = 'We provide strategic guidance on high-return real estate investments, helping investors capitalize on Qatar’s growing market. Our team conducts thorough market analysis and risk assessments to ensure profitable investment opportunities.';

    $sec5heading = 'Project Development & Marketing';
    $sec5para1 = 'From concept to completion, we develop, market, and manage high-end real estate projects with precision and expertise. Our end-to-end project management services guarantee successful property launches and high market visibility.';
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


    <!-- ABOUT -->
    <section class="home__about bg-light">
        <div class="container">
            <div class="row" >
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="title__leading">
                        <h6 class="text-uppercase" style="color: #11572E;">{{ $sec1subheading }}</h6>
                        <h2 class="text-capitalize">{{ $sec1heading }}</h2>
                        <p>
                            {{ $sec1para1 }}
                        </p>
                        {{-- <ul>
                            <li>
                                <b>{{ $sec1li1b }}</b>
                                <br>
                                {{ $sec1li1 }}
                            </li>
                            <li>
                                <b>{{ $sec1li2b }}</b>
                                <br>
                                {{ $sec1li2}}
                            </li>
                            <li>
                                <b>{{ $sec1li3b }}</b>
                                <br>
                                {{ $sec1li3}}
                            </li>
                        </ul> --}}
                        {{-- <a href="#" class="btn mt-3 text-capitalize" style="background-color: #11572E; color: #fff;"> read more
                            <i class="fa fa-angle-right ml-3 "></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__image">
                        <div class="about__image-top">
                            <div class="about__image-top-hover">
                                <img src="{{asset('images/about-us.jpg')}}" alt="" class="img-fluid">
                            </div>

                        </div>
                        <div class="about__image-bottom">
                            <div class="about__image-bottom-hover">
                                <img src="{{asset('images/about-us1.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->



    <section class="home__about mb-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__image">
                        <div class="about__image-top">
                            <div class="about__image-top-hover">
                                <img src="{{asset('images/about-us.jpg')}}" alt="" class="img-fluid">
                            </div>

                        </div>
                        <div class="about__image-bottom">
                            <div class="about__image-bottom-hover">
                                <img src="{{asset('images/about-us1.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="title__leading">
                        {{-- <h6 class="text-uppercase" style="color: #11572E;">trusted By thousands</h6> --}}
                        <h2 class="text-capitalize">{{ $sec2heading }}</h2>
                        <p>
                            {{ $sec2para1}}
                        </p>
                        {{-- <p>
                            {{ $sec2para2 }}
                        </p> --}}
                        {{-- <a href="#" class="btn mt-3 text-capitalize" style="background-color: #11572E; color: #fff;"> read more
                            <i class="fa fa-angle-right ml-3 "></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="home__about bg-light mt-3 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  d-flex align-items-center">
                    <div class="title__leading">
                        {{-- <h6 class="text-uppercase" style="color: #11572E;">trusted By thousands</h6> --}}
                        <h2 class="text-capitalize">{{ $sec3heading }}</h2>
                        <p>
                            {{ $sec3para1}}
                        </p>
                        {{-- <p>
                            {{ $sec3para2 }}
                        </p> --}}
                        {{-- <a href="#" class="btn mt-3 text-capitalize" style="background-color: #11572E; color: #fff;"> read more
                            <i class="fa fa-angle-right ml-3 "></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__image">
                        <div class="about__image-top">
                            <div class="about__image-top-hover">
                                <img src="{{asset('images/about-us.jpg')}}" alt="" class="img-fluid">
                            </div>

                        </div>
                        <div class="about__image-bottom">
                            <div class="about__image-bottom-hover">
                                <img src="{{asset('images/about-us1.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->
    <section class="home__about mb-3 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__image">
                        <div class="about__image-top">
                            <div class="about__image-top-hover">
                                <img src="{{asset('images/about-us.jpg')}}" alt="" class="img-fluid">
                            </div>

                        </div>
                        <div class="about__image-bottom">
                            <div class="about__image-bottom-hover">
                                <img src="{{asset('images/about-us1.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="title__leading">
                        {{-- <h6 class="text-uppercase" style="color: #11572E;">trusted By thousands</h6> --}}
                        <h2 class="text-capitalize">{{ $sec4heading }}</h2>
                        <p>
                            {{ $sec4para1}}
                        </p>
                        {{-- <p>
                            {{ $sec4para2 }}
                        </p> --}}
                        {{-- <a href="#" class="btn mt-3 text-capitalize" style="background-color: #11572E; color: #fff;"> read more
                            <i class="fa fa-angle-right ml-3 "></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section class="home__about bg-light mt-3 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  d-flex align-items-center">
                    <div class="title__leading">
                        {{-- <h6 class="text-uppercase" style="color: #11572E;">trusted By thousands</h6> --}}
                        <h2 class="text-capitalize">{{ $sec5heading }}</h2>
                        <p>
                            {{ $sec5para1}}
                        </p>
                        {{-- <p>
                            {{ $sec5para2 }}
                        </p> --}}
                        {{-- <a href="#" class="btn mt-3 text-capitalize" style="background-color: #11572E; color: #fff;"> read more
                            <i class="fa fa-angle-right ml-3 "></i></a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__image">
                        <div class="about__image-top">
                            <div class="about__image-top-hover">
                                <img src="{{asset('images/about-us.jpg')}}" alt="" class="img-fluid">
                            </div>

                        </div>
                        <div class="about__image-bottom">
                            <div class="about__image-bottom-hover">
                                <img src="{{asset('images/about-us1.jpg')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT -->

@endsection
