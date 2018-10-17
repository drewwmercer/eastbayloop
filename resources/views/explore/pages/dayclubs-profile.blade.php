@extends('layouts.main-page')

@section('content')
    <profile-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/profile/slider.png') }}', text: 'ALL DAYCLUBS/PARTIES', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/profile/slider.png') }}', text: 'ALL DAYCLUBS/PARTIES', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/profile/slider.png') }}', text: 'ALL DAYCLUBS/PARTIES', class: 'explore-slider'}]">
            </slider>

            <section class="profile-page">
                <div class="row">
                    <div class="description col-md-8 col-sm-12 mb-4">
                        <h2 class="title">Client Name</h2>
                        <div class="main-text">
                            <h2>Business Description</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, mi a blandit sollicitudin,
                                eros neque sodales felis, nec consequat ex urna eu ipsum. Fusce vel neque id tortor tempor pharetra
                                eu non urna. Sed sed metus euismod, varius sem ac, cursus quam. Nulla eu orci sit amet purus aliquam 
                                gravida at lacinia odio. Duis non erat sem. Sed dignissim scelerisque libero, in ornare ligula aliquam vel.
                                Fusce rutrum justo ac egestas malesuada. Pellentesque mi odio, suscipit in orci in, tincidunt semper enim.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, mi a blandit sollicitudin, eros 
                                neque sodales felis, nec consequat ex urna eu ipsum. Fusce vel neque id tortor tempor pharetra eu non urna. 
                                Sed sed metus euismod, varius sem ac, cursus quam. Nulla eu orci sit amet purus aliquam gravida at lacinia odio.
                                Duis non erat sem. Sed dignissim scelerisque libero, in ornare ligula aliquam vel. Fusce rutrum justo ac egestas
                                malesuada. Pellentesque mi odio, suscipit in orci in, tincidunt semper enim. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. 
                            </p>
                        </div>
                    </div>
                    <div class="events col-md-4 col-sm-12">
                        <h2 class="title">Upcoming Events</h2>
                        @for($i = 1; $i < 5; $i++)
                            <div class="upcoming-event-card col-12 mb-2">
                                <div class="event-wrapper row">
                                    <div class="image-header col-md-3">
                                        <a href="#">
                                            <img src='{{ asset("assets/img/events/events-img$i.jpeg") }}' />
                                        </a>
                                    </div>
                                    <div class="content col-md-9">
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
            <section class="our-services">
                <h2>Our Services</h2>
                <div class="row m-0">
                    <div class="service-card col-md-4 col-sm-12 mb-4 pr-1 pl-1">
                        <div class="service-wrapper">
                            <img src="{{ asset('assets/img/profile/dayclub_service1.png') }}" />
                            <span class="text">Table Bottle Service</span>
                        </div>
                    </div>
                    <div class="service-card col-md-4 col-sm-12 mb-4 pr-1 pl-1">
                        <div class="service-wrapper">
                            <img src="{{ asset('assets/img/profile/dayclub_service2.png') }}" />
                            <span class="text">Group Admision</span>
                        </div>
                    </div>
                    <div class="service-card col-md-4 col-sm-12 mb-4 pr-1 pl-1">
                        <div class="service-wrapper">
                            <img src="{{ asset('assets/img/profile/dayclub_service3.png') }}" />
                            <span class="text">Private Party</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="our-services mb-4">
                <h2>Image Gallery</h2>
                <div class="row m-0">
                    @for($i = 1; $i < 7; $i++)
                        <div class="service-card col-md-4 col-sm-12 mb-2 pr-1 pl-1">
                            <div class="service-wrapper">
                                <img src='{{ asset("assets/img/profile/gallery$i.png") }}' />
                            </div>
                        </div>
                    @endfor
                </div>
            </section>
        </main>
    </profile-page>
@endsection