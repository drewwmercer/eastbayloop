@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main>
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/banner7.jpeg', text: '{{ $category }}', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner7.jpeg', text: '{{ $category }}', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner7.jpeg', text: '{{ $category }}', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <div class="row">
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <img src="http://testsite.eastbayloop.com/images/adventure1.png" />
                            <div class="content">
                                <h2 class="mb-3">{{ $category }} 1</h2>
                                <a class="sell-btn" href="#">(Sell Tickets)</a>
                            </div>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <img src="http://testsite.eastbayloop.com/images/adventure2.png" />
                            <div class="content">
                                <h2 class="mb-3">{{ $category }} 2</h2>
                                <a class="sell-btn" href="#">(Sell Tickets)</a>
                            </div>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <img src="http://testsite.eastbayloop.com/images/adventure3.png" />
                            <div class="content">
                                <h2 class="mb-3">{{ $category }} 3</h2>
                                <a class="sell-btn" href="#">(Sell Tickets)</a>
                            </div>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <img src="http://testsite.eastbayloop.com/images/adventure4.png" />
                            <div class="content">
                                <h2 class="mb-3">{{ $category }} 4</h2>
                                <a class="sell-btn" href="#">(Sell Tickets)</a>
                            </div>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <img src="http://testsite.eastbayloop.com/images/adventure5.png" />
                            <div class="content">
                                <h2 class="mb-3">{{ $category }} 5</h2>
                                <a class="sell-btn" href="#">(Sell Tickets)</a>
                            </div>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <img src="http://testsite.eastbayloop.com/images/adventure6.png" />
                            <div class="content">
                                <h2 class="mb-3">{{ $category }} 6</h2>
                                <a class="sell-btn" href="#">(Sell Tickets)</a>
                            </div>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <img src="http://testsite.eastbayloop.com/images/adventure7.png" />
                            <div class="content">
                                <h2 class="mb-3">{{ $category }} 7</h2>
                                <a class="sell-btn" href="#">(Sell Tickets)</a>
                            </div>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <img src="http://testsite.eastbayloop.com/images/adventure8.png" />
                            <div class="content">
                                <h2 class="mb-3">{{ $category }} 8</h2>
                                <a class="sell-btn" href="#">(Sell Tickets)</a>
                            </div>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <img src="http://testsite.eastbayloop.com/images/adventure9.png" />
                            <div class="content">
                                <h2 class="mb-3">{{ $category }} 9</h2>
                                <a class="sell-btn" href="#">(Sell Tickets)</a>
                            </div>
                        </div>
                    </div>
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