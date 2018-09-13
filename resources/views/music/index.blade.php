@extends('layouts.main-page')

@section('content')
    <music-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/music.png') }}', text: 'Music', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/music.png') }}', text: 'Music', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/music.png') }}', text: 'Music', class: 'explore-slider'}]">
            </slider>

            <section class="custom-section">
                <div class="section-header mt-4">
                    <p class="content text-center">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="music-card text-left col-md-4 mt-3 mb-4 pl-0">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="{{ route('music-dj-page') }}">
                                        <img src="http://testsite.eastbayloop.com/images/music-img1.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>DJS</h2>
                                    <p class="text">
                                        Catherine felt trapped She had a key staff member request a raise that was not earned That same staff member decided she could ....
                                    </p>

                                    <a href="{{ route('music-dj-page') }}" class="radio-plus-btn">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4 pl-0">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="{{ route('music-band-page') }}">
                                        <img src="http://testsite.eastbayloop.com/images/music-img2.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>BANDS</h2>
                                    <p class="text">
                                        Catherine felt trapped She had a key staff member request a raise that was not earned That same staff member decided she could ....
                                    </p>

                                    <a href="{{ route('music-band-page') }}" class="radio-plus-btn">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4 pl-0">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="{{ route('music-artist-page') }}">
                                        <img src="http://testsite.eastbayloop.com/images/music-img3.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>ARTISTS</h2>
                                    <p class="text">
                                        Catherine felt trapped She had a key staff member request a raise that was not earned That same staff member decided she could ....
                                    </p>
                                    <a href="{{ route('music-artist-page') }}" class="radio-plus-btn">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4 pl-0">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="{{ route('music-venues-page') }}">
                                        <img src="http://testsite.eastbayloop.com/images/music-img1.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>VENUES</h2>
                                    <p class="text">
                                        Catherine felt trapped She had a key staff member request a raise that was not earned That same staff member decided she could ....
                                    </p>
                                    <a href="{{ route('music-venues-page') }}" class="radio-plus-btn">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4 pl-0">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/music-img2.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>RADIO</h2>
                                    <p class="text">
                                        Catherine felt trapped She had a key staff member request a raise that was not earned That same staff member decided she could ....
                                    </p>
                                    <a href="#" class="radio-plus-btn">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4 pl-0">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/music-img3.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>LOOP ENTERTAINMENT</h2>
                                    <p class="text">
                                        Catherine felt trapped She had a key staff member request a raise that was not earned That same staff member decided she could ....
                                    </p>
                                    <a href="{{ route('music-loop-entertainment-page') }}" class="radio-plus-btn">+</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="music-featured mt-4 mb-4">
                <h2 class="title">FEATURED</h2>
                <h3 class="sub-title mb-4">Music Videos</h3>

                <div class="row">
                    @for($i = 1; $i < 4; $i++)
                        <div class="col-md-4 m-featured-card mb-4">
                            <div class="m-featured-wrapper">
                                <div class="image-header position-relative">
                                    <img src='{{ asset("assets/img/music/$i.png") }}' />
                                    <div class="mask">
                                        <span class="radio-play"><i class="fa fa-play"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>

            <section class="music-news mb-4">
                <h2 class="title mb-4">MUSIC NEWS</h2>

                <div class="row">
                    @for($i = 1; $i < 7; $i++)
                        <div class="col-md-4 m-news-card mb-2">
                            <div class="m-news-wrapper">
                                <div class="image-header position-relative col-md-4 m-0 p-0">
                                    <img src='{{ asset("assets/img/music/". ($i > 3 ? $i - 3 : $i) .".png") }}' />
                                </div>
                                <div class="content col-md-8 m-0 p-0 ml-2">
                                    <h2 class="news-title mb-0">Soldado Reveals His Tottenham Scoring Just Twice</h2>

                                    <div class="footer">
                                        <a class="m-btn" href="#">Music</a>
                                        <span class="date ml-3"> March 7, 2018</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>
        </main>
    </music-page>
@endsection