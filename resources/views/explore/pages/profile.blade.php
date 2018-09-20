@extends('layouts.main-page')

@section('content')
    <profile-page inline-template>
        <main class="adventure-profile-page">
            <slider :data="[{img: '{{ asset('assets/img/sliders/adventure-profile.png') }}', text: 'Client Profile - Adventure', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/adventure-profile.png') }}', text: 'Client Profile - Adventure', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/adventure-profile.png') }}', text: 'Client Profile - Adventure', class: 'explore-slider'}]">
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
                    <div class="info col-md-4 col-sm-12">
                        <h2 class="title text-right">
                            <a class="" href="#"> </a>                        
                        </h2>

                        <div class="info-block">
                            <div class="info-title">Contact Details</div>
                            <div class="col-md-12 col-sm-12 info-details">
                                <div class="row pt-0 pb-0">
                                    <div class="col-md-1">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="col-md-11">
                                        445 Mount Eden Road, Mount Eden Auckland
                                    </div>     
                                </div>
                                <div class="row pt-0 pb-0">
                                    <div class="col-md-1">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div class="col-md-11">
                                        Monday - Friday   8AM - 9PM </br>
                                        Saturday - Sunday  1PM - 10PM
                                    </div>     
                                </div>
                                <div class="row pt-0 pb-0">
                                    <div class="col-md-1">
                                        <i class="fa fa-phone"></i> 
                                    </div>
                                    <div class="col-md-11">
                                        123 4567 8901 / 123 4567 8901
                                    </div> 
                                </div>  
                                <div class="row pt-0 pb-0">
                                    <div class="col-md-1">
                                        <i class="fa fa-dribbble"></i>
                                    </div>
                                    <div class="col-md-11">
                                         www.website.com
                                    </div> 
                                </div>                                                                                              
                            </div>
                            <div class="info-title mt-2">Social Media</div> 
                            <div class="col-md-12 col-sm-12 info-social mb-0 p-0">
                                <div class="w-100 mt-3 facebook text-center "><i class="fa fa-facebook"></i></div>
                                <div class="w-100 mt-2 twitter text-center"><i class="fa fa-twitter"></i></div>
                                <div class="w-100 mt-2 mb-3 youtube text-center"><i class="fa fa-youtube"></i></div>                                
                            </div>                          
                        </div>
                    </div>
                </div>
            </section>
            <section class="our-services">
                <h2>Our Services</h2>
                <div class="row m-0">
                    <div class="service-card col-md-4 col-sm-12 mb-4 pr-1 pl-1">
                        <div class="service-wrapper">
                            <img src="http://testsite.eastbayloop.com/images/adventure1.png" />
                            <span class="text">Service 1</span>
                        </div>
                    </div>
                    <div class="service-card col-md-4 col-sm-12 mb-4 pl-1 pr-1">
                        <div class="service-wrapper">
                            <img src="http://testsite.eastbayloop.com/images/adventure2.png" />
                            <span class="text">Service 2</span>
                        </div>
                    </div>
                    <div class="service-card col-md-4 col-sm-12 mb-4 pl-1 pr-1">
                        <div class="service-wrapper">
                            <img src="http://testsite.eastbayloop.com/images/adventure3.png" />
                            <span class="text">Service 3</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="our-services mb-4">
                <h2>Image Gallery</h2>
                <div class="row m-0">
                    @for($i = 1; $i < 6; $i++)
                        <div class="service-card adventure-service-card col mb-2 pl-1 pr-1">
                            <div class="service-wrapper">
                                <img src="http://testsite.eastbayloop.com/images/adventure{{ $i }}.png" />
                            </div>
                        </div>
                    @endfor
                </div>
            </section>
            <section class="our-events mb-4">
                <h2>Events</h2>
                <div class="row p-0 m-0">
                    @for($i = 1, $j = 2; $i < 6; $i++, $j++)
                        @php
                            $j = $j > 4 ? $j - 3 : $j;
                        @endphp
                        <div class="col m-upcoming-event-card mb-4 pl-1 pr-1">
                            <div class="m-upcoming-event-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/events/event' . $j . '.png') }}" />
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
            </section>
        </main>
    </profile-page>
@endsection