@extends('layouts.main-page')

@section('content')
    <market-place-page inline-template>
        <main>
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/banner5.jpeg', text: 'MARKETPLACE', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner5.jpeg', text: 'MARKETPLACE', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner5.jpeg', text: 'MARKETPLACE', class: 'explore-slider'}]">
            </slider>
            <section class="custom-section with-divider">
                <div class="section-header">
                    <div class="mt-4 marketplace-nav">
                        <a class="active" href="#">MAP</a>
                        <a href="#">MERCHANTS A TO Z </a>
                        <a href="#">FARM TO TABLE </a>
                        <a href="#">BEVERAGE </a>
                        <a href="#">EVENTS </a>                     
                        <a href="#">FOOD </a>                     
                        <a href="#">GOODS</a>                     
                        <a href="#">SWEETS</a>                     
                    </div>
                </div>
                <div class="section-content ">
                    <div class="row">
                        @for($i = 1; $i < 4; $i++)
                            <div class="market-card text-left col-md-4 mt-3">
                                <div class="market-wrapper p-0">
                                    <div class="image-header">
                                        <a href="{{ route('market-place-per-product-page') }}">
                                            <img src="http://testsite.eastbayloop.com/images/place-img1.jpeg" />
                                            <span class="text text-uppercase">Acme Bread Company</span>
                                        </a>
                                    </div>
                                    <div class="content pt-4">
                                        <a class="read-more-link" href="{{ route('market-place-per-product-page') }}">READ MORE</a>                            
                                    </div>
                                </div>
                            </div>
                            <div class="market-card text-left col-md-4 mt-3">
                                <div class="market-wrapper p-0">
                                    <div class="image-header">
                                        <a href="{{ route('market-place-per-product-page') }}">
                                            <img src="http://testsite.eastbayloop.com/images/place-img2.jpeg" />
                                            <span class="text text-uppercase">American Eatery at Prather Ranch</span>
                                        </a>
                                    </div>
                                    <div class="content pt-4">
                                        <a class="read-more-link" href="{{ route('market-place-per-product-page') }}">READ MORE</a>                            
                                    </div>
                                </div>
                            </div>
                            <div class="market-card text-left col-md-4 mt-3">
                                <div class="market-wrapper p-0">
                                    <div class="image-header">
                                        <a href="{{ route('market-place-per-product-page') }}">
                                            <img src="http://testsite.eastbayloop.com/images/place-img3.jpeg" />
                                            <span class="text text-uppercase">Bay Crossings</span>
                                        </a>
                                    </div>
                                    <div class="content pt-4">
                                        <a class="read-more-link " href="{{ route('market-place-per-product-page') }}">READ MORE</a>                            
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="load-more col-md-12 text-center mt-4">
                    <a href="{{ route('market-place-product-page') }}">LOAD MORE</a>  
                </div>
            </section>
        </main>
    </market-place-page>
@endsection