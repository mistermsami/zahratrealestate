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
            <div class="filtr-container">
                {{-- <h1>{{ $translatedText}}</h1> --}}
                @php
                    $translator = new \App\Services\TranslationService();
                    // $translatedText = $translator->translate('Hello', 'ar');

                    // dd($translatedText);
                @endphp
                @foreach ($listings as $listing)
                    @php
                        // Translate only if the locale is Arabic
                        if (session()->get('locale') == 'ar') {
                            $tittle = $translator->translate($listing->tittle, 'ar');
                            $listing_for = $translator->translate($listing->listing_for, 'ar');
                            $area_name = $translator->translate($listing->area->name, 'ar');
                            $city_name = $translator->translate($listing->city->city_name, 'ar');
                            $no_rooms = $translator->translate($listing->propertyDetails->rooms, 'ar');
                            $no_baths = $translator->translate($listing->propertyDetails->baths, 'ar');
                            $size = $translator->translate($listing->propertyDetails->size, 'ar');
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

                        }else {
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
                    <div class="col-md-6 col-lg-4 filtr-item" data-category="2, 4" data-title="">
                        {{-- <a href="{{ route('propertyDetail', $slug) }}"> --}}
                            <a href="{{ route('propertyDetail', ['slug' => $slug]) }}">
                            <div class="card__image card__box-v1">
                                <div class="card__image-header h-250">
                                    <div class="ribbon text-capitalize"
                                        style="background-color: goldenrod; color: black;">{{ $txtfeatured }}
                                    </div>
                                    <img src="images/apart4.jpg" alt="" class="img-fluid w100 img-transition">


                                    <div class="info" style="background-color: #11572E;"> {{ $listing_for }}
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
                                        {{ $area_name }}, {{ $city_name }}, {{ $txtQatar }}

                                    </p>
                                    <ul class="list-inline card__content">
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
                                            <i class="fa fa-whatsapp"></i> {{ $txtWhatsApp}}
                                        </a>

                                        <!-- Call Button -->
                                        <a href="tel:{{ $listing->agent->office_contact }}" class="btn btn-sm ml-2"
                                            style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                            <i class="fa fa-phone"></i> {{ $txtCall }}
                                        </a>
                                    </div>
                                    <h6 class="mb-0">
                                        <span style="color: #11572E; font-size: small;">{{ $txtQAR}}</span>
                                        {{ $price }}
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <div class="col-md-6 col-lg-4 filtr-item" data-category="2, 4" data-title="">
                    <a href="propertyDetail.html">
                        <div class="card__image card__box-v1">
                            <div class="card__image-header h-250">

                                <img src="images/beautiful-Apartment.jpg" alt=""
                                    class="img-fluid w100 img-transition">
                                <div class="info" style="background-color: #11572E"> for sale</div>
                            </div>
                            <div class="card__image-body">

                                <h6 class="text-capitalize">
                                    vila in coral gables
                                </h6>

                                <p class="text-capitalize">
                                    <i class="fa fa-map-marker"></i>
                                    West Bay, Doha, Qatar

                                </p>
                                <ul class="list-inline card__content">
                                    <li class="list-inline-item">
                                        <span>
                                            baths <br>
                                            <i class="fa fa-bath"></i> 2
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            beds <br>
                                            <i class="fa fa-bed"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            rooms <br>
                                            <i class="fa fa-inbox"></i> 3
                                        </span>
                                    </li>
                                    <li class="list-inline-item">
                                        <span>
                                            area <br>
                                            <i class="fa fa-map"></i> 4300 sq ft
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card__image-footer d-flex justify-content-between align-items-center">
                                <div>
                                    <!-- WhatsApp Button -->
                                    <a href="https://wa.me/1234567890" class="btn btn-sm"
                                        style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                        target="_blank">
                                        <i class="fa fa-whatsapp"></i> WhatsApp
                                    </a>

                                    <!-- Call Button -->
                                    <a href="tel:1234567890" class="btn btn-sm ml-2"
                                        style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                        <i class="fa fa-phone"></i> Call
                                    </a>
                                </div>
                                <h6 class="mb-0">
                                    <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                                </h6>

                            </div>

                        </div>
                    </a>

                </div>

                <div class="col-md-6 col-lg-4 filtr-item" data-category="4" data-title="">
                    <div class="card__image card__box-v1">
                        <div class="card__image-header h-250">

                            <img src="images/apart2.jpg" alt="" class="img-fluid w100 img-transition">
                            <div class="info" style="background-color: #11572E"> for sale</div>
                        </div>
                        <div class="card__image-body">

                            <h6 class="text-capitalize">
                                Ample Apartment At Last Floor
                            </h6>

                            <p class="text-capitalize">
                                <i class="fa fa-map-marker"></i>
                                West Bay, Doha, Qatar

                            </p>
                            <ul class="list-inline card__content">
                                <li class="list-inline-item">

                                    <span>
                                        baths <br>
                                        <i class="fa fa-bath"></i> 2
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        beds <br>
                                        <i class="fa fa-bed"></i> 3
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        rooms <br>
                                        <i class="fa fa-inbox"></i> 3
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        area <br>
                                        <i class="fa fa-map"></i> 4300 sq ft
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="card__image-footer d-flex justify-content-between align-items-center">
                            <div>
                                <!-- WhatsApp Button -->
                                <a href="https://wa.me/1234567890" class="btn btn-sm"
                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                    target="_blank">
                                    <i class="fa fa-whatsapp"></i> WhatsApp
                                </a>

                                <!-- Call Button -->
                                <a href="tel:1234567890" class="btn btn-sm ml-2"
                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                    <i class="fa fa-phone"></i> Call
                                </a>
                            </div>
                            <h6 class="mb-0">
                                <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-title="">
                    <div class="card__image card__box-v1">
                        <div class="card__image-header h-250">

                            <img src="images/apart3.jpg" alt="" class="img-fluid w100 img-transition">
                            <div class="info" style="background-color: #11572E"> for sale</div>
                        </div>
                        <div class="card__image-body">

                            <h6 class="text-capitalize">
                                Contemporary Apartment
                            </h6>

                            <p class="text-capitalize">
                                <i class="fa fa-map-marker"></i>
                                West Bay, Doha, Qatar

                            </p>
                            <ul class="list-inline card__content">
                                <li class="list-inline-item">
                                    <span>
                                        baths <br>
                                        <i class="fa fa-bath"></i> 2
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        beds <br>
                                        <i class="fa fa-bed"></i> 3
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        rooms <br>
                                        <i class="fa fa-inbox"></i> 3
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        area <br>
                                        <i class="fa fa-map"></i> 4300 sq ft
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="card__image-footer d-flex justify-content-between align-items-center">
                            <div>
                                <!-- WhatsApp Button -->
                                <a href="https://wa.me/1234567890" class="btn btn-sm"
                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                    target="_blank">
                                    <i class="fa fa-whatsapp"></i> WhatsApp
                                </a>

                                <!-- Call Button -->
                                <a href="tel:1234567890" class="btn btn-sm ml-2"
                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                    <i class="fa fa-phone"></i> Call
                                </a>
                            </div>
                            <h6 class="mb-0">
                                <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                            </h6>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4 filtr-item" data-category="2, 4" data-title="">
                    <div class="card__image card__box-v1">
                        <div class="card__image-header h-250">

                            <img src="images/apart4.jpg" alt="" class="img-fluid w100 img-transition">
                            <div class="info" style="background-color: #11572E"> for sale</div>
                        </div>
                        <div class="card__image-body">

                            <h6 class="text-capitalize">
                                Family Home For Sale
                            </h6>

                            <p class="text-capitalize">
                                <i class="fa fa-map-marker"></i>
                                West Bay, Doha, Qatar

                            </p>
                            <ul class="list-inline card__content">
                                <li class="list-inline-item">

                                    <span>
                                        baths <br>
                                        <i class="fa fa-bath"></i> 2
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        beds <br>
                                        <i class="fa fa-bed"></i> 3
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        rooms <br>
                                        <i class="fa fa-inbox"></i> 3
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        area <br>
                                        <i class="fa fa-map"></i> 4300 sq ft
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="card__image-footer d-flex justify-content-between align-items-center">
                            <div>
                                <!-- WhatsApp Button -->
                                <a href="https://wa.me/1234567890" class="btn btn-sm"
                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                    target="_blank">
                                    <i class="fa fa-whatsapp"></i> WhatsApp
                                </a>

                                <!-- Call Button -->
                                <a href="tel:1234567890" class="btn btn-sm ml-2"
                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                    <i class="fa fa-phone"></i> Call
                                </a>
                            </div>
                            <h6 class="mb-0">
                                <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-title="">
                    <div class="card__image card__box-v1">
                        <div class="card__image-header h-250">
                            <img src="images/apart6.jpg" alt="" class="img-fluid w100 img-transition">
                            <div class="info" style="background-color: #11572E"> for sale</div>
                        </div>
                        <div class="card__image-body">

                            <h6 class="text-capitalize">
                                Luxury Villa With Pool
                            </h6>

                            <p class="text-capitalize">
                                <i class="fa fa-map-marker"></i>
                                West Bay, Doha, Qatar

                            </p>
                            <ul class="list-inline card__content">
                                <li class="list-inline-item">

                                    <span>
                                        baths <br>
                                        <i class="fa fa-bath"></i> 2
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        beds <br>
                                        <i class="fa fa-bed"></i> 3
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        rooms <br>
                                        <i class="fa fa-inbox"></i> 3
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        area <br>
                                        <i class="fa fa-map"></i> 4300 sq ft
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="card__image-footer d-flex justify-content-between align-items-center">
                            <div>
                                <!-- WhatsApp Button -->
                                <a href="https://wa.me/1234567890" class="btn btn-sm"
                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                    target="_blank">
                                    <i class="fa fa-whatsapp"></i> WhatsApp
                                </a>

                                <!-- Call Button -->
                                <a href="tel:1234567890" class="btn btn-sm ml-2"
                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                    <i class="fa fa-phone"></i> Call
                                </a>
                            </div>
                            <h6 class="mb-0">
                                <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                            </h6>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 filtr-item" data-category="1" data-title="">
                    <div class="card__image card__box-v1">
                        <div class="card__image-header h-250">
                            <img src="images/apart7.jpg" alt="" class="img-fluid w100 img-transition">
                            <div class="info" style="background-color: #11572E"> for sale</div>
                        </div>
                        <div class="card__image-body">
                            <h6 class="text-capitalize">
                                184 Lexington Avenue
                            </h6>

                            <p class="text-capitalize">
                                <i class="fa fa-map-marker"></i>
                                West Bay, Doha, Qatar

                            </p>
                            <ul class="list-inline card__content">
                                <li class="list-inline-item">

                                    <span>
                                        baths <br>
                                        <i class="fa fa-bath"></i> 2
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        beds <br>
                                        <i class="fa fa-bed"></i> 3
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        rooms <br>
                                        <i class="fa fa-inbox"></i> 3
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span>
                                        area <br>
                                        <i class="fa fa-map"></i> 4300 sq ft
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div class="card__image-footer d-flex justify-content-between align-items-center">
                            <div>
                                <!-- WhatsApp Button -->
                                <a href="https://wa.me/1234567890" class="btn btn-sm"
                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;"
                                    target="_blank">
                                    <i class="fa fa-whatsapp"></i> WhatsApp
                                </a>

                                <!-- Call Button -->
                                <a href="tel:1234567890" class="btn btn-sm ml-2"
                                    style="color: #11572E; border: 1px solid #11572E; padding: 6px 12px; text-decoration: none; border-radius: 4px;">
                                    <i class="fa fa-phone"></i> Call
                                </a>
                            </div>
                            <h6 class="mb-0">
                                <span style="color: #11572E; font-size: small;">QAR</span> 350,000
                            </h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
