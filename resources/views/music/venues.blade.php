@extends('layouts.main-page')

@section('content')
    <music-page inline-template>
        <main class="music-venues">
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'VENUES', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'VENUES', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'VENUES', class: 'explore-slider'}]">
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
                                <img src="http://testsite.eastbayloop.com/images/nightlife{{ $i }}.png" />
                                <div class="content">
                                    <h2 class="mb-3">{{ 'Venue ' . $i }}</h2>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>

            <!-- EVENTS -->
            <section class="custom-section">
                <div class="section-header">
                    <p class="title text-uppercase text-center font-barlow-bold">UPCOMING EVENTS</p>
                    <p class="content text-center">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
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
                                                <div class="date">
                                                    <span class="text">
                                                        OCT 
                                                        <span>23</span>
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
    </music-page>
@endsection