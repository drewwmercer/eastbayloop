@extends('layouts.main-page')

@section('content')
    <advertise-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/business-contact.png') }}', text: 'Advertise with us', class: 'explore-slider font-barlow-bold'}]">
            </slider>

            <section class="list-cards mt-4 mb-4">
                <h2 class="list-title text-center">Please select your service:</h2>
                <div class="row m-0 mt-4 pt-2">
                    <div class="list-card col-md-3 p-0 pr-3 mb-4">
                        <div class="list-wrapper">
                            <div class="image-header">
                                <img class="default" src="{{ asset('assets/img/advertise/list1.png') }}" />
                                <img class="hover" src="{{ asset('assets/img/advertise/list1h.png') }}" />
                                <h2 class="list-title mt-4">List your Business</h2>
                            </div>
                            <div class="content">
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box border-bt">
                                    Restaurant / Eatery / Food Truck
                                </a>
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box border-bt">
                                    Coffee Shops / Bakeries
                                </a>
                                <a href="{{ route('advertise-b-business-page') }}" class="list-box border-bt">
                                    Wine Loop - Winery
                                </a>
                                <a href="{{ route('advertise-b-business-page') }}" class="list-box border-bt">
                                    Bars / Breweries / Distilleries
                                </a>
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box border-bt">
                                    Pamper - Beauty / Spa / Tanning /
                                    Nail / Salon
                                </a>
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box border-bt">
                                    Local Shops
                                </a>
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box border-bt">
                                    Designers / Fashion House
                                </a>
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box border-bt">
                                    Adventure
                                </a>
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box border-bt">
                                    Art
                                </a>
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box border-bt">
                                    Nightlife / Dayclub / Lounge
                                </a>
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box border-bt">
                                    Golf / Recreation
                                </a>
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box border-bt">
                                    Kids Loop
                                </a>
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box border-bt">
                                    Fitness
                                </a>
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box border-bt">
                                    Venues / Theaters / Museums
                                </a>
                                <a href="{{ route('advertise-b-list-page') }}" class="list-box">
                                    Pet Club
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="list-card col-md-3 p-0 pr-3 mb-4">
                        <div class="list-wrapper">
                            <div class="image-header">
                                <img class="default" src="{{ asset('assets/img/advertise/list2.png') }}" />
                                <img class="hover" src="{{ asset('assets/img/advertise/list2h.png') }}" />
                                <h2 class="list-title mt-4">List your Event</h2>
                            </div>
                            <div class="content">
                                <a href="{{ route('advertise-e-list-page') }}" class="list-box border-bt">
                                    Culinary / Taste / Food / Mixology
                                </a>
                                <a href="{{ route('advertise-e-list-page') }}" class="list-box border-bt">
                                    Sports / Concert / Theater /
                                    Museum Ticket
                                </a>
                                <a href="{{ route('advertise-e-list-page') }}" class="list-box border-bt">
                                    Community Festivals
                                </a>
                                <a href="{{ route('advertise-e-list-page') }}" class="list-box border-bt">
                                    Gallery / Museum Exhibits
                                </a>
                                <a href="{{ route('advertise-e-list-page') }}" class="list-box border-bt">
                                    Music Event - DJ / Artist / Band
                                </a>
                                <a href="{{ route('advertise-e-list-page') }}" class="list-box border-bt">
                                    NightClub Events
                                </a>
                                <a href="{{ route('advertise-e-list-page') }}" class="list-box border-bt">
                                    Family Friendly Events
                                </a>
                                <a href="{{ route('advertise-e-list-page') }}" class="list-box border-bt">
                                    Kid Events
                                </a>
                                <a href="{{ route('advertise-e-list-page') }}" class="list-box border-bt">
                                    Day Events
                                </a>
                                <a href="{{ route('advertise-e-list-page') }}" class="list-box border-bt">
                                    Conferences / Business Networking
                                </a>
                                <a href="{{ route('advertise-e-list-page') }}" class="list-box">
                                    The Loop Exclusive Exprerience
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="list-card col-md-3 p-0 pr-3 mb-4">
                        <div class="list-wrapper">
                            <div class="image-header">
                                <img class="default" src="{{ asset('assets/img/advertise/list3.png') }}" />
                                <img class="hover" src="{{ asset('assets/img/advertise/list3h.png') }}" />
                                <h2 class="list-title mt-4">Sell Products</h2>
                            </div>
                            <div class="content">
                                <a href="{{ route('advertise-sell-products-page') }}" class="list-box border-bt">
                                    Fashion / Local Store / Designer
                                </a>
                                <a href="{{ route('advertise-sell-products-page') }}" class="list-box border-bt">
                                    Marketplace / Food /
                                    Local Goods & Condiments
                                </a>
                                <a href="{{ route('advertise-sell-products-page') }}" class="list-box border-bt">
                                    Digital Music!
                                </a>
                                <a href="{{ route('advertise-sell-products-page') }}" class="list-box border-bt">
                                    Nightlife/Dayparty - Bottle Service /
                                    Table / Daybed / Cabana Reservations
                                </a>
                                <a href="{{ route('advertise-sell-products-page') }}" class="list-box border-bt">
                                    Stay - Hotel / Resort
                                </a>
                                <a href="{{ route('advertise-sell-products-page') }}" class="list-box border-bt">
                                    Stay - B&B / Hostels
                                </a>
                                <a href="{{ route('advertise-sell-products-page') }}" class="list-box border-bt">
                                    Stay - Loop Exclusive
                                    Vacation Packages
                                </a>
                                <a href="{{ route('advertise-sell-products-page') }}" class="list-box border-bt">
                                    Stay - Short and Long Stay Rentals
                                </a>
                                <a href="{{ route('advertise-sell-products-page') }}" class="list-box">
                                    Stay - Stay for Sell
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="list-card col-md-3 p-0 pr-3 mb-4">
                        <div class="list-wrapper">
                            <div class="image-header">
                                <img class="default" src="{{ asset('assets/img/advertise/list4.png') }}" />
                                <img class="hover" src="{{ asset('assets/img/advertise/list4h.png') }}" />
                                <h2 class="list-title mt-4">Feature your Talent</h2>
                            </div>
                            <div class="content">
                                <a href="{{ route('advertise-feature-talent-page') }}" class="list-box border-bt">
                                    I’m a Chef
                                </a>
                                <a href="{{ route('advertise-feature-talent-page') }}" class="list-box border-bt">
                                    I’m a DJ, Artist, Band
                                </a>
                                <a href="{{ route('advertise-feature-talent-page') }}" class="list-box border-bt">
                                    I’m a Real Estate Agent / Broker
                                </a>
                                <a href="{{ route('advertise-feature-talent-page') }}" class="list-box border-bt">
                                    I’m a Designer / Model / Actress
                                </a>
                                <a href="{{ route('advertise-feature-talent-page') }}" class="list-box border-bt">
                                    I’m a Photographer/ Make-up Artist
                                </a>
                                <a href="{{ route('advertise-feature-talent-page') }}" class="list-box border-bt">
                                    I’m a Bartender
                                </a>
                                <a href="{{ route('advertise-feature-talent-page') }}" class="list-box border-bt">
                                    I’m a Community Partner
                                </a>
                                <a href="{{ route('advertise-feature-talent-page') }}" class="list-box">
                                    I’m a Business Owner Looking to
                                    Network - The Loop Foundation
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </advertise-page>
@endsection