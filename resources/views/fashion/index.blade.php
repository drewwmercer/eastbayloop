@extends('layouts.main-page')

@section('content')
    <fashion-page inline-template>
        <main>
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/fashion-banner.jpeg', text: 'FASHION', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/fashion-banner.jpeg', text: 'FASHION', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/fashion-banner.jpeg', text: 'FASHION', class: 'explore-slider'}]">
            </slider>

            <section class="fashion-cards mb-2">
                <div class="fashion-header">
                    <h2>FASHION</h2>
                </div>
                <div class="row">
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <a href="{{ route('fashion-local-designer-page') }}">
                                <img src="http://testsite.eastbayloop.com/images/f1.jpeg" />
                                <div class="content">
                                    <h2 class="mb-3">Local Designers/Fashion Houses</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <a href="{{ route('fashion-spotlight-on-page') }}">
                                <img src="http://testsite.eastbayloop.com/images/f2.jpeg" />
                                <div class="content">
                                    <h2 class="mb-3">Spotlight On</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <a href="{{ route('fashion-product-page') }}">
                                <img src="http://testsite.eastbayloop.com/images/f5.jpeg" />
                                <div class="content">
                                    <h2 class="mb-3">Exclusively The Loops</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <a href="{{ route('fashion-product-page') }}">
                                <img src="http://testsite.eastbayloop.com/images/f4.jpeg" />
                                <div class="content">
                                    <h2 class="mb-3">New Arrivals</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <a href="{{ route('fashion-must-haves-page') }}">
                                <img src="http://testsite.eastbayloop.com/images/f6.jpeg" />
                                <div class="content">
                                    <h2 class="mb-3">Must Haves</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <a href="{{ route('fashion-hautre-coutre-page') }}">
                                <img src="http://testsite.eastbayloop.com/images/f3.jpeg" />
                                <div class="content">
                                    <h2 class="mb-3">Haute Couture</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fashion-tabs">
                <ul class="nav" id="pills-tab">
                    <li class="nav-item mr-2 mt-2">
                        <a class="nav-link active" id="pills-women-tab" data-toggle="pill" href="{{ route('fashion-product-page') }}" role="tab" aria-controls="pills-women" aria-selected="true">Women</a>
                    </li>
                    <li class="nav-item mr-2 mt-2">
                        <a class="nav-link" id="pills-men-tab" data-toggle="pill" href="{{ route('fashion-product-page') }}" role="tab" aria-controls="pills-men" aria-selected="false">Men</a>
                    </li>
                    <li class="nav-item mr-2 mt-2">
                        <a class="nav-link" id="pills-accessories-tab" data-toggle="pill" href="{{ route('fashion-product-page') }}" role="tab" aria-controls="pills-accessories" aria-selected="false">Teen</a>
                    </li>
                    <li class="nav-item mr-2 mt-2">
                        <a class="nav-link" id="pills-handbags-tab" data-toggle="pill" href="{{ route('fashion-product-page') }}" role="tab" aria-controls="pills-handbags" aria-selected="false">Kids</a>
                    </li>
                    <li class="nav-item mr-2 mt-2">
                        <a class="nav-link" id="pills-shoes-tab" data-toggle="pill" href="{{ route('fashion-product-page') }}" role="tab" aria-controls="pills-shoes" aria-selected="false">Pets</a>
                    </li>
                </ul>
                <h2 class="fashion-tab-title mt-5 mb-4">CUSTOMER FAVORITES</h2>
                <div class="tab-content mt-3" >
                    <div class="tab-pane fade show active" id="pills-women" role="tabpanel" aria-labelledby="pills-women-tab">
                        <div class="row cards-row m-0">
                            @for($i = 1; $i < 4; $i++)
                                <div class="fashion-tab-card col-md-4 p-0">
                                    <div class="fashion-tab-wrapper">
                                        <a href="{{ route('fashion-per-product-page') }}">                                        
                                            <div class="image-header">
                                                <img src="http://testsite.eastbayloop.com/images/woman{{ $i }}.jpeg"/>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </section>

             <!-- EVENTS -->
             <section class="custom-section">
                <div class="section-header">
                    <p class="title text-uppercase text-center font-barlow-regular">UPCOMING FASHION EVENTS</p>
                    <p class="accurate-title font-barlow-regular text-center"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, mi a blandit sollicitudin,
                                eros neque sodales felis.</p>
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
    </fashion-page>
@endsection