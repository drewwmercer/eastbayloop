@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/client-banner.jpeg') }}', text: 'Mixology', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/client-banner.jpeg') }}', text: 'Mixology', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/client-banner.jpeg') }}', text: 'Mixology', class: 'explore-slider'}]">
            </slider>

            <section class="mixology-page mb-4">
                <div class="row p-0">
                    <div class="col-md-8 p-0 left-side">
                        @for($i = 1; $i < 3; $i++)
                            <div class="col-md-12 mixology-card">
                                <div class="mixology-wrapper">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/sliders/client-banner.jpeg') }}" />
                                    </div>
                                    <div class="content">
                                        <h3 class="pre-desc">Lorem ipsum / dolor sit amet / consectetur</h3>
                                        <h2 class="mixology-title">Enenatis lobortis eros. Donec fringilla blandit</h2>
                                        <p class="text">consectetur adipiscing elit. Sed semper velit pellentesque purus porttitor rhoncus. Mauris commodo mattis ligula eu porttitor. Eu leo lectus, venenatis eu efficitur et, venenatis lobortis eros. Donec fringilla blandit auctor. Orci varius natoque penatibus et magnis dis parturient monets, nascetur ridiculus mus.</p>
                                    </div>
                                    <div class="date mb-5">
                                        <span class="text">
                                            OCT 
                                            <span>23</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="col-md-4 p-0 right-side pl-2">
                        <div class="desc">
                            <h2 class="desc-title">Lorem Ipsum</h2>
                            <p class="desc-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, mi a blandit sollicitudin, eros neque sodales felis, nec consequat ex urna eu ipsum. Fusce vel neque id tortor tempor.</p>
                        </div>
                        <h2 class="title font-barlow-bold mb-4">Upcoming Events</h2>
                        @for($i = 1; $i < 4; $i++)
                            <div class="upcoming-event-card col-12 mb-2 pl-0">
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

                        <div class="popular-posts mt-4">
                            <h2 class="font-barlow-bold mb-4">Popular Posts</h2>
                            <div class="row p-0">
                                @for($i = 1; $i < 5; $i++)
                                    <div class="col-md-12 row">
                                        <div class="col-md-4 m-0 mb-3 pr-0">
                                            <img src='{{ asset("assets/img/adventure/adventure$i.png") }}' />
                                        </div>
                                        <div class="col-md-8 popular-content pl-2">
                                            <h2 class="popular-title mb-0">Lorem ipsum dolor sit amet</h2>
                                            <p class="popular-text">consectetur adipiscing elit</p>
                                        </div>
                                    </div>
                                    @endfor                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </taste-page>
@endsection