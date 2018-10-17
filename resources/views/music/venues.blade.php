@extends('layouts.main-page')

@section('content')
    <music-page inline-template>
        <main class="music-venues">
            <slider :data="[{img: '{{ asset('assets/img/sliders/client-banner.jpeg') }}', text: 'VENUES', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/client-banner.jpeg') }}', text: 'VENUES', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/client-banner.jpeg') }}', text: 'VENUES', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards events-cards">
                <div class="events-header mb-3">
                    <div class="filter-btn">
                        <a class="col-md-12" href="#">Geo Location Map</a>
                    </div>
                    <div class="filter-btns">
                        <a class="mr-2" href="#">Location</a>
                        <a href="#">Private Bookings & Rentals</a>
                    </div>
                </div>
                <div class="row">
                    @for($i = 1; $i < 10; $i++)
                        <div class="default-card col-md-4 mb-4">
                            <div class="default-wrapper">
                                <a href="{{ route('music-venues-profile-page') }}">
                                    <img src="http://testsite.eastbayloop.com/images/nightlife{{ $i }}.png" />
                                    <div class="content">
                                        <h2 class="mb-3">{{ 'Venue ' . $i }}</h2>
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
    </music-page>
@endsection