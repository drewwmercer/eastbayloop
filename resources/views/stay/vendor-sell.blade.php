@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/stay.png') }}', text: '{{ $category_name }}', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/stay.png') }}', text: '{{ $category_name }}', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/stay.png') }}', text: '{{ $category_name }}', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <div class="events-header mb-3">
                    <div class="filter-btn">
                        <a class="col-md-12 font-barlow-regular" href="#">Geo Location Map</a>
                    </div>
                    <div class="filter-btns">
                        <a class="mr-2 font-barlow-regular" href="#">Location</a>
                        <a class="font-barlow-regular pr-2 pl-2" href="#">Private Bookings & Rentals</a>
                    </div>
                </div>
            </section>
            <section class="custom-section">
                <div class="section-content">
                    <div class="row">
                        @for($i = 1; $i < 10; $i++)
                            <div class="music-card text-left col-md-4 mt-3 mb-4">
                                <div class="music-wrapper">
                                    <div class="image-header">
                                        <a href="{{ route('stay-profile-page', ['category' => $category]) }}">
                                            <img src="http://testsite.eastbayloop.com/images/stay-img{{ $i > 3 ? ($i > 6 ? $i - 6 : $i - 3) : $i }}.jpeg" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h2 class="font-barlow-regular">Property {{ $i }}</h2>
                                        <p class="text text-grey">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                        </p>

                                        <a class="read-more-link" href="{{ route('stay-profile-page', ['category' => $category]) }}">Read More...</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </section>

            <!-- EVENTS -->
            <events-widget></events-widget>
        </main>
    </explore-page>
@endsection