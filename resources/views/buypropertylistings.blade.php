@extends('layout.layout')
@php
    $pagename = 'Properties For Rent';
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
    <!-- BREADCRUMB -->
    <div class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__breadcrumb-v1">
                        <ol class="breadcrumb mb-0 bg-light">
                            <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i> </a></li>
                            <li class="breadcrumb-item"> <a href="#">Property</a></li>
                            <li class="breadcrumb-item active"> <span class="text-capitalize" style="color: #11572E;">
                                    Luxury family home</span>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END BREADCRUMB -->
    @livewire('BuyProperties')
    {{-- @livewireStyles
@livewireScripts --}}

{{-- @push('scripts')
<script src="{{ asset('js/faq.js') }}"></script>
@endpush --}}
@endsection
