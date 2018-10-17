@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main>
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/banner10.jpeg', text: 'Stay Sell', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner10.jpeg', text: 'Stay Sell', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/banner7.jpeg') }}', text: 'Stay Sell', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <div class="events-header mb-3">
                    <div class="filter-btn">
                        <a class="col-md-12 font-barlow-regular" href="#">Geo Location Map</a>
                    </div>
                    <div class="filter-btns">
                        <a class="mr-2 font-barlow-regular" href="#">Location</a>
                        <a class="font-barlow-regular pr-2 pl-2" href="#">On Demand Concierge</a>
                    </div>
                </div>
                <div class="row">
                    @for($i = 1; $i < 10; $i++)
                        <div class="default-card col-md-4 mb-4">
                            <div class="default-wrapper">
                                <a href="{{ route('stay-sell-vendor-page') }}">
                                    <img src='{{ asset("assets/img/stay/vendor$i.png") }}' />
                                    <div class="content">
                                        <h2 class="mb-3">Vendor {{ $i }}</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>

            <!-- EVENTS -->
            <events-widget></events-widget>
        </main>
    </explore-page>
@endsection