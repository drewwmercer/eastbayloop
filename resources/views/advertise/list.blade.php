@extends('layouts.main-page')

@section('content')
    <advertise-page inline-template>
        <main>
            <section class="advertise-cards">
                <div class="row m-0 mt-4 mb-4 align-items-center mr-3">
                    <div class="col-md-6 p-0">
                        <h2 class="advertise-title">Our Business Listing Packages</h2>
                    </div>
                    <div class="col-md-6 p-0 text-right">
                        <a href="{{ route('advertise-b-business-page') }}" class="become-btn">Become a VIP!</a>
                    </div>
                </div>
                <div class="row m-0 mt-4 mb-4">
                    <div class="advertise-card col-md-3 p-0 pr-3 mb-4">
                        <div class="advertise-wrapper">
                            <div class="sub-img-card w-100">
                                <div class="sub-img-wrapper">
                                    <div class="image-header">
                                        <img class="ml-3" src="{{ asset('assets/img/advertise/card1.png') }}" />
                                        <h2 class="sub-img-title mt-2">Ninja</h2>
                                        <h3 class="sub-img-period">Month to Month</h3>
                                    </div>
                                    <div class="content">
                                        <h2 class="sub-img-price">$39</h2>
                                        <a href="{{ route('advertise-business-events-contact-page') }}" class="sub-img-btn ">Signup</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-info-card w-100 mt-3">
                                <div class="sub-info-wrapper">
                                    <div class="info-box">
                                        Business Contact Details
                                    </div>
                                    <div class="info-box">
                                        Placement in Business Directory Listing
                                    </div>
                                    <div class="info-box">
                                        Max of 2 marketing/promotional
                                        photos for marketing
                                    </div>
                                    <div class="info-box">
                                        Business Listing on website under type 
                                        and location as an Exclusive business 
                                        partner.
                                    </div>
                                    <div class="info-box">
                                        Monthly Analysis report on activity.
                                    </div>
                                    <div class="info-box justify-content-center">
                                        - - - - - - - - -
                                    </div>
                                    <div class="info-box justify-content-center">
                                        - - - - - - - - -
                                    </div>
                                    <div class="info-box justify-content-center">
                                        - - - - - - - - -
                                    </div>
                                    <div class="info-box justify-content-center">
                                        - - - - - - - - -
                                    </div>
                                    <div class="info-box justify-content-center">
                                        - - - - - - - - -
                                    </div>
                                    <div class="info-box justify-content-center">
                                        - - - - - - - - -
                                    </div>
                                    <div class="info-box justify-content-center">
                                        - - - - - - - - -
                                    </div>
                                    <div class="info-box justify-content-center">
                                        - - - - - - - - -
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advertise-card col-md-3 p-0 pr-3 mb-4">
                        <div class="advertise-wrapper">
                            <div class="sub-img-card w-100">
                                <div class="sub-img-wrapper">
                                    <div class="image-header">
                                        <img class="ml-3" src="{{ asset('assets/img/advertise/card2.png') }}" />
                                        <h2 class="sub-img-title mt-2">ROCKSTAR</h2>
                                        <h3 class="sub-img-period">3 months for</h3>
                                        <div class="sub-img-recomend">Recommended</div>
                                    </div>
                                    <div class="content">
                                        <h2 class="sub-img-price">$99</h2>
                                        <a href="{{ route('advertise-business-events-contact-page') }}" class="sub-img-btn ">Signup</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-info-card w-100 mt-3">
                                <div class="sub-info-wrapper">
                                    <div class="info-box">
                                        One-week subpage slider premier.
                                    </div>
                                    <div class="info-box">
                                        Busines Contact Details
                                    </div>
                                    <div class="info-box">
                                        450 business description.
                                    </div>
                                    <div class="info-box">
                                        1X Social Media Blasts on Social Media.(FB, Twiter, LinkedIn) per month.
                                    </div>
                                    <div class="info-box">
                                        Placement in Business Directory Listing.
                                    </div>
                                    <div class="info-box">
                                        Max of 4 marketing / promotional photos for marketing
                                    </div>
                                    <div class="info-box">
                                        Social media business stream Facebook, Twiter, and LinkedIn.
                                    </div>
                                    <div class="info-box">
                                        Monthly Analysis report on activity.
                                    </div>
                                    <div class="info-box">
                                        Business Listing on website under type
                                        and location as an Exclusive business 
                                        partner.
                                    </div>
                                    <div class="info-box">
                                        Ongoing promotion and management by
                                        our team on all your Marketing needs with
                                        the community.
                                    </div>
                                    <div class="info-box justify-content-center">
                                        - - - - - - - - -
                                    </div>
                                    <div class="info-box justify-content-center">
                                        - - - - - - - - -
                                    </div>
                                    <div class="info-box justify-content-center">
                                        - - - - - - - - -
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advertise-card col-md-3 p-0 pr-3 mb-4">
                        <div class="advertise-wrapper">
                            <div class="sub-img-card w-100">
                                <div class="sub-img-wrapper">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/advertise/card3.png') }}" />
                                        <h2 class="sub-img-title mt-2">GURU</h2>
                                        <h3 class="sub-img-period">6 Months for</h3>
                                    </div>
                                    <div class="content">
                                        <h2 class="sub-img-price">$199</h2>
                                        <a href="{{ route('advertise-business-events-contact-page') }}" class="sub-img-btn ">Signup</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-info-card w-100 mt-3">
                                <div class="sub-info-wrapper">
                                    <div class="info-box">
                                        Business Contact Details
                                    </div>
                                    <div class="info-box">
                                        One-week homepage slider premier
                                    </div>
                                    <div class="info-box">
                                        One-week subpage slider premier.
                                    </div>
                                    <div class="info-box">
                                        2X Social Media Blasts on Social Media.(FB, Twiter, LinkedIn) per month.
                                    </div>
                                    <div class="info-box">
                                        600 word business description.
                                    </div>
                                    <div class="info-box">
                                        Social media business streamFacebok, Twitter, and LinkedIn.
                                    </div>
                                    <div class="info-box">
                                        Add 2 Event per month for your business
                                        to be shown on events and your page.
                                    </div>
                                    <div class="info-box">
                                        Placement in Busines Directory Listing
                                        under type and location as an Exclusive
                                        business partner.
                                    </div>
                                    <div class="info-box">
                                        One Promotional Video Embedded inIndividual business listing.
                                    </div>
                                    <div class="info-box">
                                        Two Business Write up by our Editor and Chief!
                                    </div>
                                    <div class="info-box">
                                        Unlimited marketing/promotional photos for marketing
                                    </div>
                                    <div class="info-box">
                                        Monthly Analysis report on activity.
                                    </div>
                                    <div class="info-box justify-content-center">
                                        - - - - - - - - -
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="advertise-card col-md-3 p-0 pr-3 mb-4">
                        <div class="advertise-wrapper">
                            <div class="sub-img-card w-100">
                                <div class="sub-img-wrapper">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/advertise/card4.png') }}" />
                                        <h2 class="sub-img-title mt-2">MASTER</h2>
                                        <h3 class="sub-img-period">12 Months for Annually</h3>
                                    </div>
                                    <div class="content">
                                        <h2 class="sub-img-price">$450</h2>
                                        <a href="{{ route('advertise-business-events-contact-page') }}" class="sub-img-btn ">Signup</a>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-info-card w-100 mt-3">
                                <div class="sub-info-wrapper">
                                    <div class="info-box">
                                        Business Contact Details
                                    </div>
                                    <div class="info-box">
                                        Two-week homepage slider premier
                                    </div>
                                    <div class="info-box">
                                        Two-week subpage slider premier.
                                    </div>
                                    <div class="info-box">
                                        2X Social Media Blasts on Social Media.(FB, Twiter, LinkedIn) per month.
                                    </div>
                                    <div class="info-box">
                                        UNLIMITED word business description.
                                    </div>
                                    <div class="info-box">
                                        Social media business stream Facebok, 
                                        Twitter, and LinkedIn.
                                    </div>
                                    <div class="info-box">
                                        Add Reservation System and Menu to 
                                        your business profile.
                                    </div>
                                    <div class="info-box">
                                        UNLIMITED EVENT ADS per month for
                                        your business to be shown on events
                                        and your page.
                                    </div>
                                    <div class="info-box">
                                        Placement in Business Directory Listing 
                                        under type and location as an Exclusive 
                                        business partner.
                                    </div>
                                    <div class="info-box">
                                        One per month Promotional Video
                                        Embedded in Individual business listing.
                                    </div>
                                    <div class="info-box">
                                        Four Business Write up by our Editor
                                        and Chief!
                                    </div>
                                    <div class="info-box">
                                        UNLIMITED marketing/promotional photos
                                        for marketing
                                    </div>
                                    <div class="info-box">
                                        On Demand - Tableau Systems Analysis
                                        dashboard and reporting access on activity.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </advertise-page>
@endsection