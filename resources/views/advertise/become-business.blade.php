@extends('layouts.main-page')

@section('content')
    <advertise-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/b-business.png') }}', text: 'Become a VIP Business!', class: 'explore-slider advertise-slider'}]">
            </slider>

            <section class="become-user-btn">
                <div class="become-blocks">
                    <div class="row become-cards">
                        <div class="col-md-4 become-card mb-4">
                            <div class="become-wrapper">
                                <div class="become-header">
                                    <h2 class="header-text mb-0">3 MONTHS</h2>
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
                    <h2 class="b-title mb-4 text-center">Become a Loop Exclusive and get access to:</h2>

                    <ul class="list-none b-list">
                        <li>
                            <span class="b-star"></span>
                            All Exclusive Access to Business Listing & Event Listing A La Carte Add On's
                        </li>
                        <li>
                            <span class="b-star"></span>
                            Website Page Placement Exclusive Access
                        </li>
                        <li>
                            <span class="b-star"></span>
                            VIP User Demographic Exclusive Access
                        </li>
                        <li>
                            <span class="b-star"></span>
                            25% Discount on Business Consulting Services
                        </li>
                        <li>
                            <span class="b-star"></span>
                            Create Deal and Promotional Campaigns  on an as needed basis.
                        </li>
                        <li>
                            <span class="b-star"></span>
                            Wine Loop and Bars/ Breweries/ Distilleries are considerd VIP business clients.
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </advertise-page>
@endsection
