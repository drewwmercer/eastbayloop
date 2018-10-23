@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/bar.png') }}', text: 'Book your Visit', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/bar.png') }}', text: 'Book your Visit', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/bar.png') }}', text: 'Book your Visit', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <div class="row explore-header mb-3">
                    <h2 class="display-inline col-md-8 font-myriad-regular">Book your Visit</h2>
                    <div class="filter-bar col-md-4">
                        <span>
                            <select class="align-middle">
                                <option value="Select">Filter</option>
                                <option value="bar1">Bar 1</option>
                                <option value="bar2">Bar 2</option>
                            </select>
                        </span>
                        <div>
                            <a href="#" class="black-btn font-20px ml-4">Book a Tasting</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @for($i = 1; $i < 13; $i++)
                        <div class="default-card col-md-4 mb-4">
                            <div class="default-wrapper">
                                <a href="#">
                                    <img src='{{ asset("assets/img/taste/bar$i.png") }}' />
                                    <div class="content">
                                        <h2 class="mb-3">{{ 'Client ' . $i }}</h2>
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