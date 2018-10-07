@extends('layouts.main-page')

@section('content')
    <fashion-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/must-haves.png') }}', text: 'Must Haves', class: 'explore-slider'}]">
            </slider>
            <section class="must-haves-description">
                <h2 class="must-title">Get Ready for Fall (sample title)</h2>
                <p class="must-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas urna ex, iaculis non porttitor eget, pulvinar eu lorem. Nunc at consequat ante. Suspendisse nec ante blandit, condimentum sem ut, auctor mauris. Aliquam sit amet auctor odio.</p>
                <p class="must-text">Vestibulum elementum ullamcorper tortor, sed rhoncus felis. Phasellus tempor elit quis ex volutpat porttitor. Vivamus quis justo velit. Sed accumsan urna ac lectus posuere. Phasellus tempor elit quis ex volutpat porttitor. Vivamus quis justo velit. Sed accumsan urna ac lectus posuere laoreet. Aenean volutpat tellus vel sem facilisis vulputate. </p>                
            </section>
            <section class="product-cards mb-2">
                <div class="product-header must-haves-header w-100 mb-4">
                    <div>
                        <h2 class="haves-title">FEATURED PRODUCTS</h2>
                    </div>
                    <div>
                        <h2>Sort By: </h2>
                        <span>
                            <select>
                                <option value="Select">POPULARITY</option>
                                <option value="bar1">Bar 1</option>
                                <option value="bar2">Bar 2</option>
                            </select>
                        </span>
                    </div>
                </div>
                <div class="row m-0">
                    @for($i = 1, $j = 1; $i < 13; $i++, $j++)
                        @php
                            $j = $i > 6 ? $i - 6 : $j;
                        @endphp
                        <div class="product-card col-md-4 mb-4 pr-4">
                            <div class="product-wrapper">
                                <a href="{{ route('fashion-per-product-page') }}">
                                    <div class="image-header">
                                        <img src='{{ asset("assets/img/fashion/must$j.png") }}' />
                                    </div>
                                    <div class="product-content">
                                        <h2 class="title">Product title_0{{ $i }}</h2>
                                        <h3 class="description">CATEGORY</h3>
                                        <div class="star-ratings-css">
                                            <div class="star-ratings-css-top" style="width: 1%">
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
                                        <span class="price">$19.00</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
                <div class="load-more col-md-12 text-center">
                    <a href="{{ route('fashion-product-page') }}">LOAD MORE</a>  
                </div>
            </section>
        </main>
    </fashion-page>
@endsection