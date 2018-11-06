@extends('layouts.main-page')

@section('content')
    <music-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/loop.png') }}', text: 'LOOP ENTERTAINMENT', class: 'explore-slider'}]">
            </slider>

            <section class="profile-page music-show-page">
                <h2 class="title">
                    <a class="black-btn pl-5 pr-5 mr-5" href="#">Contact Us</a>
                </h2>
                
                <div class="row">
                    <div class="description col-md-8 col-sm-12 mb-4">
                        <div class="main-text">
                            <h2>Business Description</h2>
                            <p>Welcome to Loop Entertainment!</p>
                            <p>Loop Entertainment, in short, is a destination for musical artists of all genres to have a valuable platform upon which to promote and share their art, both to local and worldwide audiences. Emerging and established musicians, DJ's, vocalists and more will now be equipped with the digital marketing, promotion, and management they need for success. This is achieved through a powerful partnership with The Loop Exclusive.</p>
                            <p>A Digital Music Label & Management company, Loop Entertainment was established after the launch of EastBayLoop.com in 2010, a site which has been passionately showcasing local artists since. From that seed was borne the notion that a local publication was needed that focused entirely upon promoting and managing hyper-local musical talent within the San Francisco Bay Area.</p>
                            <p>We are looking forward to blazing a new trail as the very first hyper-local entertainment company that supports Artists, Bands & DJ's and delivers diverse talents to music industry leaders, our business partners, and consumers around the world.</p>
                        </div>
                        <h2 class="title mt-4 pb-2 font-48px text-black">Upcoming Events</h2>
                        <div class="row p-0 m-0">
                            @for($i = 1; $i < 4; $i++)
                                <div class="col-md-4 m-upcoming-event-card mb-4 p-0 pr-3">
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
                    <div class="right-side col-md-4 col-sm-12 p-0 m-0 pl-4 mb-4">
                        <div class="col-md-12 p-0 m-0 ">
                            <img src="{{ asset('assets/img/music/1.png') }}" />
                            <div class="image-play position-relative mt-2">
                                <img src='{{ asset("assets/img/music/2.png") }}' />
                                <div class="mask">
                                    <span class="radio-play"><i class="fa fa-play"></i></span>
                                </div>
                            </div>
                                
                        </div>
                        <div class="col-md-12 p-0 m-0 main-col pb-2 mt-5">
                            <div class="info-title mt-2">Social Media</div> 
                            <div class="col-md-12 col-sm-12 info-social mb-5 p-0">
                                <div class="w-100 mt-5 facebook text-center cursor-pointer"><i class="fa fa-facebook"></i></div>
                                <div class="w-100 mt-2 twitter text-center cursor-pointer"><i class="fa fa-twitter"></i></div>
                                <div class="w-100 mt-2 youtube text-center mb-5 cursor-pointer"><i class="fa fa-youtube"></i></div>                                
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </music-page>
@endsection