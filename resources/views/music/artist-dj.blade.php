@extends('layouts.main-page')

@section('content')
    <music-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/music.png') }}', text: 'Artists - Bands - DJs', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/music.png') }}', text: 'Artists - Bands - DJs', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/music.png') }}', text: 'Artists - Bands - DJs', class: 'explore-slider'}]">
            </slider>

            <section class="mt-4 wrapper">
                <div class="scoop-cards pr-0 mb-5">
                    <div class="product-selects w-100 mb-4 ml-1">
                        <div>
                            <h2>Sort By: </h2>
                            <span>
                                <select>
                                    <option value="Select">GENRE</option>
                                    <option value="bar1">Bar 1</option>
                                    <option value="bar2">Bar 2</option>
                                </select>
                            </span>
                        </div>
                    </div>
                    <div class="row m-0 pl-1 mt-2 mb-4">
                        @for($i = 1, $j = 1; $i < 13; $i++, $j++)
                            @php
                                $j = $j > 3 ? 1 : $j;
                            @endphp
                            <div class="col-md-4 p-0 mb-3 pr-3 scoop-card">
                                <div class="scoop-wrapper p-2">
                                    <div class="image-header">
                                        <img src='http://testsite.eastbayloop.com/images/music-img{{ $j }}.jpeg' />
                                    </div>
                                    <div class="content mt-3">
                                        <h2 class="scoop-title">Artist/Band/DJ name</h2>
                                        <p class="scoop-text">Catherine felt trapped She had a key staff request a raise that was not earned That samestaff member That samestaff member decided...</p>
                                        <a class="scoop-rm" href="{{ route('music-dj-page') }}">Read More...</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="load-more col-md-12 text-center mb-4">
                        <a href="{{ route('music-per-product-page') }}">LOAD MORE</a>  
                    </div>
                </div>
            </section>
        </main>
    </music-page>
@endsection