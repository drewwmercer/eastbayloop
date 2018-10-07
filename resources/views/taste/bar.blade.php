@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main>
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'Bars', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'Bars', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'Bars', class: 'explore-slider'}]">
            </slider>

            <section class="explore-cards">
                <div class="row explore-header mb-3">
                    <h2 class="display-inline col-md-8">Bars</h2>
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
                                <img src="http://testsite.eastbayloop.com/images/nightlife{{ $i }}.png" />
                                <div class="content">
                                    <h2 class="mb-3">{{ 'Bar ' . $i }}</h2>
                                    <h2>(non-product)</h2>
                                </div>
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