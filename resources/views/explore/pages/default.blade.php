@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/banner7.jpeg') }}', text: '{{ $category === 'Art' ? 'The Arts' : $category }}', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/banner7.jpeg') }}', text: '{{ $category === 'Art' ? 'The Arst' : $category }}', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/banner7.jpeg') }}', text: '{{ $category }}', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <div class="row explore-header mb-3">
                    <h2 class="display-inline col-md-8">{{ $category == 'Art' ? 'The Arts' : $category }}</h2>
                    <div class="filter-bar col-md-4">
                        @if ($category == 'Art')
                        <span>
                            <select>
                                <option value="Select">Type Filter</option>
                                <option value="bar1">Bar 1</option>
                                <option value="bar2">Bar 2</option>
                            </select>
                        </span>
                        @endif
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
                <div class="row">
                    @for($i = 1; $i < 10; $i++)
                        <div class="default-card col-md-4 mb-4">
                            <div class="default-wrapper">
                                <a href="{{ route('explore-profile-page') }}">
                                    <img src='{{ asset("assets/img/adventure/adventure$i.png") }}' />
                                    <div class="content">
                                        <h2 class="mb-3">{{ $category }} {{ $i }}</h2>
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
    </explore-page>
@endsection