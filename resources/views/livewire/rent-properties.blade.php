<div>
    <div class="search__area bg__shadow">
        <div class="container">
            <div class="search__area">
                <div class="container">
                    <div class="search__area-inner">
                        <div class="row">

                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="wide form-control select_option"
                                        wire:model.change="SizefromSelected">
                                        <option data-display="Area From">Area From </option>
                                        <option value="1500">1500</option>
                                        <option value="1200">1200</option>
                                        <option value="900">900</option>
                                        <option value="600">600</option>
                                        <option value="300">300</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Property Type Filter -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="wide form-control select_option"
                                        wire:model.change="selectedPropertyType">
                                        <option value="" selected>Property Type</option>
                                        @foreach ($propertyTypes as $propertytype)
                                            <option value="{{ $propertytype->id }}">{{ $propertytype->pt_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- City Filter -->
                            <div class="col-6 col-lg-3 col-md-3">
                                <div class="form-group">
                                    <select class="wide form-control select_option" wire:model.lazy="selectedCity">
                                        <option value="" selected>Locations</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                    <select class="wide form-control select_option" wire:model.lazy="bedsSelected">
                                        <option data-display="Bedrooms" selected>Bedrooms</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Price Filter -->
                            <div class="col-md-3">
                                <div class="form-group" style="display: flex; gap: 10px; align-items: center;">
                                    <select class="wide form-control select_option" wire:model.lazy="minpriceSelected">
                                        <option data-display="Price From" selected>Min Price</option>
                                        <option value="3000">3000</option>
                                        <option value="5000">5000</option>
                                        <option value="8000">8000</option>
                                        <option value="10000">10000</option>
                                        <option value="12000">12000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group" style="display: flex; gap: 10px; align-items: center;">
                                    <select class="wide form-control select_option" wire:model.lazy="maxpriceSelected">
                                        <option data-display="Price To" selected>Max Price</option>
                                        <option value="5000">5000</option>
                                        <option value="8000">8000</option>
                                        <option value="12000">12000</option>
                                        <option value="15000">15000</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <button class="btn text-uppercase btn-block" wire:click="resetFilters"
                                        style="background-color: #11572E; color: #fff;">
                                        Reset Filters
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LISTING LIST -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tabs__custom-v2 ">
                                <!-- FILTER VERTICAL -->
                                {{-- <ul class="nav nav-pills myTab" role="tablist">
                                    <li class="list-inline-item mr-auto">
                                        <span class="title-text" style="color: #11572E;">Sort by</span>
                                        <div class="btn-group">
                                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                Based Properties
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0)">Low to High
                                                    Price</a>
                                                <a class="dropdown-item" href="javascript:void(0)">High to Low Price
                                                </a>
                                                <a class="dropdown-item" href="javascript:void(0)">Sell Properties</a>

                                                <a class="dropdown-item" href="javascript:void(0)">Rent Properties</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#pills-tab-one" role="tab"
                                            aria-controls="pills-tab-one" aria-selected="true">
                                            <span class="fa fa-th-list"></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#pills-tab-two"
                                            role="tab" aria-controls="pills-tab-two" aria-selected="false">
                                            <span class="fa fa-th-large"></span></a>
                                    </li>
                                </ul> --}}



                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="pills-tab-one" role="tabpanel"
                                        aria-labelledby="pills-tab-one">
                                        <div class="row">
                                            @if (count($listings) == 0)
                                                <div class="col-md-12 d-flex justify-content-center py-5">
                                                    <p>No Property found!</p>
                                                </div>
                                            @endif
                                            @foreach ($listings as $listing)
                                                @php
                                                $translator = new \App\Services\TranslationService();
                                                    // Translate only if the locale is Arabic
                                                    if (session()->get('locale') == 'ar') {
                                                        $tittle = $translator->translate($listing->tittle, 'ar');
                                                        $listing_for = $translator->translate(
                                                            $listing->listing_for,
                                                            'ar',
                                                        );
                                                        $area_name = $translator->translate($listing->area->name, 'ar');
                                                        $city_name = $translator->translate(
                                                            $listing->city->city_name,
                                                            'ar',
                                                        );
                                                        $no_rooms = $translator->translate(
                                                            $listing->propertyDetails->rooms,
                                                            'ar',
                                                        );
                                                        $no_baths = $translator->translate(
                                                            $listing->propertyDetails->baths,
                                                            'ar',
                                                        );
                                                        $size = $translator->translate(
                                                            $listing->propertyDetails->size,
                                                            'ar',
                                                        );
                                                        $price = $translator->translate($listing->price, 'ar');
                                                        $slug = $listing->slug->slug;
                                                        $txtfeatured = $translator->translate('featured', 'ar');
                                                        $txtQatar = $translator->translate('Qatar', 'ar');
                                                        $txtbaths = $translator->translate('baths', 'ar');
                                                        $txtrooms = $translator->translate('rooms', 'ar');
                                                        $txtbeds = $translator->translate('beds', 'ar');
                                                        $txtsize = $translator->translate('size', 'ar');
                                                        $txtarea = $translator->translate('area', 'ar');
                                                        $txtQAR = $translator->translate('QAR', 'ar');
                                                        $txtWhatsApp = $translator->translate('WhatsApp', 'ar');
                                                        $txtCall = $translator->translate('Call', 'ar');
                                                    } else {
                                                        $tittle = $listing->tittle;
                                                        $listing_for = $listing->listing_for;
                                                        $area_name = $listing->area->name;
                                                        $city_name = $listing->city->city_name;
                                                        $no_rooms = $listing->propertyDetails->rooms;
                                                        $no_baths = $listing->propertyDetails->baths;
                                                        $size = $listing->propertyDetails->size;
                                                        $price = $listing->price;
                                                        $slug = $listing->slug->slug;
                                                        $txtfeatured = 'featured';
                                                        $txtQatar = 'Qatar';
                                                        $txtbaths = 'baths';
                                                        $txtrooms = 'rooms';
                                                        $txtbeds = 'beds';
                                                        $txtsize = 'size';
                                                        $txtarea = 'area';
                                                        $txtQAR = 'QAR';
                                                        $txtWhatsApp = 'WhatsApp';
                                                        $txtCall = 'Call';
                                                    }
                                                @endphp
                                                <div class="col-md-6 col-lg-4 filtr-item" data-category="2, 4"
                                                    data-title="">
                                                    {{-- <a href="{{ route('propertyDetail', $slug) }}"> --}}
                                                        {{-- <a href="{{ route('propertyDetail', ['slug' => $slug, 'locale' => session()->get('locale') ?? 'en']) }}"> --}}
                                                            @php
                                                                $thislocale = session()->get('locale') ?? 'en';
                                                            @endphp
                                                            <a href="/{{ session('locale', 'en') }}/propertyDetail/{{ $slug }}">
                                                                {{-- <a href="/{{ url("session('locale', 'en') /propertyDetail/ $thislocale") }}"> --}}

                                                            {{-- <a href="{{route('propertyDetail', ['locale' => $thislocale, 'slug' => $slug])}}"> --}}



                                                    {{-- <a href="{{ route('propertyDetail', ['slug' => $slug]) }}"> --}}
                                                        <div class="card__image card__box-v1">
                                                            <div class="card__image-header h-250">
                                                                <div class="ribbon text-capitalize"
                                                                    style="background-color: goldenrod; color: black;">
                                                                    {{ $txtfeatured }}
                                                                </div>
                                                                <img src="{{asset('images/apart4.jpg')}}" alt=""
                                                                    class="img-fluid w100 img-transition">
                                                                {{-- <img src="{{$listing->$images->image_path}}" alt=""
                                                                    class="img-fluid w100 img-transition"> --}}


                                                                <div class="info"
                                                                    style="background-color: #11572E;">
                                                                    {{ $listing_for }}
                                                                </div>
                                                            </div>
                                                            <div class="card__image-body">
                                                                {{-- <span class="badge badge-primary text-capitalize mb-2"
                                        style="background-color: #11572E;">{{ $listing->propertyType->pt_name }}</span> --}}
                                                                <h6 class="text-capitalize">
                                                                    {{ $tittle }}
                                                                </h6>

                                                                <p class="text-capitalize">
                                                                    <i class="fa fa-map-marker"></i>
                                                                    {{ $area_name }}, {{ $city_name }},
                                                                    {{ $txtQatar }}

                                                                </p>
                                                                <ul class="list-inline card__content">
                                                                    <li class="list-inline-item">

                                                                        <span>
                                                                            {{ $txtbaths }} <br>
                                                                            <i class="fa fa-bath"></i>
                                                                            {{ $no_baths }}
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            {{ $txtbeds }} <br>
                                                                            <i class="fa fa-bed"></i>
                                                                            {{ $no_rooms }}
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            {{ $txtrooms }} <br>
                                                                            <i class="fa fa-inbox"></i>
                                                                            {{ $no_rooms }}
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            {{ $txtarea }} <br>
                                                                            <i class="fa fa-map"></i>
                                                                            {{ $size }} sq ft
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="card__image-footer d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <!-- WhatsApp Button -->
                                                                    <a href="https://wa.me/{{ $listing->agent->phone_contact }}"
                                                                        class="btn btn-sm"
                                                                        style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                                        target="_blank">
                                                                        <i class="fa fa-whatsapp"></i>
                                                                        {{ $txtWhatsApp }}
                                                                    </a>

                                                                    <!-- Call Button -->
                                                                    <a href="tel:{{ $listing->agent->office_contact }}"
                                                                        class="btn btn-sm ml-2"
                                                                        style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                                                        <i class="fa fa-phone"></i>
                                                                        {{ $txtCall }}
                                                                    </a>
                                                                </div>
                                                                <h6 class="mb-0">
                                                                    <span
                                                                        style="color: #11572E; font-size: small;">{{ $txtQAR }}</span>
                                                                    {{ $price }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-pane fade show active" id="pills-tab-two" role="tabpanel"
                                        aria-labelledby="pills-tab-two">
                                        <div class="row">
                                            @if (count($listings) == 0)
                                                <div class="col-md-12 d-flex justify-content-center py-5">
                                                    <p>No Property found!</p>
                                                </div>
                                            @endif
                                            @foreach ($listings as $listing)
                                            @php
                                                $translator = new \App\Services\TranslationService();
                                                    // Translate only if the locale is Arabic
                                                    if (session()->get('locale') == 'ar') {
                                                        $tittle = $translator->translate($listing->tittle, 'ar');
                                                        $listing_for = $translator->translate($listing->listing_for, 'ar');
                                                        $area_name = $translator->translate($listing->area->name, 'ar');
                                                        $city_name = $translator->translate($listing->city->city_name,'ar');
                                                        $no_rooms = $translator->translate($listing->propertyDetails->rooms,'ar');
                                                        $no_baths = $translator->translate($listing->propertyDetails->baths,'ar');
                                                        $size = $translator->translate($listing->propertyDetails->size,'ar');
                                                        $price = $translator->translate($listing->price, 'ar');
                                                        $propertyTyp = $translator->translate($listing->propertyType->pt_name, 'ar');
                                                        $slug = $listing->slug->slug;
                                                        $txtfeatured = $translator->translate('featured', 'ar');
                                                        $txtQatar = $translator->translate('Qatar', 'ar');
                                                        $txtbaths = $translator->translate('baths', 'ar');
                                                        $txtrooms = $translator->translate('rooms', 'ar');
                                                        $txtbeds = $translator->translate('beds', 'ar');
                                                        $txtsize = $translator->translate('size', 'ar');
                                                        $txtarea = $translator->translate('area', 'ar');
                                                        $txtQAR = $translator->translate('QAR', 'ar');
                                                        $txtWhatsApp = $translator->translate('WhatsApp', 'ar');
                                                        $txtCall = $translator->translate('Call', 'ar');
                                                    } else {
                                                        $tittle = $listing->tittle;
                                                        $listing_for = $listing->listing_for;
                                                        $area_name = $listing->area->name;
                                                        $city_name = $listing->city->city_name;
                                                        $no_rooms = $listing->propertyDetails->rooms;
                                                        $no_baths = $listing->propertyDetails->baths;
                                                        $size = $listing->propertyDetails->size;
                                                        $price = $listing->price;
                                                        $propertyTyp = $listing->propertyType->pt_name;
                                                        $slug = $listing->slug->slug;
                                                        $txtfeatured = 'featured';
                                                        $txtQatar = 'Qatar';
                                                        $txtbaths = 'baths';
                                                        $txtrooms = 'rooms';
                                                        $txtbeds = 'beds';
                                                        $txtsize = 'size';
                                                        $txtarea = 'area';
                                                        $txtQAR = 'QAR';
                                                        $txtWhatsApp = 'WhatsApp';
                                                        $txtCall = 'Call';
                                                    }
                                                @endphp
                                                <div class="col-md-4 col-lg-4">
                                                    @php
                                                        // dd($listing->slug->slug);
                                                    @endphp
                                                    <a
                                                        href="/{{ session('locale', 'en') }}/propertyDetail/{{ $slug }}">
                                                        <div class="card__image card__box-v1">
                                                            <div class="card__image-header h-250">
                                                                <div class="ribbon text-capitalize"
                                                                    style="background-color: goldenrod; color: black;">
                                                                    {{ $txtfeatured }}
                                                                </div>
                                                                {{-- <img src="{{asset('images/apart4.jpg')}}" alt=""
                                                                    class="img-fluid w100 img-transition"> --}}
                                                                <img src="https://admin.zahratalshamal.com/{{$listing->images->first()->image_path}}" alt=""
                                                                    class="img-fluid w100 img-transition">
                                                                <div class="info"
                                                                    style="background-color: #11572E;">
                                                                    {{ $listing_for }}</div>
                                                            </div>
                                                            <div class="card__image-body">
                                                                <span class="badge badge-primary text-capitalize mb-2"
                                                                    style="background-color: #11572E;">{{ $propertyTyp }}</span>
                                                                <h6 class="text-capitalize" style="text-align: start">
                                                                    {{ $tittle }}
                                                                </h6>

                                                                <p class="text-capitalize">
                                                                    <i class="fa fa-map-marker"></i>
                                                                    {{ $area_name }},
                                                                    {{ $city_name }}, {{ $txtQatar}}

                                                                </p>
                                                                <ul class="list-inline card__content" style="text-align: start">
                                                                    <li class="list-inline-item">

                                                                        <span>
                                                                            {{$txtbaths}} <br>
                                                                            <i class="fa fa-bath"></i>
                                                                            {{ $no_baths }}
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            {{ $txtbeds}} <br>
                                                                            <i class="fa fa-bed"></i>
                                                                            {{ $no_rooms }}
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            {{ $txtrooms}} <br>
                                                                            <i class="fa fa-inbox"></i>
                                                                            {{ $no_rooms }}
                                                                        </span>
                                                                    </li>
                                                                    <li class="list-inline-item">
                                                                        <span>
                                                                            {{ $txtarea}} <br>
                                                                            <i class="fa fa-map"></i>
                                                                            {{ $size }} sq ft
                                                                        </span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="card__image-footer d-flex justify-content-between align-items-center">
                                                                <div>
                                                                    <!-- WhatsApp Button -->
                                                                    <a href="https://wa.me/{{ $listing->agent->phone_contact }}"
                                                                        class="btn btn-sm"
                                                                        style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                                                        target="_blank">
                                                                        <i class="fa fa-whatsapp"></i> {{ $txtWhatsApp}}
                                                                    </a>

                                                                    <!-- Call Button -->
                                                                    <a href="tel:{{ $listing->agent->office_contact }}"
                                                                        class="btn btn-sm ml-2"
                                                                        style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                                                        <i class="fa fa-phone"></i> {{$txtCall}}
                                                                    </a>
                                                                </div>
                                                                <h6 class="mb-0">
                                                                    <span
                                                                        style="color: #11572E; font-size: small;">{{$txtQAR}}</span>
                                                                    {{ $price }}
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            @endforeach

                                        </div>
                                        {{-- <ul class="pagination m-0 mt-4 d-flex justify-content-center align-items-center">

                                        </ul> --}}
                                        <div class="cleafix"></div>
                                    </div>
                                    <style>
                                        .pagination {
                                            margin-left: 20px;
                                        }

                                        .pagination .page-item.active .page-link {
                                            background-color: #11572E !important;
                                            color: #fff;
                                        }
                                    </style>
                                    <div class="col-lg-12 d-flex justify-content-center" style="margin-top: 50px;">
                                        {{ $listings->links('vendor.pagination.bootstrap-5') }}
                                    </div>
                                    {{-- <div class="col-lg-12 d-flex justify-content-center">
                                        {{ $listings->links('vendor.pagination.bootstrap-5') }}
                                    </div> --}}



                                </div>
                                <!-- END FILTER VERTICAL -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END LISTING LIST -->
</div>
