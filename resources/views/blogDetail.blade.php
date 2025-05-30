@extends('layout.layout')
@php
    $pagenamee = 'Blog Single';

    $translator = new \App\Services\TranslationService();
    if (session()->get('locale') == 'ar') {
        $pagename = $translator->translate($pagenamee, 'ar');
        if (!empty($blog->title)) {
            $blogTitle = $translator->translate($blog->title, 'ar');
        } else {
            $blogTitle = '';
        }
        if (!empty($blog->description1)) {
            $blogDesc1 = $translator->translate($blog->description1, 'ar');
        } else {
            $blogDesc1 = '';
        }
        if (!empty($blog->qoute1)) {
            $blogQuote1 = $translator->translate($blog->qoute1, 'ar');
        } else {
            $blogQuote1 = '';
        }
        if (!empty($blog->description11)) {
            $blogDesc11 = $translator->translate($blog->description11, 'ar');
        } else {
            $blogDesc11 = '';
        }
        if (!empty($blog->description2)) {
            $blogDesc2 = $translator->translate($blog->description2, 'ar');
        } else {
            $blogDesc2 = '';
        }
        if (!empty($blog->qoute2)) {
            $blogQuote2 = $translator->translate($blog->qoute2, 'ar');
        } else {
            $blogQuote2 = '';
        }
        if (!empty($blog->description22)) {
            $blogDesc22 = $translator->translate($blog->description22, 'ar');
        } else {
            $blogDesc22 = '';
        }
        if (!empty($blog->description3)) {
            $blogDesc3 = $translator->translate($blog->description3, 'ar');
        } else {
            $blogDesc3 = '';
        }
        if (!empty($blog->qoute3)) {
            $blogQuote3 = $translator->translate($blog->qoute3, 'ar');
        } else {
            $blogQuote3 = '';
        }
        if (!empty($blog->description33)) {
            $blogDesc33 = $translator->translate($blog->description33, 'ar');
        } else {
            $blogDesc33 = '';
        }
        if (!empty($blog->created_at)) {
            $createdAt = $translator->translate($blog->created_at->format('F j, Y'), 'ar');
        } else {
            $createdAt = '';
        }
        if (!empty($blog->created_at)) {
            $Since = $translator->translate($blog->created_at->diffForHumans(), 'ar');
        } else {
            $Since = '';
        }
        $txtTags = $translator->translate('tags', 'ar');
        $txtPostedon = $translator->translate('Posted on', 'ar');
        $txtRecentBlogs = $translator->translate('Recent Blogs', 'ar');
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
        $createdAt = $blog->created_at->format('F j, Y');
        $Since = $blog->created_at->diffForHumans();
        $txtTags = 'tags';
        $txtPostedon = 'Posted on';
        $txtRecentBlogs = 'Recent Blogs';
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
                    <div class="single__blog-detail" style="text-align: start">
                        <h1>
                            {{ $blogTitle }}
                        </h1>

                        <div class="single__blog-detail-info">
                            <ul class="list-inline" style="text-align: start">
                                {{-- <li class="list-inline-item">
                                    <figure class="image-profile">
                                        <img src="{{asset('images/eight.jpg')}}" class="img-fluid" alt="">
                                    </figure>
                                </li> --}}
                                <li class="list-inline-item">

                                    <span>
                                        {{ $txtPostedon }}:
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-dark text-capitalize ml-1">
                                        {{ $createdAt }} - {{ $Since }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <figure>
                            <img src="https://admin.zahratalshamal.com/blog_imgs/{{ $blog->image_path1 }}" class="img-fluid"
                                style="width: 100%" alt="">
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
                            <img src="https://admin.zahratalshamal.com/blog_imgs/{{ $blog->image_path2 }}" class="img-fluid"
                                style="width: 100%" alt="">
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
                            <img src="https://admin.zahratalshamal.com/blog_imgs/{{ $blog->image_path3 }}"
                                class="img-fluid" style="width: 100%" alt="">
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
                                    <h6 class="text-capitalize">{{ $txtRecentBlogs }}</h6>
                                </div>
                                <div class="widget__sidebar__body">
                                    <ul class="list-unstyled">
                                        @if ($recentBlogs)
                                            @foreach ($recentBlogs as $recentBlog)
                                                <li class="card pt-3 pl-2 pb-2 pr-2 mb-3" style="border: 1px solid #e2e2e2; border-radius: 5px;">
                                                    <a href="blogDetail/{{ $blog->id }}/blog">
                                                        <sup style="float: right; color: #a2a2a2;">{{$recentBlog->created_at->diffForHumans()}}</sup style="float: right">
                                                        <img style="height: 40px; width: 40px; border-radius: 50%; object-fit: cover;" src="https://admin.zahratalshamal.com/coverImages/1744210761_jpg" alt="" class=" img-transition">
                                                        {{-- {{ $recentBlog->title }} --}}
                                                        <b>{{ \Illuminate\Support\Str::limit($recentBlog->title ?? 'N/A', 65, '...') }}</b>
                                                        <br>
                                                        {{ \Illuminate\Support\Str::limit($recentBlog->description1 ?? 'N/A', 65, '...') }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        @else
                                            <li class="card pt-3 pl-2 pb-2 pr-2 mb-3" style="border: 1px solid #e2e2e2; border-radius: 5px;">
                                                    <b>No Recent Blogs</b>
                                            </li>
                                        @endif
                                    </ul>
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
