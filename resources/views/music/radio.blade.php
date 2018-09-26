@extends('layouts.main-page')

@section('content')
    <music-page inline-template>
        <main>
            <slider :radio="true" :data="[{img: '{{ asset('assets/img/sliders/radio.png') }}', text: 'RADIO', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/radio.png') }}', text: 'RADIO', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/radio.png') }}', text: 'RADIO', class: 'explore-slider'}]">
            </slider>

            <section class="radio-page">
                <section class="main-radio row m-0">
                    <div class="col-md-8 radio-program">
                        <h2 class="program-title">current radio program / SHOW title</h2>
                        <div class="radio-card col-md-12 p-0 m-0">
                            <div class="radio-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/music/radiopro.png') }}" />
                                </div>
                                <div class="content">
                                    <p class="radio-text">Description of the currently playing radio program. consectetur adipiscing elit. Sed semper velit pellentesque purus porttitor rhoncus. Mauris commodo mattis ligula eu porttitor. Eu leo lectus, venenatis eu efficitur et, venenatis lobortis eros. </p>
                                    <p class="radio-text">Donec fringilla blandit auctor.  Sed semper velit pellentesque purus porttitor rhoncus. Mauris commodo mattis ligula eu porttitor. Eu leo lectus, venenatis eu efficitur et, venenatis lobortis eros. Donec fringilla blandit auctor.  Eu leo lectus, venenatis eu efficitur et, venenatis lobortis eros. Donec fringilla blandit auctor.</p>
                                    <a class="radio-rm" href="#">Read more...</a>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 radio-schedule">
                        <div class="schedule-wrapper">
                            <h2 class="schedule-title">Today’s Schedule</h2>
                            <div class="row m-0 mt-3 mb-2">
                                <div class="col-md-12 schedule-entity mb-2">
                                    <span class="schedule-time mr-3">6:00 AM</span>
                                    <span class="schedule-text">Program/show title</span>
                                </div>
                                <div class="col-md-12 schedule-entity mb-2">
                                    <span class="schedule-time mr-3">9:30 AM</span>
                                    <span class="schedule-text">Program/show title</span>
                                </div>
                                <div class="col-md-12 schedule-entity mb-2">
                                    <span class="schedule-time mr-3">12:00 PM</span>
                                    <span class="schedule-text">Program/show title</span>
                                </div>
                                <div class="col-md-12 schedule-entity mb-2">
                                    <span class="schedule-time mr-3">2:00 PM</span>
                                    <span class="schedule-text">Program/show title</span>
                                </div>
                                <div class="col-md-12 schedule-entity mb-2">
                                    <span class="schedule-time mr-3">4:00 PM</span>
                                    <span class="schedule-text">Program/show title</span>
                                </div>
                                <div class="col-md-12 schedule-entity mb-2">
                                    <span class="schedule-time mr-3">6:30 PM</span>
                                    <span class="schedule-text">Program/show title</span>
                                </div>
                                <div class="col-md-12 schedule-entity mb-2">
                                    <span class="schedule-time mr-3">8:00 PM</span>
                                    <span class="schedule-text">Program/show title</span>
                                </div>
                                <div class="col-md-12 schedule-entity mb-2">
                                    <span class="schedule-time mr-3">11:30 PM</span>
                                    <span class="schedule-text">Program/show title</span>
                                </div>
                            </div>
                            <a href="#" class="font-barlow-regular mt-3 font-19px text-black">View complete program schedule...</a>
                        </div>
                    </div>
                </section>
                <section class="mt-4">
                    <div class="scoop-cards pr-0 ">
                        <h2 class="h2-title text-center font-barlow-semi-regular mb-3">FEATURED TALENT</h2>
                        <div class="row m-0 pl-1 mt-2">
                            @for($i = 1; $i < 4; $i++)
                                <div class="col-md-4 p-0 mb-3 pr-3 scoop-card">
                                    <div class="scoop-wrapper p-2">
                                        <div class="image-header">
                                            <img src='http://testsite.eastbayloop.com/images/music-img{{ $i }}.jpeg' />
                                        </div>
                                        <div class="content mt-3">
                                            <h2 class="scoop-title">Artist/Band/DJ name</h2>
                                            <p class="scoop-text">Catherine felt trapped She had a key staff request a raise that was not earned That samestaff member That samestaff member decided...</p>
                                            <a class="scoop-rm" href="{{ route('music-dj-page') }}">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </section>
                <section class="music-news mb-4 w-100">
                    <h2 class="title mb-4 font-barlow-semi-regular">MUSIC NEWS</h2>

                    <div class="row m-0">
                        @for($i = 1; $i < 7; $i++)
                            <div class="col-md-4 m-news-card mb-2 p-0 pr-3">
                                <div class="m-news-wrapper">
                                    <div class="image-header position-relative col-md-4 m-0 p-0">
                                        <img src='{{ asset("assets/img/music/". ($i > 3 ? $i - 3 : $i) .".png") }}' />
                                    </div>
                                    <div class="content col-md-8 m-0 p-0 ml-2">
                                        <h2 class="news-title mb-0">Soldado Reveals His Tottenham Scoring Just Twice</h2>

                                        <div class="footer">
                                            <a class="m-btn" href="#">Music</a>
                                            <span class="date ml-3"> March 7, 2018</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </section>
                <section class="custom-section w-100">
                <div class="section-header">
                    <p class="title text-uppercase text-center font-barlow-semi-regular">FEATURED EVENTS</p>
                    <p class="accurate-title font-barlow-regular text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, mi a blandit sollicitudin,
                                eros neque sodales felis.</p>
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
                <div class="text-center w-100">
                    <a href="#" class="font-barlow-regular text-black font-19px">More featured events...</a>
                </div>
            </section>
            </section>
        </main>
    </music-page>
@endsection