<div>
    <div class="card__image-filter">
        <div class="filterizr-control">
            <ul class="list-inline filterizr-filter">
                <li class="list-inline-item filtr-active btn-filter" data-filter="all"
                    style="background-color: #11572E; border-color: #11572E; color: #fff;">
                    All Property
                </li>
                <li class="list-inline-item btn-filter" data-filter="1"
                    style="transition: background-color 0.3s; color: #000;"
                    onmouseover="this.style.backgroundColor='#11572E'; this.style.color='#fff';"
                    onmouseout="this.style.backgroundColor=''; this.style.color='#000';">
                    Residential
                </li>
                <li class="list-inline-item btn-filter" data-filter="2"
                    style="transition: background-color 0.3s; color: #000;"
                    onmouseover="this.style.backgroundColor='#11572E'; this.style.color='#fff';"
                    onmouseout="this.style.backgroundColor=''; this.style.color='#000';">
                    Commercial
                </li>
                <li class="list-inline-item btn-filter" data-filter="4"
                    style="transition: background-color 0.3s; color: #000;"
                    onmouseover="this.style.backgroundColor='#11572E'; this.style.color='#fff';"
                    onmouseout="this.style.backgroundColor=''; this.style.color='#000';">
                    Land
                </li>
            </ul>

        </div>
        <div class="row">
            {{-- <div class="filtr-container">



            </div> --}}
            @php
                $translator = new \App\Services\TranslationService();
                // $translatedText = $translator->translate('Hello', 'ar');

                // dd($translatedText);
            @endphp
            @foreach ($listings as $listing)
                @php
                    // Translate only if the locale is Arabic
                    if (session()->get('locale') == 'ar') {
                        if (!empty($listing->tittle)) {
                            $tittle = $translator->translate($listing->tittle, 'ar');
                        } else {
                            $tittle = 'Null';
                        }
                        if (!empty($listing->listing_for)) {
                            $listing_for = $translator->translate($listing->listing_for, 'ar');
                        } else {
                            $listing_for = 'Null';
                        }
                        if (!empty($listing->area->name)) {
                            $area_name = $translator->translate($listing->area->name, 'ar');
                        } else {
                            $area_name = 'Null';
                        }
                        if (!empty($listing->city->city_name)) {
                            $city_name = $translator->translate($listing->city->city_name, 'ar');
                        } else {
                            $city_name = 'Null';
                        }
                        if (!empty($listing->propertyDetails->rooms)) {
                            $no_rooms = $translator->translate($listing->propertyDetails->rooms, 'ar');
                        } else {
                            $no_rooms = 'Null';
                        }
                        if (!empty($listing->propertyDetails->baths)) {
                            $no_baths = $translator->translate($listing->propertyDetails->baths, 'ar');
                        } else {
                            $no_baths = 'Null';
                        }
                        if (!empty($listing->propertyDetails->size)) {
                            $size = $translator->translate($listing->propertyDetails->size, 'ar');
                        } else {
                            $size = 'Null';
                        }
                        if (!empty($listing->price)) {
                            $price = $translator->translate($listing->price, 'ar');
                        } else {
                            $price = 'Null';
                        }
                        if (!empty($listing->propertyType->pt_name)) {
                            $propertyTyp = $translator->translate($listing->propertyType->pt_name, 'ar' );
                        } else {
                            $propertyTyp = 'Null';
                        }
                        if (!empty($listing->plan)) {
                            $planTyp = $translator->translate($listing->plan, 'ar' );
                        } else {
                            $planTyp = 'Null';
                        }
                        if (!empty($listing->slug->slug)) {
                            $slug = $listing->slug->slug;
                        } else {
                            $slug = 'Null';
                        }
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
                        // $area_name = $listing->area->name;
                        if (!empty($listing->area->name)) {
                            $area_name = $translator->translate($listing->area->name, 'ar');
                        } else {
                            $area_name = 'Null';
                        }
                        $city_name = $listing->city->city_name;
                        $no_rooms = $listing->propertyDetails->rooms;
                        $no_baths = $listing->propertyDetails->baths;
                        $size = $listing->propertyDetails->size;
                        $propertyTyp = $listing->propertyType->pt_name;
                        $planTyp = $listing->plan;
                        if(!empty($listing->price)){
                            $price = $listing->price;
                        }
                        else{
                            $price = 'Null';
                        }
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
                <div class="col-md-6 col-lg-4 filtr-item" data-category="2, 4" data-title="">
                    {{-- <a href="{{ route('propertyDetail', $slug) }}"> --}}
                    @if ($listing_for == 'for rent')
                        <a href="/{{ session('locale', 'en') }}/property/properties-for-rent/qatar/{{ $slug }}">
                        @else
                            <a
                                href="/{{ session('locale', 'en') }}/property/properties-for-sale/qatar/{{ $slug }}">
                    @endif
                    {{-- <a href="/{{ session('locale', 'en') }}/propertyDetail/{{ $slug }}"> --}}
                    <div class="card__image card__box-v1">
                        <div class="card__image-header h-250">
                            @if ($listing->featuerd == 'featured')
                                <div class="ribbon text-capitalize" style="background-color: goldenrod; color: black;">
                                    {{ $txtfeatured }}
                                </div>
                            @endif
                            {{-- <img src="images/apart4.jpg" alt="" class="img-fluid w100 img-transition"> --}}
                            @if (isset($listing->coverImage_path))
                            <img src="https://admin.zahratalshamal.com/{{ $listing->coverImage_path }}"
                                alt="" class="img-fluid w100 img-transition">
                            @elseif (isset($listing->images->first()->image_path))
                                <img src="https://admin.zahratalshamal.com/{{ $listing->images->first()->image_path }}"
                                    alt="" class="img-fluid w100 img-transition">
                            @else
                                <img src="{{ asset('images/blank-img.jpg') }}" alt=""
                                    class="img-fluid w100 img-transition">
                            @endif
                            <div class="info" style="background-color: #11572E;"> {{ $listing_for }}
                            </div>
                            <div class="info" style="background-color: #11572E;"> {{ $listing_for }}
                            </div>
                        </div>
                        <div class="card__image-body">
                            {{-- <span class="badge badge-primary text-capitalize mb-2"
                                        style="background-color: #11572E;">{{ $listing->propertyType->pt_name }}</span> --}}
                            <span class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">
                                {{ $propertyTyp }}
                            </span>
                            <span class="badge badge-primary text-capitalize mb-2" style="background-color: #11572E;">
                                {{ $planTyp }}
                            </span>
                            <h6 class="text-capitalize" style="text-align: start">
                                {{ $tittle }}
                            </h6>

                            <p class="text-capitalize">
                                <i class="fa fa-map-marker"></i>
                                {{ $area_name }}, {{ $city_name }}, {{ $txtQatar }}

                            </p>
                            <ul class="list-inline card__content" style="text-align: start">
                                <li class="list-inline-item">

                                    <span>
                                        {{ $txtbaths }} <br>
                                        <i class="fa fa-bath"></i> {{ $no_baths }}
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        {{ $txtbeds }} <br>
                                        <i class="fa fa-bed"></i> {{ $no_rooms }}
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        {{ $txtrooms }} <br>
                                        <i class="fa fa-inbox"></i> {{ $no_rooms }}
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        {{ $txtarea }} <br>
                                        <i class="fa fa-map"></i> {{ $size }} sq ft
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="card__image-footer d-flex justify-content-between align-items-center">
                            <div>
                                <!-- WhatsApp Button -->
                                <a href="https://wa.me/{{ $listing->agent->phone_contact }}" class="btn btn-sm"
                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                    target="_blank">
                                    <i class="fa fa-whatsapp"></i> {{ $txtWhatsApp }}
                                </a>

                                <!-- Call Button -->
                                <a href="tel:{{ $listing->agent->office_contact }}" class="btn btn-sm ml-2"
                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                    <i class="fa fa-phone"></i> {{ $txtCall }}
                                </a>
                            </div>
                            <h6 class="mb-0">
                                <span style="color: #11572E; font-size: small;">{{ $txtQAR }}</span>
                                {{ $price }}
                            </h6>
                        </div>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
