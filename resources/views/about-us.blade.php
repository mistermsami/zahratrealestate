@extends('layout.layout')
@php
    $pagename = 'About Us';


if (session()->get('locale') == 'ar'){
    $pagename = 'معلومات عنا';
    $sec1subheading = 'موثوق به من قبل الآلاف';
    $sec1heading = 'لماذا تختار الاستخدام؟';
    $sec1para1 = 'في زهرة الشمال العقارية، لا نبيع العقارات فحسب، بل نقدم تجارب مبنية على الثقة والابتكار والتميز. إليكم أسباب اختيار عملائنا لنا كشريك عقاري مفضل في قطر:';
    $sec1li1b = 'اسم موثوق به في مجال العقارات الفاخرة';
    $sec1li1 = 'رؤيتنا ترتكز على إرساء معايير جديدة في هذا القطاع. ومع سمعة متنامية من الموثوقية والنزاهة، نفخر بكوننا أحد أبرز مقدمي الخدمات العقارية في قطر.';
    $sec1li2b = 'عقارات مميزة، معايير استثنائية';
    $sec1li2 = 'نقدم لكم مجموعة مختارة بعناية من العقارات السكنية والتجارية عالية الجودة. يعكس كل عرض التزامنا بالفخامة والرقي والقيمة الدائمة.';
    $sec1li3b = 'نهج يركز على العميل';
    $sec1li3 = 'أهدافك هي أولويتنا. سواءً كنت ترغب بشراء منزل أحلامك، أو توسيع محفظتك الاستثمارية، أو إطلاق مشروعك الجديد، نُصمم خدماتنا لتناسب احتياجاتك وطموحاتك الفريدة.';

    $sec2mainheading = 'رسالتنا ورؤيتنا';
    $sec2heading = 'رؤية';
    $sec2para1 = 'أن نكون المزود العقاري الأكثر ثقةً وتميزًا في قطر، ونضع معايير جديدة في الفخامة والابتكار ورضا العملاء. نهدف إلى إعادة تعريف قطاع العقارات من خلال تقديم عقارات حصرية وعالية الجودة وتجارب عملاء استثنائية.';
    $sec2para2 = 'نتطلع إلى مستقبلٍ تُصبح فيه شركة زهرة الشمال العقارية رمزًا للتميز والرقي، متجاوزةً التوقعات باستمرار من خلال أحدث التقنيات، وخدمات عالمية المستوى، وفهمٍ عميق لديناميكيات السوق. ومن خلال توسيع محفظتنا الاستثمارية وتعزيز علاقاتنا مع عملائنا، نطمح إلى الريادة في مجال حلول العقارات الفاخرة.';

    $sec3heading = 'مهمتنا';
    $sec3para1 = 'نحن ملتزمون بتقديم حلول عقارية استثنائية تلبي احتياجات عملائنا المتنوعة. رسالتنا هي توفير عقارات سكنية وتجارية عالمية المستوى، مدفوعةً بالاحترافية والنزاهة والشغف بالتميز.';
    $sec3para2 = 'في صميم رسالتنا، يكمن التزامنا ببناء علاقات طويلة الأمد مع عملائنا، وضمان شفافية وسلاسة وفعالية كل معاملة. نولي الابتكار الأولوية، ونستكشف باستمرار سبلًا جديدة لتحسين خدماتنا وتقديم حلول عقارية متطورة. يضمن نهجنا المُركّز على عملائنا حصول كل فرد على توجيه مُخصّص، سواءً كان يشتري منزلًا، أو يستثمر في العقارات، أو يوسّع أعماله.';
}
else{
    $pagename = 'About Us';
    $sec1subheading = 'Trusted by thousands';
    $sec1heading = 'Why Choose Us?';
    $sec1para1 = 'At Zahrat Al Shamal Real Estate, we don’t just sell properties—we deliver experiences built on trust, innovation, and excellence. Here’s why clients choose us as their preferred real estate partner in Qatar:';
    $sec1li1b = 'Trusted Name in Luxury Real Estate';
    $sec1li1 = 'Our vision is built on setting new standards in this industry. With a growing reputation for reliability and integrity, we are proud to be recognized as one of Qatar’s most distinguished real estate providers.';
    $sec1li2b = 'Premium Properties, Exceptional Standards';
    $sec1li2 = 'We offer a carefully curated selection of high-quality residential and commercial
    properties. Each listing reflects our commitment to luxury, sophistication, and lasting value.';
    $sec1li3b = 'Client-Centric Approach';
    $sec1li3 = 'Your goals are our priority. Whether you’re purchasing a dream home, expanding your investment portfolio, or launching a new business location, we tailor our services to fit your unique needs and ambitions.';
    $sec2mainheading = 'Our Mission & Vision';
    $sec2heading = 'Vision';
    $sec2para1 = 'To be Qatar’s most trusted and distinguished real estate provider, setting new benchmarks in luxury, innovation, and client satisfaction. We aim to redefine real estate by offering exclusive, high- quality properties and superior customer experiences.';
    $sec2para2 = 'We envision a future where Zahrat Al Shamal Real
    Estate is synonymous with excellence and prestige, consistently exceeding expectations through cutting-edge technology, world-class service, and a keen understanding of market dynamics. By expanding our portfolio and strengthening our relationships with clients, we aspire to lead the industry in luxury real estate solutions.';
    $sec3heading = 'Mission';
    $sec3para1 = 'We are committed to delivering exceptional real estate solutions that cater to
    our diverse client base. Our mission is to provide world-class residential and commercial properties, driven by
    professionalism, integrity, and a passion for excellence.';
    $sec3para2 = 'At the heart of our mission lies a commitment to building long-term relationships with our clients, ensuring that every transaction is transparent, seamless, and rewarding. We prioritize innovation, constantly exploring new ways to enhance our services and provide cutting-edge property solutions. Our client-focused approach ensures that every individual receives personalized guidance, whether they are purchasing a home, investing in real estate, or expanding their business operations.';
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="title__leading">
                        <h6 class="text-uppercase" style="color: #11572E;">{{ $sec1subheading }}</h6>
                        <h2 class="text-capitalize">{{ $sec1heading }}</h2>
                        <p>
                            {{ $sec1para1 }}
                        </p>
                        <ul>
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
                        </ul>
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
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="title__head mb-5">
                        <h2 class="text-center text-capitalize">{{ $sec2mainheading }}</h2>
                        {{-- <p class="text-center text-capitalize">brand partners successful projects trusted many clients
                            building real estate since 1985 we experiance </p> --}}
                    </div>
                </div>
            </div>
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
                <div class="col-lg-6">
                    <div class="title__leading">
                        {{-- <h6 class="text-uppercase" style="color: #11572E;">trusted By thousands</h6> --}}
                        <h2 class="text-capitalize">{{ $sec2heading }}</h2>
                        <p>
                            {{ $sec2para1}}
                        </p>
                        <p>
                            {{ $sec2para2 }}
                        </p>
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
                <div class="col-lg-6">
                    <div class="title__leading">
                        {{-- <h6 class="text-uppercase" style="color: #11572E;">trusted By thousands</h6> --}}
                        <h2 class="text-capitalize">{{ $sec3heading }}</h2>
                        <p>
                            {{ $sec3para1}}
                        </p>
                        <p>
                            {{ $sec3para2 }}
                        </p>
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
