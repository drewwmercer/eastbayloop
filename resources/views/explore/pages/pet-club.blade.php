@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/pet3.png') }}', text: 'Pet Club', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/pet1.png') }}', text: 'Pet Club', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/pet2.png') }}', text: 'Pet Club', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <div class="row explore-header mb-3">
                    <h2 class="display-inline col-md-8">Pet Club</h2>
                    <div class="filter-bar col-md-4">
                        <span>
                            <select>
                                <option value="Select">Location Filter</option>
                                <option value="bar1">Bar 1</option>
                                <option value="bar2">Bar 2</option>
                            </select>
                        </span>
                        <a class="filter-btn ml-3" href="#">Find Filter</a>
                    </div>
                </div>
                <div class="row">
                    @for($i = 1; $i < 10; $i++)
                        <div class="default-card col-md-4 mb-4">
                            <div class="default-wrapper">
                                <a href="{{ route('explore-profile-page') }}">
                                    <div class="image-wrapper">
                                        <div class="mask"></div>
                                        <img src='{{ asset("assets/img/pets/pet$i.png") }}' />
                                    </div>
                                    <div class="content">
                                        <h2 class="mb-3">Pet Club {{ $i }}</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>

            <!-- EVENTS -->
            <section class="custom-section">
                <div class="section-header">
                    <p class="title text-uppercase text-center">EVENTS</p>
                    <p class="content text-center">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
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
            </section>
        </main>
    </explore-page>
@endsection