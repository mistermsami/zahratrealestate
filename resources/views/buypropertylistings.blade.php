@extends('layout.layout')
@php
    $pagename = 'Properties For Buy';
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

    @livewire('BuyProperties')
    {{-- @livewireStyles
@livewireScripts --}}

{{-- @push('scripts')
<script src="{{ asset('js/faq.js') }}"></script>
@endpush --}}
@endsection
