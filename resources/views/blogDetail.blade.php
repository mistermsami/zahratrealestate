@extends('layout.layout')
@php
    $pagenamee = 'Blog Single';

    $translator = new \App\Services\TranslationService();
    if (session()->get('locale') == 'ar') {
        $pagename = $translator->translate($pagenamee, 'ar');
        $blogTitle = $translator->translate($blog->title, 'ar');
        $blogDesc1 = $translator->translate($blog->description1, 'ar');
        $blogQuote1 = $translator->translate($blog->qoute1, 'ar');
        $blogDesc11 = $translator->translate($blog->description11, 'ar');
        $blogDesc2 = $translator->translate($blog->description2, 'ar');
        $blogQuote2 = $translator->translate($blog->qoute2, 'ar');
        $blogDesc22 = $translator->translate($blog->description22, 'ar');
        $blogDesc3 = $translator->translate($blog->description3, 'ar');
        $blogQuote3 = $translator->translate($blog->qoute3, 'ar');
        $blogDesc33 = $translator->translate($blog->description33, 'ar');
        $txtTags = $translator->translate('tags', 'ar');
        $txtPostedon = $translator->translate('Posted on', 'ar');
        $txtCategory = $translator->translate('category', 'ar');
    } else {
        $pagename = $pagenamee;
        $blogTitle = $blog->title;
        $blogDesc1 = $blog->description1;
        $blogQuote1 = $blog->qoute1;
        $blogDesc11 = $blog->description11;
        $blogDesc2 = $blog->description2;
        $blogQuote2 = $blog->qoute2;
        $blogDesc22 = $blog->description22;
        $blogDesc3 = $blog->description3;
        $blogQuote3 = $blog->qoute3;
        $blogDesc33 = $blog->description33;
        $txtTags = 'tags';
        $txtPostedon = 'Posted on';
        $txtCategory = 'category';
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single__blog-detail">
                        <h1>
                            {{ $blogTitle }}
                        </h1>

                        <div class="single__blog-detail-info">
                            <ul class="list-inline">
                                {{-- <li class="list-inline-item">
                                    <figure class="image-profile">
                                        <img src="{{asset('images/eight.jpg')}}" class="img-fluid" alt="">
                                    </figure>
                                </li> --}}
                                <li class="list-inline-item">

                                    <span>
                                        {{ $txtPostedon}}:
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-dark text-capitalize ml-1">
                                        {{ $blog->created_at->format('F j, Y') }} - {{ $blog->created_at->diffForHumans() }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <figure>
                            <img src="https://admin.zahratalshamal.com/blog_imgs/{{ $blog->image_path1 }}" class="img-fluid" style="width: 100%" alt="">
                            {{-- <img src="blog_imgs/{{$blog->image_path1}}" class="img-fluid" alt=""> --}}
                        </figure>

                        <p class="drop-cap" style="text-align: justify;">
                            {{ $blogDesc1 }}
                        </p>

                        <!-- BLOCKQUOTE -->
                        <blockquote class="block-quote">
                            <p>
                                {{ $blogQuote1 }}
                            </p>
                        </blockquote>
                        <!-- END BLOCKQUOTE -->

                        <p style="text-align: justify;">
                            {{ $blogDesc11 }}
                        </p>
                        <br>
                        <figure class="">
                            <img src="https://admin.zahratalshamal.com/blog_imgs/{{ $blog->image_path2 }}" class="img-fluid" style="width: 100%" alt="">
                            {{-- <img src="blog_imgs/{{$blog->image_path2}}" class="img-fluid" alt=""> --}}
                        </figure>

                        <p class="" style="text-align: justify;">
                            {{ $blogDesc2 }}
                        </p>

                        <!-- BLOCKQUOTE -->
                        <blockquote class="block-quote">
                            <p>
                                {{ $blogQuote2 }}
                            </p>
                        </blockquote>
                        <!-- END BLOCKQUOTE -->

                        <p style="text-align: justify;">
                            {{ $blogDesc22 }}
                        </p>
                        <br>
                        <figure class="">
                            <img src="https://admin.zahratalshamal.com/blog_imgs/{{ $blog->image_path3 }}" class="img-fluid" style="width: 100%" alt="">
                            {{-- <img src="blog_imgs/{{$blog->image_path3}}" class="img-fluid" alt=""> --}}
                        </figure>

                        <p class="" style="text-align: justify;">
                            {{ $blogDesc3 }}
                        </p>

                        <!-- BLOCKQUOTE -->
                        <blockquote class="block-quote">
                            <p>
                                {{ $blogQuote3 }}
                            </p>
                        </blockquote>
                        <!-- END BLOCKQUOTE -->

                        <p style="text-align: justify;">
                            {{ $blogDesc33 }}
                        </p>



                        <!-- TAGS -->
                        <div class="blog__tags mb-4">
                            <ul class="list-inline">

                                <li class="list-inline-item">
                                    <a href="#">
                                        #property
                                    </a>
                                </li>


                                <li class="list-inline-item">
                                    <a href="#">
                                        #real estate
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #listing
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #rent
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        #sell
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END TAGS -->

                        <!-- AUTHOR -->



                        <div class="clearfix"></div>

                        <!-- COMMENTS -->
                        {{-- <h6>3 Comments:</h6>
                        <div class="single__detail-features-review">
                            <div class="media mt-4">
                                <img class="mr-3 img-fluid rounded-circle" src="images/yman.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-0">Haider</h6>
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
                                            <img src="images/yman.jpg" alt="" class="img-fluid rounded-circle">
                                        </a>
                                        <div class="media-body">
                                            <h6 class="mt-0">Christine </h6>
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
                                <img class="mr-3 img-fluid rounded-circle" src="images/yman.jpg" alt="">
                                <div class="media-body">
                                    <h6 class="mt-0">Haider</h6>
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

                            <button type="submit" class="btn float-right " style="background-color: #11572E; color: #fff;"> Submit review <i
                                    class="fa fa-paper-plane ml-2"></i></button>
                            <!-- END COMMENT -->

                        </div> --}}
                        <!-- END COMMENTS -->
                    </div>
                </div>
                <!-- WIDGET BLOG -->
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <aside>
                            <div class="widget__sidebar">
                                <div class="widget__sidebar__header">
                                    <h6 class="text-capitalize">{{ $txtCategory}}</h6>
                                </div>
                                <div class="widget__sidebar__body">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                apartement
                                                <span class="badge badge-primary">14</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                villa
                                                <span class="badge badge-primary">4</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                family house
                                                <span class="badge badge-primary">2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                modern villa
                                                <span class="badge badge-primary">8</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                town house
                                                <span class="badge badge-primary">10</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="text-capitalize">
                                                office
                                                <span class="badge badge-primary">12</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </aside>
                        <aside>
                            <div class="widget__sidebar">
                                <div class="widget__sidebar__header">
                                    <h6 class="text-capitalize">{{ $txtTags}}</h6>
                                </div>
                                <div class="widget__sidebar__body">
                                    <div class="blog__tags p-0">
                                        <ul class="list-inline">

                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #property
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #wfh
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #estate
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #real estate
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #listing
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #rent
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #sell
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #family
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #happy
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #agents
                                                </a>
                                            </li>

                                            <li class="list-inline-item">
                                                <a href="#">
                                                    #promo
                                                </a>
                                            </li>


                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </aside>
                    </div>
                </div>
            </div>
            <!-- END WIDGET BLOG -->
        </div>
    </section>
    <!-- END LISTING LIST -->


@endsection
