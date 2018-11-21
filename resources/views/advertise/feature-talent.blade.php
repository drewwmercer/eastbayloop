@extends('layouts.main-page')

@section('content')
    <advertise-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/feature.png') }}', text: 'Feature your Talent', class: 'explore-slider font-barlow-bold'}]">
            </slider>

            <section class="sell-header mt-4 mb-4">
                <h2 class="sell-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae malesuada leo. Aliquam risus lacus, rhoncus et sem et, pharetra facilisis mauris. Donec molestie ac mauris vel commodo. Vivamus neque tortor.</h2>
                <div class="sell-desc row ml-1 mr-1 mt-4 pt-3">
                    <h2 class="desc-title col-md-12 p-0 mb-4 pb-3">Lorem ipsum, Dolor amet</h2>
                    <div class="col-md-6 sell-card mb-3">
                        <div class="sell-wrapper row m-0">
                            <div class="sell-image col-md-1 p-0 col-sm-1">
                                <img src="{{ asset('assets/img/advertise/ok.png') }}" />
                            </div>
                            <div class="content col-md-11 pl-4 col-sm-11">
                                <h2 class="card-title">Lorem ipsum dolor amet</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae malesuada leo. Aliquam risus lacus, rhoncus et sem et, pharetra facilisis mauris. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 sell-card mb-3">
                        <div class="sell-wrapper row m-0">
                            <div class="sell-image col-md-1 p-0 col-sm-1">
                                <img src="{{ asset('assets/img/advertise/ok.png') }}" />
                            </div>
                            <div class="content col-md-11 pl-4 col-sm-11">
                                <h2 class="card-title">Lorem ipsum dolor amet</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae malesuada leo. Aliquam risus lacus, rhoncus et sem et, pharetra facilisis mauris. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center mt-4 mb-4 pb-3 pt-3">
                        <a href="{{ route('advertise-feature-talent-contact-page') }}" class="adv-sell-btn promote-btn">Promote Yourself Today!</a>
                    </div>
                </div>
            </section>
            <section class="sell-listing-s">
                <div class="listing-content">
                    <div class="listing-header">
                        <div class="listing-fee">
                            <h2 class="listing-fee-new-text">FREE</h2>
                        </div>
                        <div class="listing-text">
                        Promote your talent is free with a 5% commission on sales.
                        </div>
                        <div class="listing-boxes">
                            <div class="listing-box mb-3">
                                <h2 class="percent">5%</h2>
                                <h2 class="box-text">SALES COMMISSION</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="sell-main-content mt-4 pt-3">
                <div class="main-btns-block mt-3 mb-4 pb-3">
                    <div class="become-block">
                        <a href="{{ route('advertise-feature-talent-contact-page') }}" class="become-btn">Become a VIP!</a>
                    </div>
                    <div class="data-block">
                        <h2 class="data-title"><span class="price">$10 </span>a month</h2>
                        <h2 class="data-text">No Item sign up fee or commission taken</h2>
                    </div>
                </div>
                <div class="spotlight-block mt-4 mb-4">
                    <h2 class="spotlight-title mt-4">Put yourself on the Spotlight</h2>
                    <div class="spotlight-cards row mt-3 justify-content-center">
                        <div class="spotlight-card col-md-4 p-2 mb-3">
                            <div class="spotlight-wrapper">
                                <a href="#">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/advertise/spot1.png') }}" />
                                    </div>
                                    <div class="content">
                                        <h2 class="card-title mb-1 mt-1">I’m a Chef / Cook</h2>
                                        <p class="card-text">Catherine felt trapped She had a key staff request a raise that was not earned That samestaff member That samestaff member decided...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="spotlight-card col-md-4 p-2 mb-3">
                            <div class="spotlight-wrapper">
                                <a href="#">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/advertise/spot2.png') }}" />
                                    </div>
                                    <div class="content">
                                        <h2 class="card-title mb-1 mt-1">I'm a Dj / Artist / Band</h2>
                                        <p class="card-text">Catherine felt trapped She had a key staff request a raise that was not earned That samestaff member That samestaff member decided...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="spotlight-card col-md-4 p-2 mb-3">
                            <div class="spotlight-wrapper">
                                <a href="#">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/advertise/spot3.png') }}" />
                                    </div>
                                    <div class="content">
                                        <h2 class="card-title mb-1 mt-1">I'm a Real Estate Broker</h2>
                                        <p class="card-text">Catherine felt trapped She had a key staff request a raise that was not earned That samestaff member That samestaff member decided...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="spotlight-card col-md-4 p-2 mb-3">
                            <div class="spotlight-wrapper">
                                <a href="#">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/advertise/spot4.png') }}" />
                                    </div>
                                    <div class="content">
                                        <h2 class="card-title mb-1 mt-1">I'm a Designer / Model / Actress / Photographer</h2>
                                        <p class="card-text">Catherine felt trapped She had a key staff request a raise that was not earned That samestaff member...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="spotlight-card col-md-4 p-2 mb-3">
                            <div class="spotlight-wrapper">
                                <a href="#">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/advertise/spot5.png') }}" />
                                    </div>
                                    <div class="content">
                                        <h2 class="card-title mb-1 mt-1">I'm a Bartender - Mixology</h2>
                                        <p class="card-text">Catherine felt trapped She had a key staff request a raise that was not earned That samestaff member That samestaff member decided...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="spotlight-card col-md-4 p-2 mb-3">
                            <div class="spotlight-wrapper">
                                <a href="#">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/advertise/spot6.png') }}" />
                                    </div>
                                    <div class="content">
                                        <h2 class="card-title mb-1 mt-1">I'm a Community Partner</h2>
                                        <p class="card-text">Catherine felt trapped She had a key staff request a raise that was not earned That samestaff member That samestaff member decided...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="spotlight-card col-md-4 p-2 mb-3">
                            <div class="spotlight-wrapper">
                                <a href="#">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/advertise/spot7.png') }}" />
                                    </div>
                                    <div class="content">
                                        <h2 class="card-title mb-1 mt-1">I'm a Business Owner Looking to Network - The Loop Foundation</h2>
                                        <p class="card-text">Catherine felt trapped She had a key staff request a raise that was not earned That samestaff member That samestaff member decided...</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spotlight-block mt-4 mb-4">
                    <h2 class="spotlight-title mt-4">Testimonials</h2>
                    <h3 class="spotlight-additional-title mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra scelerisque dictum. Donec luctus quam felis.</h3>
                    <div class="testim-cards row mt-4">
                        @for($i = 1; $i < 5; $i ++)
                            <div class="testim-card col-md-6 mb-3">
                                <div class="testim-wrapper">
                                    <div class="image-header">
                                        <img src='{{ asset("assets/img/advertise/test$i.png") }}' />
                                    </div>
                                    <div class="content">
                                        <h2 class="quote-symbols">“</h2>
                                        <p class="card-text mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pharetra scelerisque dictum. Donec luctus quam felis.</p>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="col-md-12 text-center pb-3 pt-4 mb-10 mt-75">
                    <a href="{{ route('advertise-feature-talent-contact-page') }}" class="adv-sell-btn promote-btn">Promote Yourself Today!</a>
                </div>
            </section>
            <div class="modal fade" id="VipModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog advertise-modal" role="document">
                    <div class="modal-content">
                        <div class="close-btn" data-dismiss="modal"></div>

                        <div class="row">
                            <div class="col-md-12 modal-card">
                                <a href="{{ route('advertise-b-user-page') }}">
                                    <img src="{{ asset('assets/img/advertise/modal1.png') }}" />
                                    <h2 class="modal-text">Become a VIP User!</h2>
                                </a>
                            </div>
                            <div class="col-md-12 modal-card mt-4">
                                <a href="{{ route('advertise-b-business-page') }}"> 
                                    <img src="{{ asset('assets/img/advertise/modal2.png') }}" />
                                    <h2 class="modal-text">Become a VIP Business!</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </advertise-page>
@endsection