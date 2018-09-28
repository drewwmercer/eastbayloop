@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main>
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'CHEF’S CORNER', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'CHEF’S CORNER', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'CHEF’S CORNER', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <div class="row explore-header mb-3">
                    <h2 class="display-inline col-md-7">Chef’s Corner</h2>
                    <div class="filter-bar col-md-5">
                        <a class="filter-btn mr-3" href="#">Cuisine</a>
                        <a class="filter-btn mr-3" href="#">Find Filter</a>                        
                        <a class="filter-btn" href="#">Book Me For Your Event</a>
                    </div>
                </div>
                <div class="row">
                    @for($i = 1; $i < 13; $i++)
                        <div class="default-card col-md-4 mb-4">
                            <div class="default-wrapper">
                                <a href="{{ route('taste-chefs-corner-profile-page') }}">
                                    <img src='{{ asset("assets/img/taste/chef" . ($i > 6 ? $i - 6 : $i) .".png") }}' />
                                    <div class="content">
                                        <h2 class="mb-3">{{ 'Chef ' . $i }}</h2>
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
                    <p class="title text-uppercase text-center font-barlow-medium" >EVENTS</p>
                    <p class="content text-center font-barlow-regular mb-4">Events under that Category will be in CUBE shapes as above but below Header Events.</p>
                    <div class="row p-0 m-0">
                        @for($i = 2; $i < 10; $i++)
                            <div class="col-md-3 m-upcoming-event-card mb-4">
                                <div class="m-upcoming-event-wrapper">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/events/event' . ($i > 4 ? ($i > 7 ? $i - 5 : $i - 3) : $i) . '.png') }}" />
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
    </taste-page>
@endsection