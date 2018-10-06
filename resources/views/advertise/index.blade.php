@extends('layouts.main-page')

@section('content')
    <advertise-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/business-contact.png') }}', text: 'Advertise with us', class: 'explore-slider font-barlow-bold'}]">
            </slider>

            <section class="list-cards mt-4 mb-4">
                <h2 class="list-title text-center">Please select your service(s)</h2>
                <h3 class="list-additional-title text-center">You may choose more than one.</h3>                
                <div class="row m-0 mt-4 pt-2">
                    <div class="list-card col-md-3 p-0 pr-3 mb-4">
                        <a href="{{ route('advertise-list-page') }}">
                            <div class="list-wrapper">
                                <div class="image-header">
                                    <img class="default" src="{{ asset('assets/img/advertise/list1.png') }}" />
                                    <img class="hover" src="{{ asset('assets/img/advertise/list1h.png') }}" />              
                                    <h2 class="list-title mt-4">List your Business</h2>         
                                </div>
                                <div class="content">
                                    <div class="list-box border-bt">
                                        Restaurant / Eatery / Food Truck
                                    </div>
                                    <div class="list-box border-bt">
                                        Coffee Shops / Bakeries
                                    </div>
                                    <div class="list-box border-bt">
                                        Wine Loop - Winery
                                    </div>
                                    <div class="list-box border-bt">
                                        Bars / Breweries / Distilleries
                                    </div>
                                    <div class="list-box border-bt">
                                        Pamper - Beauty / Spa / Tanning /
                                        Nail / Salon
                                    </div>
                                    <div class="list-box border-bt">
                                        Local Shops
                                    </div>
                                    <div class="list-box border-bt">
                                        Designers / Fashion House
                                    </div>
                                    <div class="list-box border-bt">
                                        Adventure
                                    </div>
                                    <div class="list-box border-bt">
                                        Art
                                    </div>
                                    <div class="list-box border-bt">
                                        Nightlife / Dayclub / Lounge
                                    </div>
                                    <div class="list-box border-bt">
                                        Golf / Recreation
                                    </div>
                                    <div class="list-box border-bt">
                                        Kids Loop
                                    </div>
                                    <div class="list-box border-bt">
                                        Fitness
                                    </div>
                                    <div class="list-box border-bt">
                                        Venues / Theaters / Museums
                                    </div>
                                    <div class="list-box">
                                        Pet Club
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-card col-md-3 p-0 pr-3 mb-4">
                        <a href="{{ route('advertise-list-page') }}">
                            <div class="list-wrapper">
                                <div class="image-header">
                                    <img class="default" src="{{ asset('assets/img/advertise/list2.png') }}" />
                                    <img class="hover" src="{{ asset('assets/img/advertise/list2h.png') }}" />              
                                    <h2 class="list-title mt-4">List your Event</h2>         
                                </div>
                                <div class="content">
                                    <div class="list-box border-bt">
                                        Culinary / Taste / Food / Mixology
                                    </div>
                                    <div class="list-box border-bt">
                                        Sports / Concert / Theater / 
                                        Museum Ticket
                                    </div>
                                    <div class="list-box border-bt">
                                        Community Festivals
                                    </div>
                                    <div class="list-box border-bt">
                                        Gallery / Museum Exhibits
                                    </div>
                                    <div class="list-box border-bt">
                                        Music Event - DJ / Artist / Band
                                    </div>
                                    <div class="list-box border-bt">
                                        NightClub Events
                                    </div>
                                    <div class="list-box border-bt">
                                        Family Friendly Events
                                    </div>
                                    <div class="list-box border-bt">
                                        Kid Events
                                    </div>
                                    <div class="list-box border-bt">
                                        Day Events
                                    </div>
                                    <div class="list-box border-bt">
                                        Conferences / Business Networking
                                    </div>
                                    <div class="list-box">
                                        The Loop Exclusive Exprerience
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-card col-md-3 p-0 pr-3 mb-4">
                        <a href="{{ route('advertise-sell-products-page') }}">
                            <div class="list-wrapper">
                                <div class="image-header">
                                    <img class="default" src="{{ asset('assets/img/advertise/list3.png') }}" />
                                    <img class="hover" src="{{ asset('assets/img/advertise/list3h.png') }}" />              
                                    <h2 class="list-title mt-4">Sell Products</h2>         
                                </div>
                                <div class="content">
                                    <div class="list-box border-bt">
                                        Fashion / Local Store / Designer
                                    </div>
                                    <div class="list-box border-bt">
                                        Marketplace / Food / 
                                        Local Goods & Condiments
                                    </div>
                                    <div class="list-box border-bt">
                                        Digital Music!
                                    </div>
                                    <div class="list-box border-bt">
                                        Nightlife/Dayparty - Bottle Service / 
                                        Table / Daybed / Cabana Reservations
                                    </div>
                                    <div class="list-box border-bt">
                                        Stay - Hotel / Resort
                                    </div>
                                    <div class="list-box border-bt">
                                        Stay - B&B / Hostels
                                    </div>
                                    <div class="list-box border-bt">
                                        Stay - Loop Exclusive 
                                        Vacation Packages
                                    </div>
                                    <div class="list-box border-bt">
                                        Stay - Short and Long Stay Rentals
                                    </div>
                                    <div class="list-box">
                                        Stay - Stay for Sell
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="list-card col-md-3 p-0 pr-3 mb-4">
                        <a href="#">
                            <div class="list-wrapper">
                                <div class="image-header">
                                    <img class="default" src="{{ asset('assets/img/advertise/list4.png') }}" />
                                    <img class="hover" src="{{ asset('assets/img/advertise/list4h.png') }}" />              
                                    <h2 class="list-title mt-4">Feature your Talent</h2>         
                                </div>
                                <div class="content">
                                    <div class="list-box border-bt">
                                        I’m a Chef
                                    </div>
                                    <div class="list-box border-bt">
                                        I’m a DJ, Artist, Band
                                    </div>
                                    <div class="list-box border-bt">
                                        I’m a Real Estate Agent / Broker
                                    </div>
                                    <div class="list-box border-bt">
                                        I’m a Designer / Model / Actress
                                    </div>
                                    <div class="list-box border-bt">
                                        I’m a Photographer/ Make-up Artist
                                    </div>
                                    <div class="list-box border-bt">
                                        I’m a Bartender
                                    </div>
                                    <div class="list-box border-bt">
                                        I’m a Community Partner
                                    </div>
                                    <div class="list-box">
                                        I’m a Business Owner Looking to
                                        Network - The Loop Foundation
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </advertise-page>
@endsection