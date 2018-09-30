@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/taste.png') }}', text: 'Photo Gallery and Video Capability Slider', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/taste.png') }}', text: 'Photo Gallery and Video Capability Slider', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/taste.png') }}', text: 'Photo Gallery and Video Capability Slider', class: 'explore-slider'}]">
            </slider>

            <section class="profile-page music-show-page">
                <h2 class="title text-center">
                    <a class="black-btn mr-5" href="#">Book Your Party</a>
                    <a class="black-btn ml-5" href="#">Let Us Cater For You!</a>                    
                </h2>
                <div class="row">
                    <div class="description col-md-8 col-sm-12 mb-4">
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
                            <div class="col-md-12 p-0 row m-0">
                                <div class="reserve-card col-md-6">
                                    <div class="reserve-wrapper">
                                        <img src="{{ asset('assets/img/taste/reserve.png') }}" />
                                    </div>
                                </div>
                                <div class="reserve-btns col-md-6 text-center align-items-center justify-content-center d-flex flex-column">
                                    <a class="black-btn w-100 d-block" href="#">Meet the Chef</a>
                                    <a class="black-btn w-100 mt-5 d-block" href="#">View Our Menu</a>
                                </div>
                            </div>
                        </div>
                        <h2 class="medium-title text-left font-barlow-bold mt-4 mb-4 text-black">Events for the Restaurant</h2>
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
                    <div class="right-side col-md-4 col-sm-12 p-0 m-0 pt-2 pl-4 mb-2">
                    <div class="col-md-12 p-0 m-0 main-col pb-2 mt-2 mb-4">
                            <div class="info-title mt-2">Make a Reservation Now</div> 
                            <div class="col-md-12 col-sm-12 row info-cards justify-content-center align-items-center m-0 mb-0 p-2 pt-2 pb-4">
                                <h2 class="reserv-title text-center mb-2ss">Reserve your dates now via:</h2>
                                <div class="justify-content-center align-items-center m-0">
                                    <div class="justify-content-center align-items-center cursor-pointer row m-0">
                                        <div class="col-md-1 reserv-icon pr-3">
                                            <i class="fa fa-dribbble"></i>
                                        </div>
                                        <div class="col-md-10 reserv-text pl-3 text-center">
                                            www.website.com
                                        </div> 
                                    </div>
                                    <div class="justify-content-center align-items-center cursor-pointer row m-0">
                                        <div class="col-md-12 mt-3 reserv-text pl-3 text-center">
                                            <img class="mr-3" src="{{ asset('assets/img/taste/yelp.png') }}" />
                                            Yelp
                                        </div> 
                                    </div>
                                    <div class="justify-content-center align-items-center cursor-pointer row m-0">
                                        <div class="col-md-12 mt-3 reserv-text pl-3 text-center">
                                            <img class="mr-3" src="{{ asset('assets/img/taste/open-table.png') }}" />
                                            Open Table
                                        </div> 
                                    </div>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-12 p-0 m-0 main-col pb-2 mt-2">
                            <div class="info-title mt-2">Social Media Feed</div> 
                            <div class="col-md-12 col-sm-12 info-social mb-0 p-0 pt-3">
                                <div class="w-100 mt-2 facebook text-center mt-4"><i class="fa fa-facebook"></i></div>
                                <div class="w-100 mt-2 twitter text-center"><i class="fa fa-twitter"></i></div>
                                <div class="w-100 mt-2 youtube text-center"><i class="fa fa-youtube"></i></div>                                
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </taste-page>
@endsection