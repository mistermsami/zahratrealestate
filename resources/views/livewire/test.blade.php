<div>

    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <select class="wide select_option" wire:model.lazy="listing_for">
                    <option value="">Select</option>
                    <option value="Buy">Buy</option>
                    <option value="Rent">Rent</option>
                </select>

            </div>
        </div>

        @if ($listing_for === 'Buy')
            <div class="col-md-2">
                <div class="form-group">
                    <select class="wide select_option" wire:model.lazy="structureSelected">
                        <option data-display="All">All</option>
                        <option value="offplan">Off Plan</option>
                        <option value="ready">Ready</option>
                    </select>
                </div>
            </div>
        @endif

        <div class="col-md-2">
            <div class="form-group">
                <select class="wide select_option" wire:model.change="SizefromSelected">
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
                <select class="wide select_option" wire:model.change="selectedPropertyType">
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
                <select class="wide select_option" wire:model.lazy="selectedCity">
                    <option value="" selected>Locations</option>
                    @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->city_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-md-2">
            <div class="form-group">
                <select class="wide select_option" wire:model.lazy="bedsSelected">
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
                <select class="wide select_option" wire:model.lazy="minpriceSelected">
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
                <select class="wide select_option" wire:model.lazy="maxpriceSelected">
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
                <button class="btn text-uppercase btn-block" style="background-color: #11572E; color: #fff;">
                    Search <i class="fa fa-search ml-1"></i>
                </button>
            </div>
        </div>


    </div>


    <br><br><br>
    <div class="row">
        @if (empty($listings))
            <div class="col-md-12 text-center">
                <h3>No Listings Found</h3>
            </div>
        @else
            @foreach ($listings as $listing)
                <div class="col-lg-12">
                    <div class="card__image card__box-v1">
                        <div class="row no-gutters">
                            <div class="col-md-4 col-lg-3 col-xl-4">
                                <div class="card__image__header h-250">
                                    <a href="propertyDetail">
                                        <div class="ribbon text-capitalize" style="background-color: #11572E;">
                                            {{ $listing->status }}</div>
                                        <img src="images/apart2.jpg" alt="" height="100"
                                            class="img-fluid w100 img-transition">
                                        <div class="info">
                                            {{ $listing->listing_for }}</div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-6 col-xl-5 my-auto">
                                <div class="card__image__body">

                                    <span class="badge badge-primary text-capitalize mb-2"
                                        style="background-color: #11572E;">{{ $listing->propertyType->pt_name }}</span>
                                    <h6>
                                        <a href="{{ route('propertyDetail', $listing->slug->slug) }}">{{ $listing->tittle }}
                                        </a>
                                    </h6>
                                    <div class="card__image__body-desc">
                                        <p class="text-capitalize">
                                            <i class="fa fa-map-marker"></i>
                                            {{ $listing->area->name }},
                                            {{ $listing->city->city_name }}, Qatar

                                        </p>
                                    </div>

                                    <ul class="list-inline card__content">
                                        <li class="list-inline-item">

                                            <span>
                                                baths <br>
                                                <i class="fa fa-bath"></i>
                                                {{ $listing->propertyDetails->baths }}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                beds <br>
                                                <i class="fa fa-bed"></i>
                                                {{ $listing->propertyDetails->rooms }}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                rooms <br>
                                                <i class="fa fa-inbox"></i>
                                                {{ $listing->propertyDetails->rooms }}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                area <br>
                                                <i class="fa fa-map"></i>
                                                {{ $listing->propertyDetails->size }}
                                                sq ft
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-3 col-xl-3 my-auto card__image__footer-first">
                                <div class="card__image__footer">
                                    <figure>
                                        <img src="images/eight.jpg" alt="" height="50"
                                            class="img-fluid rounded-circle">
                                    </figure>
                                    <ul class="list-inline my-auto">
                                        <li class="list-inline-item name">
                                            <a href="{{ route('agentDetail', $listing->agent_id) }}">
                                                {{ $listing->agent->first_name }}
                                            </a>

                                        </li>


                                    </ul>
                                    <ul class="list-inline my-auto ml-auto price">
                                        <li class="list-inline-item ">

                                            <h6 class="mb-0">
                                                <span style="color: #11572E; font-size: small;">QAR</span>
                                                {{ $listing->price }}
                                            </h6>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Pagination Links -->
        <div class="col-md-12 d-flex justify-content-center">
            {{ $listings->links() }}
        </div>
        @endif
    </div>
</div>
