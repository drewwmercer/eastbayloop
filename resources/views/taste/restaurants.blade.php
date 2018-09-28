@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/taste.png') }}', text: 'Restaurants', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/taste.png') }}', text: 'Restaurants', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/taste.png') }}', text: 'Restaurants', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards custom-section">
                <div class="row explore-header mb-3 m-0 mr-2 chef-flex ">
                    <div class="col-md-4 pl-4">
                        <input class="chefs-search" type="text" placeholder="Search"/>
                        <i class="fa fa-search chefs-search-icon pt-1"></i>
                    </div>
                    <div class="filter-bar col-md-8 text-right m-0 mt-2">
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
                <div class="section-content">
                    <div class="row p-0">
                        @for($i = 1, $j = 1; $i < 10; $i++, $j++)
                            @php 
                                $j = $j > 3 ? $j - 3 : $j;
                            @endphp
                            <div class="taste-card text-center col-md-4 mt-3 p-0 m-0">
                                <div class="taste-wrapper">
                                    <div class="image-header">
                                        <a href="{{ route('taste-gallery-page') }}">
                                            <img src="http://testsite.eastbayloop.com/images/taste-img{{ $j }}.jpeg" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h2 class="chefs-h2">LOREM IPSUM DOLOR SIT AMET</h2>
                                        <span class="chefs-span">consectetur adipiscing elit</span>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </section>
        </main>
    </taste-page>
@endsection