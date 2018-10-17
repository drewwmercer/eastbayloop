@extends('layouts.main-page')

@section('content')
    <events-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/client-banner.jpeg') }}', text: 'EVENTS', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/client-banner.jpeg') }}', text: 'EVENTS', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/client-banner.jpeg') }}', text: 'EVENTS', class: 'explore-slider'}]">
            </slider>

            <section class="events-cards">
                <div class="events-header mb-3">
                    <div class="filter-btn">
                        <a class="col-md-12" href="#">Plan an Event with Us!</a>
                    </div>
                    <div class="filter-btns">
                        <a class="mr-2" href="#">By Location</a>
                        <a href="#">By Category or Fun!</a>
                    </div>
                </div>
                <div class="row">
                    @for($i = 1, $j = 1; $i < 16; $i++)
                        <div class="events-card col-md-4 mb-4">
                            <a href="{{ route('events-profile-page') }}">
                                <div class="events-wrapper">
                                    <img src='{{ asset("assets/img/events/events-img$j.jpeg") }}' />
                                    <div class="content">
                                        <h2 class="mb-3">{{ 'Event ' . $i }}</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @php
                            $j = ($j === 6) ? 1 : $j + 1;
                        @endphp
                    @endfor
                </div>
            </section>
        </main>
    </events-page>
@endsection