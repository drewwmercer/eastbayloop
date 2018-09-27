@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/stay.png') }}', text: 'Stay Sell', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/stay.png') }}', text: 'Stay Sell', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/stay.png') }}', text: 'Stay Sell', class: 'explore-slider'}]">
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
                                        <a href="{{ route('stay-sell-vendor-profile-page') }}">
                                            <img src="http://testsite.eastbayloop.com/images/stay-img{{ $i > 3 ? ($i > 6 ? $i - 6 : $i - 3) : $i }}.jpeg" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h2 class="font-barlow-regular">HOME FOR SALE {{ $i }}</h2>
                                        <p class="text text-grey">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                        </p>

                                        <a class="read-more-link" href="{{ route('stay-sell-vendor-profile-page') }}">Read More...</a>                            
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </section>

            <!-- EVENTS -->
            <section class="custom-section">
                <div class="section-header">
                    <p class="title text-uppercase text-center font-barlow-semi-bold" >UPCOMING EVENTS</p>
                    <p class="content text-center font-barlow-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius nulla ac ipsum pharetra, sodales euismod est rhoncus.</p>
                    <div class="row p-0 m-0">
                        @for($i = 1; $i < 4; $i++)
                            <div class="col-md-4 m-upcoming-event-card mb-4">
                                <div class="m-upcoming-event-wrapper">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/music/' . $i . '.png') }}" />
                                    </div>
                                
                                    <div class="content">
                                        <div class="header">
                                            <h2>Florence + the machine <span class="time">8PM</span></h2>
                                            <h3>Cold War Kids <span class="time">7PM</span></h3>                                            
                                        </div>
                                        <div class="footer">
                                            <div class="date ">
                                                <span class="text">
                                                    OCT 
                                                    <span class="stay-events-date">23</span>
                                                </span>
                                            </div>
                                            <div class="description">
                                                <p class="text">This event is 21 and over</p>
                                                <a href="#"><div>+</div>More Info</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </section>
        </main>
    </explore-page>
@endsection