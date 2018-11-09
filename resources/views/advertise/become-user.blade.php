@extends('layouts.main-page')

@section('content')
    <advertise-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/b-user.png') }}', text: 'Become a VIP User!', class: 'explore-slider advertise-slider'}]">
            </slider>

            <section class="become-user-btn">
                <div class="become-blocks">
                    <div class="row become-cards">
                        <div class="col-md-4 become-card mb-4">
                            <div class="become-wrapper">
                                <div class="become-header">
                                    <h2 class="header-text mb-0">MONTH to MONTH</h2>
                                    <h3 class="header-additional-text">(Recurring Pricing)</h3>
                                </div>
                                <div class="become-footer">
                                    <h2 class="footer-text pt-2">$119</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 become-card mb-4">
                            <div class="become-wrapper">
                                <div class="become-header">
                                    <h2 class="header-text mb-0">6 MONTHS</h2>
                                </div>
                                <div class="become-footer">
                                    <h2 class="footer-text pt-2">$229</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 become-card mb-4">
                            <div class="become-wrapper">
                                <div class="become-header">
                                    <h2 class="header-text mb-0">ANNUALLY</h2>
                                </div>
                                <div class="become-footer">
                                    <h2 class="footer-text pt-2">$495</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="join-btn">Join Now!</a>
            </section>
            <section class="become-user-text mt-4 mb-4">
                <div>
                    <h2 class="b-title mb-4">Become a Loop Exclusive and get access to:</h2>

                    <ul class="list-none b-list">
                        <li>
                            <span class="b-star"></span>
                            Full Access to Wineloop & Bars, Breweries, Distilleries
                        </li>
                        <li>
                            <span class="b-star"></span>
                            Exclusive Restaurant Access!
                        </li>
                        <li>
                            <span class="b-star"></span>
                            Exclusive Experience & Events
                        </li>
                        <li>
                            <span class="b-star"></span>
                            Exclusive Local Adventures & Vacation Packages
                        </li>
                        <li>
                            <span class="b-star"></span>
                            Exclusively Yours, Deals & much much more...
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </advertise-page>
@endsection