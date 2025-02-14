@extends('layout.layout')
@php
    $pagename = 'Add Property';
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


    <!-- Form contact -->
    <section class="wrap__contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>List Your Property</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Name <span class="required">*</span></label>
                                <input type="text" class="form-control" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Mobile <span class="required">*</span></label>
                                <input type="text" class="form-control" name="mobile" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Email <span class="required">*</span></label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Property Type <span class="required">*</span></label>
                                <select class="form-control" name="property_type" required>
                                    <option value="">Select Property Type</option>
                                    <option value="Residential">Residential</option>
                                    <option value="Commercial">Commercial</option>
                                    <option value="Land">Land</option>
                                    <option value="Apartment">Apartment</option>
                                    <option value="Villa">Villa</option>
                                    <option value="Office Space">Office Space</option>
                                    <option value="Warehouse">Warehouse</option>
                                    <option value="Shop">Shop</option>
                                    <option value="Industrial">Industrial</option>
                                    <option value="Hotel">Hotel</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="form-group form-group-name">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-name">
                                <label>Value (QAR)</label>
                                <input type="number" class="form-control" name="value" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Comments</label>
                                <textarea class="form-control" rows="6" name="comments"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group float-right mb-0">
                                <button type="submit" class="btn btn-contact" style="background-color: #11572E; color: #fff;">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Form contact  -->



@endsection
