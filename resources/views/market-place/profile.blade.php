@extends('layouts.main-page')

@section('content')
    <market-place-page inline-template>
        <main>
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/banner5.jpeg', text: 'LOCAL MARKETPLACE', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner5.jpeg', text: 'LOCAL MARKETPLACE', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner5.jpeg', text: 'LOCAL MARKETPLACE', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards custom-section">
                <div class="row explore-header mb-3">
                    <h2 class="display-inline col-md-8">LOCAL MARKETPLACE</h2>
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
                <div class="section-content ">
                    <div class="row">
                        @for($i = 1; $i < 4; $i++)
                            <div class="market-card text-left col-md-4 mt-3">
                                <div class="market-wrapper p-0">
                                    <div class="image-header">
                                        <a href="{{ route('market-place-retails-page') }}">
                                            <img src="http://testsite.eastbayloop.com/images/place-img1.jpeg" />
                                            <span class="text text-uppercase">Acme Bread Company</span>
                                        </a>
                                    </div>
                                    <div class="content pt-4">
                                        <a class="read-more-link" href="{{ route('market-place-retails-page') }}">READ MORE</a>                            
                                    </div>
                                </div>
                            </div>
                            <div class="market-card text-left col-md-4 mt-3">
                                <div class="market-wrapper p-0">
                                    <div class="image-header">
                                        <a href="{{ route('market-place-retails-page') }}">
                                            <img src="http://testsite.eastbayloop.com/images/place-img2.jpeg" />
                                            <span class="text text-uppercase">American Eatery at Prather Ranch</span>
                                        </a>
                                    </div>
                                    <div class="content pt-4">
                                        <a class="read-more-link" href="{{ route('market-place-retails-page') }}">READ MORE</a>                            
                                    </div>
                                </div>
                            </div>
                            <div class="market-card text-left col-md-4 mt-3">
                                <div class="market-wrapper p-0">
                                    <div class="image-header">
                                        <a href="{{ route('market-place-retails-page') }}">
                                            <img src="http://testsite.eastbayloop.com/images/place-img3.jpeg" />
                                            <span class="text text-uppercase">Bay Crossings</span>
                                        </a>
                                    </div>
                                    <div class="content pt-4">
                                        <a class="read-more-link " href="{{ route('market-place-retails-page') }}">READ MORE</a>                            
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </section>

            <!-- EVENTS -->
            <events-widget></events-widget>
        </main>
    </market-place-page>
@endsection