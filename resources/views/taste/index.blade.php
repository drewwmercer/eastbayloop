@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main class="taste-page">
            <slider :data="[{img: '{{ asset('assets/img/sliders/taste.png') }}', text: 'Taste', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/taste.png') }}', text: 'Taste', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/taste.png') }}', text: 'Taste', class: 'explore-slider'}]">
            </slider>

            <section class="custom-section">
                <div class="section-header">
                    <p class="title text-uppercase text-left font-barlow-bold">Taste</p>
                    <p class="content text-left font-barlow-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius nulla ac ipsum pharetra, sodales euismod est rhoncus. Praesent nibh odio, rutrum quis tincidunt at, porta at magna.</p>
                </div>
                <div class="section-content container">
                    <div class="row">
                        <div class="taste-card text-center col-md-4 mt-3">
                            <div class="taste-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/taste-img1.jpeg" />
                                        <span class="text text-uppercase">Restaurants</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none taste-read-more" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="taste-card text-center col-md-4 mt-3">
                            <div class="taste-wrapper">
                                <div class="image-header">
                                    <a href="{{ route('taste-chefs-corner-page') }}">
                                        <img src="http://testsite.eastbayloop.com/images/taste-img2.jpeg" />
                                        <span class="text text-uppercase">Chef Corner</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none taste-read-more" href="{{ route('taste-chefs-corner-page') }}">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="taste-card text-center col-md-4 mt-3">
                            <div class="taste-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/taste-img3.jpeg" />
                                        <span class="text text-uppercase">Mixology</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none taste-read-more" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="taste-card text-center col-md-4 mt-3">
                            <div class="taste-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/taste-img1.jpeg" />
                                        <span class="text text-uppercase">COFFEE SHOPS / BAKERIES</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none taste-read-more" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="taste-card text-center col-md-4 mt-3">
                            <div class="taste-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/taste-img2.jpeg" />
                                        <span class="text text-uppercase">PRIVATE EVENT BOOKINGS</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none taste-read-more" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="taste-card text-center col-md-4 mt-3">
                            <div class="taste-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/taste-img3.jpeg" />
                                        <span class="text text-uppercase">FOOD TRUCKS UNITE</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none taste-read-more" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="banner-section">
                <div class="col-md-12 banner-card p-0">
                    <img src="{{ asset('assets/img/taste/1.png') }}" />
                    <a href="#">
                        <div class="mask">
                            <h2>Wine Loop!</h2>
                            <span>Your Exclusive Winery Experience</span>
                        </div>
                    </a>                    
                </div>
                <div class="col-md-12 banner-card p-0">
                    <img src="{{ asset('assets/img/taste/2.png') }}" />
                    <a href="{{ route('taste-bar-page') }}">
                        <div class="mask">
                            <h2>Bars/Breweries/Distilleries</h2>
                        </div>
                    </a>                    
                </div>
                <div class="col-md-12 banner-card p-0">
                    <img src="{{ asset('assets/img/taste/3.png') }}" />
                    <div class="mask">
                    </div>
                </div>
            </section>

            <!-- EVENTS -->
            <section class="custom-section">
                <div class="section-header">
                    <p class="title text-uppercase text-left font-barlow-bold">EVENTS</p>
                    <p class="content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius nulla ac ipsum pharetra, sodales euismod est rhoncus. Praesent nibh odio, rutrum quis tincidunt at, porta at magna.</p>
                    <div class="row p-0 m-0">
                        @for($i = 1, $j = 1; $i < 5; $i++, $j++)
                            @php 
                                $j = $j > 3 ? $j - 3 : $j; 
                            @endphp
                            <div class="col-md-3 m-upcoming-event-card mb-4">
                                <div class="m-upcoming-event-wrapper">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/music/' . $j . '.png') }}" />
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
    </taste-page>
@endsection