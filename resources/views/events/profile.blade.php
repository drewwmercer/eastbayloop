@extends('layouts.main-page')

@section('content')
    <events-page inline-template>
        <main>
            <slider :carousel="true" :data="[{img: '{{ asset('assets/img/sliders/events-profile.png') }}', text: 'Event Profile', class: 'explore-slider'}]">
            </slider>

            <section class="profile-page">
                <div class="row m-0">
                    <div class="header w-100">
                        <div>
                            <h2 class="title">Event Name</h2>
                        </div>
                        <div>
                        <a href="{{ route('events-products-page') }}" class="black-btn font-20px">Book Table Service</a>
                        </div>
                    </div>
                    <div class="description col-md-8 col-sm-12 mb-4 p-0">
                        <div class="main-text">
                            <h2>Event Description</h2>
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
                        <div class="tickets-block mt-4">
                            <div class="tickets-header">
                                Tickets
                            </div>
                            <div class="ticket-card">
                                <div class="ticket-wrapper">
                                    <div class="content">
                                        <h2 class="title">DAY PASS</h2>
                                        <h3 class="date">FOR OCT 23, 2018</h3>
                                        <h3 class="price">$49</h3>
                                    </div>
                                    <div class="buy-btn-block">
                                        <a class="buy-btn" href="#">Buy a ticket</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket-card">
                                <div class="ticket-wrapper">
                                    <div class="content">
                                        <h2 class="title">DAY PASS</h2>
                                        <h3 class="date">FOR OCT 24, 2018</h3>
                                        <h3 class="price">$49</h3>
                                    </div>
                                    <div class="buy-btn-block">
                                        <a class="buy-btn" href="#">Buy a ticket</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ticket-card">
                                <div class="ticket-wrapper">
                                    <div class="content">
                                        <h2 class="title">2 DAY PASS</h2>
                                        <h3 class="price">$79</h3>
                                    </div>
                                    <div class="buy-btn-block">
                                        <a class="buy-btn" href="#">Buy a ticket</a>
                                    </div>
                                </div>
                            </div>
                            <div class="tickets-footer">
                                Sales end on October 20, 2018
                            </div>
                        </div>
                    </div>
                    <div class="info col-md-4 col-sm-12">
                        <div class="info-block">
                            <div class="info-title">Event Details</div>
                            <div class="col-md-12 col-sm-12 info-details">
                                <div class="row pt-0 pb-0">
                                    <div class="col-md-1">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                    <div class="col-md-11">
                                        Fort Mason Center </br>
                                        2 Marina Boulevard </br>
                                        San Francisco, CA 94123 </br>
                                        United States </br>
                                        <a href="#">View map</a>
                                    </div>     
                                </div>
                                <div class="row pt-0 pb-0">
                                    <div class="col-md-1">
                                        <i class="fa fa-calendar-o"></i>
                                    </div>
                                    <div class="col-md-11">
                                        Oct 23, 2018  12PM – 4:30PM </br>
                                        Oct 23, 2018  12PM – 7PM
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
            <section class="our-services mb-4">
                <h2 class="text-center">Image Gallery</h2>
                <div class="row m-0">
                    @for($i = 1; $i < 7; $i++)
                        <div class="service-card col-md-4 col-sm-12 p-1 pb-0">
                            <div class="service-wrapper">
                                <img src='{{ asset("assets/img/adventure/adventure$i.png") }}' />
                            </div>
                        </div>
                    @endfor
                </div>
            </section>
             <!-- EVENTS -->
             <events-widget :data='{titleClass: "text-center"}'></events-widget>
        </main>
    </events-page>
@endsection