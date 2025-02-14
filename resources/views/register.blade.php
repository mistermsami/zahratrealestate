@extends('layout.layout')
@php
    $pagename = 'Register';
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Register -->

<div class="card mx-auto" style="max-width:520px;">
    <div class="card-body">
        <h4 class="card-title mb-4">Sign up</h4>
        <form action="#">
            <div class="form-row">
                <div class="col form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" placeholder="">
                </div> <!-- form-group end.// -->
                <div class="col form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" placeholder="">
                </div> <!-- form-group end.// -->
            </div> <!-- form-row end.// -->
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div> <!-- form-group end.// -->
            <div class="form-group">
                <label class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" checked="" type="radio" name="gender" value="option1">
                    <span class="custom-control-label"> Male </span>
                </label>
                <label class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" name="gender" value="option2">
                    <span class="custom-control-label"> Female </span>
                </label>
            </div> <!-- form-group end.// -->
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label>City</label>
                    <input type="text" class="form-control">
                </div> <!-- form-group end.// -->
                <div class="form-group col-lg-6">
                    <label>Country</label>
                    <select class=" form-control">
                        <option> Choose...</option>
                        <option>Uzbekistan</option>
                        <option>Russia</option>
                        <option selected="">Qatar</option>
                        <option>India</option>
                        <option>Afganistan</option>
                    </select>
                </div> <!-- form-group end.// -->
            </div> <!-- form-row.// -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Create password</label>
                    <input class="form-control" type="password">
                </div> <!-- form-group end.// -->
                <div class="form-group col-md-6">
                    <label>Repeat password</label>
                    <input class="form-control" type="password">
                </div> <!-- form-group end.// -->
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block" style="background-color: #11572E;"> Register </button>
            </div> <!-- form-group// -->
            <div class="form-group">
                <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input"
                        checked="">
                    <span class="custom-control-label"> I am agree with <a href="#">terms and contitions</a> </span>
                </label>
            </div> <!-- form-group end.// -->
        </form>
    </div><!-- card-body.// -->
</div>
                </div>
            </div>
        </div>
    </section>
@endsection
