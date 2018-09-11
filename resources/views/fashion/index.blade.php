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
                    <h2>Fashion</h2>
                </div>
                <div class="row">
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <a href="{{ route('fashion-product-page') }}">
                                <img src="http://testsite.eastbayloop.com/images/f1.jpeg" />
                                <div class="content">
                                    <h2 class="mb-3">Local Designers/Fashion Houses</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="default-card col-md-4 mb-4">
                        <div class="default-wrapper">
                            <a href="{{ route('fashion-product-page') }}">
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
                                <img src="http://testsite.eastbayloop.com/images/f3.jpeg" />
                                <div class="content">
                                    <h2 class="mb-3">Haute Couture</h2>
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
                                <img src="http://testsite.eastbayloop.com/images/f6.jpeg" />
                                <div class="content">
                                    <h2 class="mb-3">Shop Now!</h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="fashion-tabs">
                <ul class="nav" id="pills-tab" role="tablist">
                    <li class="nav-item mr-2 mt-2">
                        <a class="nav-link active" id="pills-women-tab" data-toggle="pill" href="#pills-women" role="tab" aria-controls="pills-women" aria-selected="true">Women's</a>
                    </li>
                    <li class="nav-item mr-2 mt-2">
                        <a class="nav-link" id="pills-men-tab" data-toggle="pill" href="#pills-men" role="tab" aria-controls="pills-men" aria-selected="false">Men's</a>
                    </li>
                    <li class="nav-item mr-2 mt-2">
                        <a class="nav-link" id="pills-accessories-tab" data-toggle="pill" href="#pills-accessories" role="tab" aria-controls="pills-accessories" aria-selected="false">Accessories</a>
                    </li>
                    <li class="nav-item mr-2 mt-2">
                        <a class="nav-link" id="pills-handbags-tab" data-toggle="pill" href="#pills-handbags" role="tab" aria-controls="pills-handbags" aria-selected="false">Handbags</a>
                    </li>
                    <li class="nav-item mr-2 mt-2">
                        <a class="nav-link" id="pills-shoes-tab" data-toggle="pill" href="#pills-shoes" role="tab" aria-controls="pills-shoes" aria-selected="false">Shoes</a>
                    </li>
                    <li class="nav-item mt-2">
                        <a class="nav-link" id="pills-sales-tab" data-toggle="pill" href="#pills-sales" role="tab" aria-controls="pills-sales" aria-selected="false">Sales</a>
                    </li>
                    
                </ul>
                <div class="tab-content mt-3" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-women" role="tabpanel" aria-labelledby="pills-women-tab">
                        <div class="row">
                            @for($i = 1; $i < 4; $i++)
                                <div class="fashion-tab-card col-md-4">
                                    <div class="fashion-tab-wrapper">
                                        <div class="image-header">
                                            <img src="http://testsite.eastbayloop.com/images/woman{{ $i }}.jpeg"/>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="tab-pane fade row" id="pills-men" role="tabpanel" aria-labelledby="pills-men-tab">
                        <div class="row">
                            @for($i = 1; $i < 4; $i++)
                                <div class="fashion-tab-card col-md-4">
                                    <div class="fashion-tab-wrapper">
                                        <div class="image-header">
                                            <img src="http://testsite.eastbayloop.com/images/f{{ $i }}.jpeg"/>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="tab-pane fade row" id="pills-accessories" role="tabpanel" aria-labelledby="pills-accessories-tab">
                        <div class="row">
                            @for($i = 1; $i < 4; $i++)
                                <div class="fashion-tab-card col-md-4">
                                    <div class="fashion-tab-wrapper">
                                        <div class="image-header">
                                            <img src="http://testsite.eastbayloop.com/images/pamper{{ $i }}.png"/>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="tab-pane fade row" id="pills-handbags" role="tabpanel" aria-labelledby="pills-handbags-tab">
                        <div class="row">
                            @for($i = 1; $i < 4; $i++)
                                <div class="fashion-tab-card col-md-4">
                                    <div class="fashion-tab-wrapper">
                                        <div class="image-header">
                                            <img src="http://testsite.eastbayloop.com/images/events-img{{ $i }}.jpeg"/>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="tab-pane fade row" id="pills-shoes" role="tabpanel" aria-labelledby="pills-shoes-tab">
                        <div class="row">
                            @for($i = 1; $i < 4; $i++)
                                <div class="fashion-tab-card col-md-4">
                                    <div class="fashion-tab-wrapper">
                                        <div class="image-header">
                                            <img src="http://testsite.eastbayloop.com/images/adventure{{ $i }}.png"/>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                    <div class="tab-pane fade row" id="pills-sales" role="tabpanel" aria-labelledby="pills-sales-tab">
                        <div class="row">
                            @for($i = 1; $i < 4; $i++)
                                <div class="fashion-tab-card col-md-4">
                                    <div class="fashion-tab-wrapper">
                                        <div class="image-header">
                                            <img src="http://testsite.eastbayloop.com/images/nightlife{{ $i }}.png"/>
                                        </div>
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
                    <p class="title text-uppercase text-center">FASHION EVENTS</p>
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