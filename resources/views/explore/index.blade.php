@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main>
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/banner4.jpeg', text: 'EXPLORE', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <div class="row">
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img1.png"/>
                            </div>
                            <div class="content">
                                <h2>ADVENTURE</h2>
                                <a class="read-more-btn mb-3 float-none" href="{{ route('explore-subpage', ['category' => 'adventure']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img2.png"/>
                            </div>
                            <div class="content">
                                <h2>NIGHTLIFE/DAYCLUB</h2>
                                <a class="read-more-btn mb-3 float-none" href="{{ route('explore-subpage', ['category' => 'nightlife']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img3.png"/>
                            </div>
                            <div class="content">
                                <h2>PET CLUB</h2>
                                <a class="read-more-btn mb-3 float-none" href="{{ route('explore-subpage', ['category' => 'pet Club']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img4.png"/>
                            </div>
                            <div class="content">
                                <h2>PAMPER</h2>
                                <a class="read-more-btn mb-3 float-none" href="{{ route('explore-subpage', ['category' => 'pamper']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img5.png"/>
                            </div>
                            <div class="content">
                                <h2>GOLF/ RECREATION</h2>
                                <a class="read-more-btn mb-3 float-none" href="{{ route('explore-subpage', ['category' => 'golf & Recreation']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img6.png"/>
                            </div>
                            <div class="content">
                                <h2>LOOP KIDS</h2>
                                <a class="read-more-btn mb-3 float-none" href="{{ route('explore-subpage', ['category' => 'loop Kids']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img7.png"/>
                            </div>
                            <div class="content">
                                <h2>LOCAL SHOPS AND SHOPPING</h2>
                                <a class="read-more-btn mb-3 float-none" href="{{ route('explore-subpage', ['category' => 'local Shops and Shopping']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img8.png"/>
                            </div>
                            <div class="content">
                                <h2>FITNESS</h2>
                                <a class="read-more-btn mb-3 float-none" href="{{ route('explore-subpage', ['category' => 'fitness']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="http://testsite.eastbayloop.com/images/explore-img9.png"/>
                            </div>
                            <div class="content">
                                <h2>ART</h2>
                                <a class="read-more-btn mb-3 float-none" href="{{ route('explore-subpage', ['category' => 'art']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="custom-section">
                <div class="section-header">
                    <p class="title text-uppercase text-center">EVENTS</p>
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