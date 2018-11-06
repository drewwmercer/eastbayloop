@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/bars.png') }}', text: 'Bars, Breweries and Distilleries', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/bars.png') }}', text: 'Bars, Breweries and Distilleries', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/bars.png') }}', text: 'Bars, Breweries and Distilleries', class: 'explore-slider'}]">
            </slider>
            <section class="taste-bars-btns">
                <div class="row m-0 mt-4 mb-4 links">
                    <a href="{{ route('taste-bar-w-l-contact-page') }}" class="taste-bars-a mr-5">For Groups</a>
                    <a href="{{ route('taste-bar-w-l-contact-page') }}" class="taste-bars-a mr-5">For Celebrations</a>
                    <a href="{{ route('taste-bar-w-l-contact-page') }}" class="taste-bars-a mr-5">For Business Outing</a>
                </div>
            </section>

            <section class="taste-bars-map mt-4 mb-4">
                <iframe allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26081603.29442044!2d-95.677068!3d37.06250000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1505332785928&z=6"></iframe>
                <img class="marker" src="{{ asset('assets/img/taste/location-icon.png') }}" />
            </section>

            <section class="taste-bars-btns mb-4">
                <div class="row m-0 mt-4 mb-4 links">
                    <a href="{{ route('taste-winery-page') }}" class="taste-bars-a mr-5">Book Your Visit</a>
                    <a href="{{ route('taste-c-partner-page') }}" class="taste-bars-a mr-5">Community Partner</a>
                </div>
            </section>

            <section class="taste-bars-cards mt-4 pl-3">
                <h2 class="cards-header-text mb-4">The Loop Exclusive Access to:</h2>
                <div class="row cards m-0">
                    <div class="taste-bars-card col-md-4 p-0 pr-3 mb-3">
                        <div class="bars-wrapper">
                            <img src='{{ asset("assets/img/taste/bars1.png") }}' />
                            <a href="{{ route('taste-bar-page') }}">
                                <div class="bars-btn">Bars</div>
                            </a>
                        </div>
                    </div>
                    <div class="taste-bars-card col-md-4 p-0 pr-3 mb-3">
                        <div class="bars-wrapper">
                            <img src='{{ asset("assets/img/taste/bars2.png") }}' />
                            <a href="{{ route('taste-breweries-page') }}">
                                <div class="bars-btn">Breweries</div>
                            </a>
                        </div>
                    </div>
                    <div class="taste-bars-card col-md-4 p-0 pr-3 mb-3">
                        <div class="bars-wrapper">
                            <img src='{{ asset("assets/img/taste/bars3.png") }}' />
                            <a href="{{ route('taste-distilleries-page') }}">
                                <div class="bars-btn">Distilleries</div>
                            </a>
                        </div>
                    </div>
                    <div class="taste-bars-big-card col-md-12 p-0 mt-3 pr-3">
                        <div class="bars-wrapper">
                            <img src='{{ asset("assets/img/taste/wine4.png") }}' />
                            <a href="{{ route('taste-winery-events-page') }}">
                                <div class="bars-btn">Events & Experiences</div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- EVENTS -->
            <events-widget></events-widget>
        </main>
    </taste-page>
@endsection
