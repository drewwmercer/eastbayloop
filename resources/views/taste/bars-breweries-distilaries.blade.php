@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main>
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'Wine Loop', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'Wine Loop', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'Wine Loop', class: 'explore-slider'}]">
            </slider>
            <section class="taste-bars-btns">
                <div class="row m-0 mt-4 mb-4 links">
                    <a href="{{ route('taste-bar-w-l-contact-page') }}" class="taste-bars-a mr-5">For Groups</a>
                    <a href="{{ route('taste-bar-w-l-contact-page') }}" class="taste-bars-a mr-5">For Celebrations</a>
                    <a href="{{ route('taste-bar-w-l-contact-page') }}" class="taste-bars-a mr-5">For Business Outing</a>
                </div>
            </section>

            <section class="taste-bars-map mt-4 mb-4">
                <iframe allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26081603.29442044!2d-95.677068!3d37.06250000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1505332785928&z=6"></iframe>
                <img class="marker" src="{{ asset('assets/img/taste/location-icon.png') }}" />
            </section>

            <section class="taste-bars-btns mb-4">
                <div class="row m-0 mt-4 mb-4 links">
                    <a href="{{ route('taste-winery-page') }}" class="taste-bars-a mr-5">Winery to Visit</a>   
                    <a href="{{ route('taste-c-partner-page') }}" class="taste-bars-a mr-5">Community Partner</a>
                </div>
            </section>

            <section class="taste-bars-cards mt-4 pl-3">
                <h2 class="cards-header-text mb-4">The Loop Exclusive Access to:</h2>
                <div class="row cards m-0">
                    <div class="taste-bars-card col-md-4 p-0 pr-3 mb-3">
                        <div class="bars-wrapper">
                            <img src='{{ asset("assets/img/taste/wine1.png") }}' />
                            <a href="{{ route('taste-buy-wine-page') }}">
                                <div class="bars-btn">Buy Wine</div>
                            </a>
                        </div>
                    </div>
                    <div class="taste-bars-card col-md-4 p-0 pr-3 mb-3">
                        <div class="bars-wrapper">
                            <img src='{{ asset("assets/img/taste/wine2.png") }}' />
                            <a href="{{ route('taste-bar-page') }}">
                                <div class="bars-btn">Join Wine Club</div>
                            </a>
                        </div>
                    </div>
                    <div class="taste-bars-card col-md-4 p-0 pr-3 mb-3">
                        <div class="bars-wrapper">
                            <img src='{{ asset("assets/img/taste/wine3.png") }}' />
                            <a href="{{ route('taste-book-tasting-page') }}">
                                <div class="bars-btn">Book Your Tasting</div>
                            </a>
                        </div>
                    </div>
                    <div class="taste-bars-big-card col-md-12 p-0 mt-3 pr-3">
                        <div class="bars-wrapper">
                            <img src='{{ asset("assets/img/taste/wine4.png") }}' />
                            <a href="{{ route('taste-winery-events-page') }}">
                                <div class="bars-btn">Winery Experiences & Events</div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- EVENTS -->
            <section class="custom-section pr-3 pl-3">
                <div class="section-header">
                    <p class="title text-uppercase text-center font-barlow-regular">EVENTS</p>
                    <p class="content text-center font-barlow-regular">Events under that Category will be in CUBE shapes as above but below Header Events.</p>
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
    </taste-page>
@endsection