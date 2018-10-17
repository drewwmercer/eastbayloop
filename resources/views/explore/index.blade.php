@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main class="explore-page">
            <slider :data="[{img: '{{ asset('assets/img/sliders/adventure-profile.png') }}', text: 'EXPLORE', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <h2 class="explore-title text-center mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sapien enim, fringilla et consequat at, interdum eu augue. Pellentesque ligula urna, ultricies in bibendum eget, pharetra at nibh. </h2>
                <div class="row">
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="{{ asset('assets/img/explore/explore-img1.png') }}"/>
                            </div>
                            <div class="content">
                                <h2>ADVENTURE</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'adventure']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="{{ asset('assets/img/explore/explore-img2.png') }}"/>
                            </div>
                            <div class="content">
                                <h2>NIGHTLIFE/DAYCLUB</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'nightlife']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="{{ asset('assets/img/explore/explore-img3.png') }}"/>
                            </div>
                            <div class="content">
                                <h2>PET CLUB</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'pet Club']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="{{ asset('assets/img/explore/explore-img4.png') }}"/>
                            </div>
                            <div class="content">
                                <h2>PAMPER</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'pamper']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="{{ asset('assets/img/explore/explore-img5.png') }}"/>
                            </div>
                            <div class="content">
                                <h2>GOLF/ RECREATION</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'golf & Recreation']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="{{ asset('assets/img/explore/explore-img6.png') }}"/>
                            </div>
                            <div class="content">
                                <h2>LOOP KIDS</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'loop Kids']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="{{ asset('assets/img/explore/explore-img7.png') }}"/>
                            </div>
                            <div class="content">
                                <h2>LOCAL SHOPS AND SHOPPING</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'local Shops and Shopping']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="{{ asset('assets/img/explore/explore-img8.png') }}"/>
                            </div>
                            <div class="content">
                                <h2>FITNESS</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'fitness']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="explore-card mb-4 col-md-4">
                        <div class="explore-wrapper">
                            <div class="image-header">
                                <img src="{{ asset('assets/img/explore/explore-img9.png') }}"/>
                            </div>
                            <div class="content">
                                <h2>THE ARTS</h2>
                                <p class="text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem.
                                </p>
                                <a class="read-more-btn mt-2 float-none" href="{{ route('explore-subpage', ['category' => 'art']) }}">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <events-widget></events-widget>
        </main>
    </explore-page>
@endsection
