@extends('layout.layout')
@php
    $pagename = 'Login';
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
                <div class="col-lg-12">
                    <!-- Form Login -->
                    <div class="card mx-auto" style="max-width: 380px;">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Sign in</h4>
                            <form action="#">
                                <!-- <a href="#" class="btn btn-facebook btn-block mb-2 text-white"> <i
                                        class="fa fa-facebook"></i> &nbsp; Sign
                                    in
                                    with
                                    Facebook</a>
                                <a href="#" class="btn btn-primary btn-block mb-4"> <i class="fa fa-google"></i> &nbsp;
                                    Sign in with
                                    Google</a> -->
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" type="text">
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password">
                                </div> <!-- form-group// -->

                                <div class="form-group">
                                    <a href="#" class="float-right">Forgot password?</a>
                                    <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                                            class="custom-control-input" checked="">
                                        <span class="custom-control-label"> Remember </span>
                                    </label>
                                </div> <!-- form-group form-check .// -->
                                <div class="form-group">
                                    <button type="submit" class="btn  btn-block" style="background-color: #11572E;color: #fff;"> Login </button>
                                </div> <!-- form-group// -->
                            </form>
                        </div> <!-- card-body.// -->
                    </div> <!-- card .// -->

                    <p class="text-center mt-4">Don't have account? <a href="#">Sign up</a></p>
                </div>
            </div>
        </div>
    </section>


@endsection
