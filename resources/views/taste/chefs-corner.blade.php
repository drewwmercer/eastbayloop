@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/client-banner.jpeg') }}', text: 'CHEF’S CORNER', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/client-banner.jpeg') }}', text: 'CHEF’S CORNER', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/client-banner.jpeg') }}', text: 'CHEF’S CORNER', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <div class="row explore-header mb-3">
                    <h2 class="display-inline col-md-7">Chef’s Corner</h2>
                    <div class="filter-bar col-md-5">
                        <a class="filter-btn mr-3" href="#">Cuisine</a>
                        <a class="filter-btn mr-3" href="#">Find Filter</a>                        
                        <a class="filter-btn" href="#">Book Me For Your Event</a>
                    </div>
                </div>
                <div class="row">
                    @for($i = 1; $i < 13; $i++)
                        <div class="default-card col-md-4 mb-4">
                            <div class="default-wrapper">
                                <a href="{{ route('taste-chefs-corner-profile-page') }}">
                                    <img src='{{ asset("assets/img/taste/chef" . ($i > 6 ? $i - 6 : $i) .".png") }}' />
                                    <div class="content">
                                        <h2 class="mb-3">{{ 'Chef ' . $i }}</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>

            <!-- EVENTS -->
            <events-widget></events-widget>
        </main>
    </taste-page>
@endsection