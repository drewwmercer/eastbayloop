@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/bar.png') }}', text: 'Events & Experiences', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/bar.png') }}', text: 'Events & Experiences', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/bar.png') }}', text: 'Events & Experiences', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <div class="row explore-header mb-3">
                    <h2 class="display-inline col-md-7 font-myriad-regular">Events & Experiences</h2>
                    <div class="filter-bar col-md-5">
                        <a class="filter-btn mr-3" href="#">Type Filter</a>
                        <span>
                            <select>
                                <option value="Select">Location Filter</option>
                                <option value="bar1">Bar 1</option>
                                <option value="bar2">Bar 2</option>
                            </select>
                        </span>
                        <a class="filter-btn ml-3" href="#">Filter</a>
                    </div>
                </div>
                <div class="row">
                    @for($i = 1; $i < 13; $i++)
                        <div class="default-card col-md-4 mb-4">
                            <div class="default-wrapper">
                                <a href="{{ route('events-profile-page') }}">
                                    <img src='{{ asset("assets/img/taste/bar$i.png") }}' />
                                    <div class="content">
                                        <h2 class="mb-3">{{ 'Event ' . $i }}</h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>
        </main>
    </taste-page>
@endsection