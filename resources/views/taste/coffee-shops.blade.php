@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main>
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/banner7.jpeg', text: 'COFFEE SHOPS / BAKERIES', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner7.jpeg', text: 'COFFEE SHOPS / BAKERIES', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner7.jpeg', text: 'COFFEE SHOPS / BAKERIES', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <div class="row explore-header mb-3">
                    <h2 class="display-inline col-md-8">COFFEE SHOPS / BAKERIES</h2>
                    <div class="filter-bar col-md-4">
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
                                    <img src="http://testsite.eastbayloop.com/images/adventure{{ $i }}.png" />
                                    <div class="content">
                                        <h2 class="mb-3">SHOP {{ $i }}</h2>
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