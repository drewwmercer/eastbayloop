@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main class="adventure-profile-page">
            <slider :data="[{img: '{{ asset('assets/img/sliders/bar.png') }}', text: 'Bar Name', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/bar.png') }}', text: 'Bar Name', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/bar.png') }}', text: 'Bar Name', class: 'explore-slider'}]">
            </slider>

            <section class="profile-page">
                <div class="row m-0">
                    <div class="header w-100">
                        <div>
                            <h2 class="title">Bar Name</h2>
                        </div>
                        <div>
                            <a href="#" class="black-btn font-20px mr-3">Make a Reservation</a>                            
                            <a href="#" class="black-btn font-20px mr-3">Book a Party!</a>                            
                            <a href="#" class="black-btn font-20px">Book a Tour!</a>
                        </div>
                    </div>
                    <div class="description col-md-8 col-sm-12 mb-4 p-0">
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
                            <p class="text-center pt-4">
                                <a href="#" class="black-btn font-20px m-auto">View our Menu</a>      
                            </p>                      
                        </div>
                        <div class="event-anonce w-100 mt-3">
                            <div class="anonce-wrapper w-100">
                                <h2 class="anonce-title">HAPPY HOUR!</h2>
                                <h2 class="anonce-text">Monday - Thursday  4-7 PM, Friday  11 AM - 7 PM </h2>
                                <h2 class="anonce-price">$5 Drinks and $5 Food</h2>
                            </div>
                        </div>
                    </div>
                    <div class="info col-md-4 col-sm-12">
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
                            <div class="col-md-12 col-sm-12 info-social mb-0 p-0 pt-5 pb-5">
                                <div class="w-100 mt-5 facebook text-center "><i class="fa fa-facebook"></i></div>
                                <div class="w-100 mt-3 twitter text-center"><i class="fa fa-twitter"></i></div>
                                <div class="w-100 mt-3 mb-5 youtube text-center"><i class="fa fa-youtube"></i></div>                                
                            </div>                          
                        </div>
                    </div>
                </div>
            </section>
            <section class="text-side-box">
                <div class="row m-0">
                    <div class="col-md-12 p-0 text-side-card">
                        <div class="text-side-wrapper row m-0">
                            <div class="image-header col-md-5 p-0">
                                <img src="{{ asset('assets/img/taste/b-profile-card.png') }}" />
                            </div>
                            <div class="content col-md-7 p-3">
                                <h2 class="card-title">FEATURED DRINK</h2>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas urna ex, iaculis non porttitor eget, pulvinar eu lorem. Nunc at consequat ante. Suspendisse nec ante blandit, condimentum sem ut, auctor mauris. Aliquam sit amet auctor odio.
                                </p>
                                <p class="card-text">
                                    Vestibulum elementum ullamcorper tortor, sed rhoncus felis. Phasellus tempor elit quis ex volutpat porttitor. Vivamus quis justo velit.
                                </p>
                                <div class="content-footer">
                                    <a href="#" class="card-btn">Read More...</a>
                                    <a href="#" class="card-btn">See More Recipes...</a>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="our-services">
                <h2 class="text-center font-myriad-regular">IMAGE AND VIDEO GALLERY</h2>
                <div class="row m-0">
                    <div class="service-card col mb-4 pr-1 pl-1">
                        <div class="service-wrapper">
                            <img src="{{ asset('assets/img/adventure/adventure1.png') }}" />
                            <span class="play-btn"><i class="fa fa-play"></i></span>
                        </div>
                    </div>
                    <div class="service-card col mb-4 pl-1 pr-1">
                        <div class="service-wrapper">
                            <img src="{{ asset('assets/img/adventure/adventure2.png') }}" />
                            <span class="play-btn"><i class="fa fa-play"></i></span>
                        </div>
                    </div>
                    <div class="service-card col mb-4 pl-1 pr-1">
                        <div class="service-wrapper">
                            <img src="{{ asset('assets/img/adventure/adventure3.png') }}" />
                        </div>
                    </div>
                    <div class="service-card col mb-4 pl-1 pr-1">
                        <div class="service-wrapper">
                            <img src="{{ asset('assets/img/adventure/adventure4.png') }}" />
                        </div>
                    </div>
                    <div class="service-card col mb-4 pl-1 pr-1">
                        <div class="service-wrapper">
                            <img src="{{ asset('assets/img/adventure/adventure5.png') }}" />
                        </div>
                    </div>
                </div>
            </section>
            <events-widget :data="{
                                      titleClass: 'text-center font-myriad-regular mb-0',
                                      descriptionClass: 'text-center font-myriad-regular font-weight-bold'
                                  }"
                           :large-cards="true"
            ></events-widget>
        </main>
    </taste-page>
@endsection