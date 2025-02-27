@extends('layout.layout')
@php
    $pagename = 'Blogs';
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

    <!-- BLOG -->
    <section>
        <div class="container">
            <div class="row">
                <!-- BLOG START -->
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-md-6 col-lg-6">
                                <div class="blog__grid mt-0">
                                    <!-- BLOG  -->
                                    <div class="card__image">
                                        <div class="card__image-header h-250">
                                            <img src="images/beautiful-Apartment.jpg" alt=""
                                                class="img-fluid w100 img-transition">
                                            {{-- <img src="blog_imgs/{{$blog->image_path1}}" alt=""
                                                class="img-fluid w100 img-transition"> --}}
                                            <div class="info"> event</div>
                                        </div>
                                        <div class="card__image-body">
                                            <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">Dec 09, 2024
                                                    </span> -->
                                            <h6 class="text-capitalize">
                                                <a href="blogDetail/{{$blog->id}}/blog">{{ \Illuminate\Support\Str::limit( $blog->title ?? 'N/A',25 , '...')}}</a>
                                            </h6>
                                            <p class=" mb-0">
                                                {{ \Illuminate\Support\Str::limit($blog->description1 ?? 'N/A', 140, '...') }}
                                            </p>
                                        </div>
                                        <div class="card__image-footer d-flex justify-content-center">
                                            <a href="blogDetail/{{$blog->id}}/blog" class="btn btn-sm px-4 py-2"
                                                style="background-color: #11572E; color: #fff; font-size: 16px; font-weight: 500 !important; ">
                                                Read More
                                                <i class="fa fa-angle-right ml-1">
                                                </i></a>
                                        </div>
                                    </div>
                                    <!-- END BLOG -->
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-6 col-lg-6 ">
                            <div class="blog__grid mt-0">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <img src="images/apart2.jpg" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> event</div>
                                    </div>
                                    <div class="card__image-body">
                                        <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">Dec 09, 2024 </span> -->
                                        <h6 class="text-capitalize">
                                            <a href="/blog-single">Best Interior Oppertunity </a>
                                        </h6>
                                        <p class=" mb-0">
                                            Real estate festival is one of the famous feval for explain to you how all this
                                            mistaolt deand praising pain
                                            wasnad I will give complete

                                        </p>


                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="images/team3.jpg" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item ">
                                                <a href="#">
                                                    tom wilson
                                                </a>

                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item ">
                                                <a href="/blog-single.html" class="btn btn-sm "
                                                    style="background-color: #11572E; color: #fff;"><small
                                                        class="text-white ">read more <i
                                                            class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="blog__grid">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <img src="images/apart4.jpg" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> event</div>
                                    </div>
                                    <div class="card__image-body">
                                        <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">Dec 09, 2024
                                                    </span> -->
                                        <h6 class="text-capitalize">
                                            where to invest in real estate
                                        </h6>
                                        <p class=" mb-0">
                                            Real estate festival is one of the famous feval for explain to you how all
                                            this mistaolt deand praising pain
                                            wasnad I will give complete

                                        </p>


                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="images/team4.jpg" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">
                                                <a href="#">
                                                    tom wilson
                                                </a>


                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-sm "
                                                    style="background-color: #11572E; color: #fff;"><small
                                                        class="text-white ">read more <i
                                                            class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="blog__grid">
                                <!-- BLOG  -->
                                <div class="card__image">
                                    <div class="card__image-header h-250">
                                        <img src="images/apart4.jpg" alt="" class="img-fluid w100 img-transition">
                                        <div class="info"> event</div>
                                    </div>
                                    <div class="card__image-body">
                                        <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">Dec 09, 2024
                                                    </span> -->
                                        <h6 class="text-capitalize">
                                            Happy family with new house
                                        </h6>
                                        <p class=" mb-0">
                                            Real estate festival is one of the famous feval for explain to you how all
                                            this mistaolt deand praising pain
                                            wasnad I will give complete

                                        </p>


                                    </div>
                                    <div class="card__image-footer">
                                        <figure>
                                            <img src="images/team4.jpg" alt="" class="img-fluid rounded-circle">
                                        </figure>
                                        <ul class="list-inline my-auto">
                                            <li class="list-inline-item">

                                                <a href="#">
                                                    tom wilson
                                                </a>


                                            </li>

                                        </ul>
                                        <ul class="list-inline my-auto ml-auto">
                                            <li class="list-inline-item">
                                                <a href="#" class="btn btn-sm"
                                                    style="background-color: #11572E; color: #fff;"><small
                                                        class="text-white ">read more <i
                                                            class="fa fa-angle-right ml-1"></i></small></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <!-- END BLOG -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END BLOG  -->

                <!-- WIDGET BLOG -->
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <aside>
                            <div class="widget__sidebar">
                                <div class="widget__sidebar__header">
                                    <h6 class="text-capitalize">category</h6>
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
                                    <h6 class="text-capitalize">tags</h6>
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
                <!-- END WIDGET BLOG -->
            </div>
        </div>
    </section>
    <!-- END LISTING LIST -->
@endsection
