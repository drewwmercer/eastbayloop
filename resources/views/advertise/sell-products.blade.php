@extends('layouts.main-page')

@section('content')
    <advertise-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/sell-products.png') }}', text: 'Sell Products', class: 'explore-slider font-barlow-bold'}]">
            </slider>

            <section class="sell-header mt-4 mb-4">
                <h2 class="sell-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae malesuada leo. Aliquam risus lacus, rhoncus et sem et, pharetra facilisis mauris. Donec molestie ac mauris vel commodo. Vivamus neque tortor.</h2>
                <div class="sell-desc row ml-1 mr-1 mt-4 pt-3">
                    <h2 class="desc-title col-md-12 p-0 mb-4 pb-3">Simple, transparent, secure</h2>
                    <div class="col-md-6 sell-card mb-3">
                        <div class="sell-wrapper row m-0">
                            <div class="sell-image col-md-1 p-0 col-sm-1">
                                <img src="{{ asset('assets/img/advertise/ok.png') }}" />
                            </div>
                            <div class="content col-md-11 pl-4 col-sm-11">
                                <h2 class="card-title">No additional monthly fees</h2>
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
                                <h2 class="card-title">Automatic Deposits</h2>
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
                                <h2 class="card-title">Secure Transactions</h2>
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
                                <h2 class="card-title">Seller Protection</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae malesuada leo. Aliquam risus lacus, rhoncus et sem et, pharetra facilisis mauris. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center mt-4 mb-4 pb-3 pt-3">
                        <a href="{{ route('advertise-sell-products-contact-page') }}" class="adv-sell-btn">Start Selling Today!</a>
                    </div>
                </div>
            </section>
            <section class="sell-listing-s">
                <div class="listing-content">
                    <div class="listing-header">
                        <div class="listing-fee">
                            <h2 class="listing-fee-text">LISTING FEE *</h2>
                            <h2 class="listing-fee-price">$0.20</h2>
                        </div>
                        <div class="listing-text">
                            Listings are active for four months or until they sell. When you sell an item, there’s a small commission and standard payment processing fees.
                        </div>
                        <div class="listing-boxes">
                            <div class="listing-box mb-3">
                                <h2 class="percent">5%</h2>
                                <h2 class="box-text">Transaction Fee</h2>
                            </div>
                            <div class="listing-box">
                                <h2 class="percent">3% + $0.25</h2>
                                <h2 class="box-text">PAYMENT PROCESSING</h2>
                            </div>
                        </div>
                    </div>
                    <div class="listing-additional mt-4">
                    * Listing fees are billed in USD. Make sure your bank's currency is  in USD, otherwise, the amount in your currency will vary based on the exchange rate. 
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
                <div class="featured-block mt-3">
                    <h2 class="featured-title mb-4 text-center">Featured Sellers</h2>
                    <div class="featured-cards row m-0">
                        <div class="featured-card col-md-3 pl-4 pr-4 mb-3">
                            <div class="featured-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/advertise/featured1.png') }}" />
                                </div>
                                <div class="content mt-2">
                                    <h2 class="card-title">FASHION HOUSE NAME</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-card col-md-3 pl-4 pr-4 mb-3">
                            <div class="featured-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/advertise/featured2.png') }}" />
                                </div>
                                <div class="content mt-2">
                                    <h2 class="card-title">FOOD SHOP NAME</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-card col-md-3 pl-4 pr-4 mb-3">
                            <div class="featured-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/advertise/featured3.png') }}" />
                                </div>
                                <div class="content mt-2">
                                    <h2 class="card-title">DJ, ARTIST, BAND NAME</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                            </div>
                        </div>
                        <div class="featured-card col-md-3 pl-4 pr-4 mb-3">
                            <div class="featured-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/advertise/featured4.png') }}" />
                                </div>
                                <div class="content mt-2">
                                    <h2 class="card-title">HOTEL / RESORT NAME</h2>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="what-sell-block mt-4 pt-3">
                    <h2 class="what-sell-title mb-4 text-center">What can you sell in East Bay Loop?</h2>
                    <div class="what-sell-cards m-0 mt-4 pt-4">
                        <div class="what-sell-card mb-3">
                            <div class="what-sell-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/advertise/what-sell1.png') }}" />
                                </div>
                                <div class="content">
                                    <h2 class="card-title">FASHION</h2>
                                </div>
                            </div>
                        </div>
                        <div class="what-sell-card mb-3">
                            <div class="what-sell-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/advertise/what-sell2.png') }}" />
                                </div>
                                <div class="content">
                                    <h2 class="card-title">FOOD</h2>
                                </div>
                            </div>
                        </div>
                        <div class="what-sell-card mb-3">
                            <div class="what-sell-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/advertise/what-sell3.png') }}" />
                                </div>
                                <div class="content">
                                    <h2 class="card-title">MUSIC</h2>
                                </div>
                            </div>
                        </div>
                        <div class="what-sell-card mb-3">
                            <div class="what-sell-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/advertise/what-sell4.png') }}" />
                                </div>
                                <div class="content">
                                    <h2 class="card-title">HOTEL / RESORT</h2>
                                </div>
                            </div>
                        </div>
                        <div class="what-sell-card mb-3">
                            <div class="what-sell-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/advertise/what-sell5.png') }}" />
                                </div>
                                <div class="content">
                                    <h2 class="card-title">BARS</h2>
                                </div>
                            </div>
                        </div>
                        <div class="what-sell-card mb-3">
                            <div class="what-sell-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/advertise/what-sell5.png') }}" />
                                </div>
                                <div class="content">
                                    <h2 class="card-title">LOCAL SHOPS AND SHOPPING</h2>
                                </div>
                            </div>
                        </div>
                        <div class="what-sell-card mb-3">
                            <div class="what-sell-wrapper">
                                <div class="image-header">
                                    <img src="{{ asset('assets/img/advertise/what-sell1.png') }}" />
                                </div>
                                <div class="content">
                                    <h2 class="card-title">LOCAL DESIGNERS / FASHION HOUSES</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 many-more">And many more!</div>
                    </div>
                </div>
                <div class="col-md-12 text-center pb-3 pt-4 mb-10 mt-75">
                    <a href="{{ route('advertise-sell-products-contact-page') }}" class="adv-sell-btn">Start Selling Today!</a>
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