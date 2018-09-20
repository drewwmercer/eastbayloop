@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main class="explore-page">
            <slider :data="[{img: '{{ asset('assets/img/sliders/adventure-profile.png') }}', text: 'EXPLORE', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <h2 class="explore-title text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sapien enim, fringilla et consequat at, interdum eu augue. Pellentesque ligula urna, ultricies in bibendum eget, pharetra at nibh. </h2>
                <div class="row">
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img1.png"/>
                            </div>
                            <div class="content">
                                <h2>ADVENTURE</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'adventure']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img2.png"/>
                            </div>
                            <div class="content">
                                <h2>NIGHTLIFE/DAYCLUB</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'nightlife']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img3.png"/>
                            </div>
                            <div class="content">
                                <h2>PET CLUB</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'pet Club']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img4.png"/>
                            </div>
                            <div class="content">
                                <h2>PAMPER</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'pamper']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img5.png"/>
                            </div>
                            <div class="content">
                                <h2>GOLF/ RECREATION</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'golf & Recreation']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img6.png"/>
                            </div>
                            <div class="content">
                                <h2>LOOP KIDS</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'loop Kids']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img7.png"/>
                            </div>
                            <div class="content">
                                <h2>LOCAL SHOPS AND SHOPPING</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'local Shops and Shopping']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img8.png"/>
                            </div>
                            <div class="content">
                                <h2>FITNESS</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'fitness']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img9.png"/>
                            </div>
                            <div class="content">
                                <h2>ART</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'art']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="custom-section">
                <div class="section-header">
                    <p class="title text-uppercase p-0">EVENTS</p>
                    <p class="accurate-title font-barlow-regular">Events under that Category will be in CUBE shapes as above but below Header Events.</p>                    
                    <div class="filter-bar">
                        <span>
                            <select >
                                <option value="Select">Filter events by interest</option>
                                <option value="bar1">Bar 1</option>
                                <option value="bar2">Bar 2</option>
                            </select>
                        </span>
                    </div>
                </div>
                <div class="section-content mt-4">
                    <div class="row p-0 m-0">
                        @for($i = 1; $i < 4; $i++)
                            <div class="col-md-4 m-upcoming-event-card mb-4 pl-1 pr-1">
                                <div class="m-upcoming-event-wrapper p-3 pb-0">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/events/event1.png') }}" />
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
    </explore-page>
@endsection