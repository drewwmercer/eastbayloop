@extends('layouts.main-page')

@section('content')
    <fashion-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/music.png') }}', text: 'Artists - Bands - DJs', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/music.png') }}', text: 'Artists - Bands - DJs', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/music.png') }}', text: 'Artists - Bands - DJs', class: 'explore-slider'}]">
            </slider>

            <section class="profile-page music-show-page">
                <h2 class="title text-left">
                    <a class="black-btn pl-5 pr-5" href="#">Contact Us</a>
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
                        </div>
                        <h2 class="title mt-4 mb-4">UPCOMING EVENTS</h2>
                        <div class="row p-0 m-0">
                            @for($i = 1; $i < 4; $i++)
                                <div class="col-md-4 m-upcoming-event-card mb-4">
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
                    <div class="right-side col-md-4 col-sm-12 p-0 m-0 pl-4">
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
                            <div class="col-md-12 col-sm-12 info-social mb-0 p-0">
                                <div class="w-100 mt-2 facebook text-center "><i class="fa fa-facebook"></i></div>
                                <div class="w-100 mt-2 twitter text-center"><i class="fa fa-twitter"></i></div>
                                <div class="w-100 mt-2 youtube text-center"><i class="fa fa-youtube"></i></div>                                
                            </div> 
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </music-page>
@endsection