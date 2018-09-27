@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main>
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/banner10.jpeg', text: 'Stay Sell', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner10.jpeg', text: 'Stay Sell', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner7.jpeg', text: 'Stay Sell', class: 'explore-slider'}]">
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
            <section class="custom-section">
                <div class="section-header">
                    <p class="title text-uppercase text-center font-barlow-semi-bold">UPCOMING EVENTS</p>
                    <p class="content text-center font-barlow-regular">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="event-card col-md-12 mb-4">
                            <div class="event-wrapper row">
                                <div class="image-header col-md-3">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/events-img1.jpeg" />
                                    </a>
                                </div>
                                <div class="content col-md-6">
                                    <div class="header">
                                        <span class="title">
                                            FLORENCE + THE MACHINE 
                                            <span class="time">8pm</span>
                                        </span>
                                        <span class="additional-title">
                                            Cold War Kids
                                            <span class="time">7pm</span>                                        
                                        </span>
                                    </div>
                                    <div class="footer">
                                        <div class="date">
                                            <span class="text">
                                                OCT <span>23</span>
                                            </span>
                                        </div>
                                        <div class="description">
                                            <p class="text">This event is 21 and over</p>
                                            <a href="#">More Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="read-more col-md-3">
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                                                                
                                </div>
                            </div>
                        </div>
                        <div class="event-card col-md-12 mb-4">
                            <div class="event-wrapper row">
                                <div class="image-header col-md-3">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/events-img2.jpeg" />
                                    </a>
                                </div>
                                <div class="content col-md-6">
                                    <div class="header">
                                        <span class="title">
                                            FLORENCE + THE MACHINE 
                                            <span class="time">8pm</span>
                                        </span>
                                        <span class="additional-title">
                                            Cold War Kids
                                            <span class="time">7pm</span>                                        
                                        </span>
                                    </div>
                                    <div class="footer">
                                        <div class="date">
                                            <span class="text">
                                                OCT <span>23</span>
                                            </span>
                                        </div>
                                        <div class="description">
                                            <p class="text">This event is 21 and over</p>
                                            <a href="#">More Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="read-more col-md-3">
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                                                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </explore-page>
@endsection