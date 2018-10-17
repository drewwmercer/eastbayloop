@extends('layouts.main-page')

@section('content')
    <music-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/perfume.png') }}', text: 'Perfume', class: 'explore-slider'}]">
            </slider>
            <section class="product-cards mb-2">
                <div class="product-header">
                    <h2>Sort By: </h2>
                    <span>
                        <select>
                            <option value="Select">Perfume</option>
                            <option value="bar1">Bar 1</option>
                            <option value="bar2">Bar 2</option>
                        </select>
                    </span>
                </div>
                <div class="row">
                    @for($i = 1; $i < 10; $i++)
                        <div class="product-card col-md-4 mb-4">
                            <div class="product-wrapper">
                                <a href="{{ route('music-per-product-page') }}">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/product1.png') }}" />
                                    </div>
                                    <div class="product-content">
                                        <h2 class="title">Product title_0{{ $i }}</h2>
                                        <h3 class="description">Bras & panties</h3>
                                        <div class="star-ratings-css">
                                            <div class="star-ratings-css-top" style="width: 61%">
                                                <span>★</span>
                                                <span>★</span>
                                                <span>★</span>
                                                <span>★</span>
                                                <span>★</span>
                                            </div>
                                            <div class="star-ratings-css-bottom">
                                                <span>★</span>
                                                <span>★</span>
                                                <span>★</span>
                                                <span>★</span>
                                                <span>★</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <span class="price">$ 19.00</span>
                                        <a class="read-more-link" href="#">Read More</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="load-more col-md-12 text-center">
                    <a href="{{ route('music-per-product-page') }}">LOAD MORE</a>  
                </div>
            </section>
        </main>
    </music-page>
@endsection