@extends('layout.layout')
@php
    $pagenamee = 'Blogs';

    $translator = new \App\Services\TranslationService();
    if (session()->get('locale') == 'ar') {
        $pagename = $translator->translate($pagenamee, 'ar');

        $txtReadmore = $translator->translate('Read More', 'ar');
        $txtBlog = $translator->translate('Blog', 'ar');
        $txtCategory = $translator->translate('category', 'ar');
        $txttags = $translator->translate('tags', 'ar');
    } else {
        $pagename = $pagenamee;

        $txtReadmore = 'Read More';
        $txtBlog = 'Blog';
        $txtCategory = 'category';
        $txttags = 'tags';
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

    <!-- BLOG -->
    <section>
        <div class="container">
            <div class="row">
                <!-- BLOG START -->
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($blogs as $blog)
                            @php
                                if (session()->get('locale') == 'ar') {
                                    $blogtitle = $translator->translate($blog->title, 'ar');
                                    $description = $translator->translate($blog->description1, 'ar');
                                } else {
                                    $blogtitle = $blog->title;
                                    $description = $blog->description1;
                                }
                            @endphp
                            <div class="col-md-6 col-lg-6 mb-4">
                                <div class="blog__grid mt-0">
                                    <!-- BLOG  -->
                                    <div class="card__image">
                                        <div class="card__image-header h-250">
                                            <img src="https://admin.zahratalshamal.com/blog_imgs/{{ $blog->image_path1 }}"
                                                alt="" class="img-fluid w100 img-transition">
                                            {{-- <img src="blog_imgs/{{$blog->image_path1}}" alt=""
                                                class="img-fluid w100 img-transition"> --}}
                                            <div class="info"> {{ $txtBlog }}</div>
                                        </div>
                                        <div class="card__image-body">
                                            <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">Dec 09, 2024
                                                            </span> -->
                                            <h6 class="text-capitalize">
                                                <a
                                                    href="blogDetail/{{ $blog->id }}/blog">{{ \Illuminate\Support\Str::limit($blogtitle ?? 'N/A', 25, '...') }}</a>
                                            </h6>
                                            <p class=" mb-0">
                                                {{ \Illuminate\Support\Str::limit($description ?? 'N/A', 140, '...') }}
                                            </p>
                                        </div>
                                        <div class="card__image-footer d-flex justify-content-center">
                                            <a href="blogDetail/{{ $blog->id }}/blog" class="btn btn-sm px-4 py-3 my-2"
                                                style="background-color: #11572E; color: #fff; font-size: 16px; font-weight: 500 !important; ">
                                                {{ $txtReadmore }}
                                                <i class="fa fa-angle-right ml-1">
                                                </i></a>
                                        </div>
                                    </div>
                                    <!-- END BLOG -->
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- END BLOG  -->

                <!-- WIDGET BLOG -->
                <div class="col-lg-4">
                    <div class="sticky-top">
                        <aside>
                            <div class="widget__sidebar">
                                <div class="widget__sidebar__header">
                                    <h6 class="text-capitalize">{{ $txtCategory }}</h6>
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
                                    <h6 class="text-capitalize">{{ $txttags }}</h6>
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
