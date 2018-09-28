@extends('layouts.main-page')

@section('content')
    <advertise-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/business-contact.png') }}', text: 'Advertise with us', class: 'explore-slider font-barlow-bold'}]">
            </slider>

            <section class="business-form mt-4 mb-4">
                <h2 class="form-msg mb-4">
                    Thank you for you request! Please fill out this form and an East Bay Loop representative
                    will get in touch with you within 24-28 hours.
                </h2>
                <form class="mt-3">
                    <div class="row m-0">
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label for="name">Company Name*</label>
                            <input id="name" class="text-input" type="text" />
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label for="name">Email*</label>
                            <input id="name" class="text-input" type="text" />
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label for="name">Company Website</label>
                            <input id="name" class="text-input" type="text" />
                        </div>
                        <div class="col-md-6 p-0 mb-3 row m-0">
                            <div class="col-md-6 p-0 pr-3 form-field">
                                <label for="name">First Name*</label>
                                <input id="name" class="text-input" type="text" />
                            </div>
                            <div class="col-md-6 p-0 pr-3 form-field mb-3">
                                <label for="name">Last Name*</label>
                                <input id="name" class="text-input" type="text" />
                            </div>
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label for="name">Job Title</label>
                            <input id="name" class="text-input" type="text" />
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label for="name">Phone Number*</label>
                            <input id="name" class="text-input" type="text" />
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label >I am interested in the following:</label>
                            <div class="row m-0">
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check1" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check1" class="check-label">Banner Ads</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check2" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check2" class="check-label">Business Listing</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check3" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check3" class="check-label">Event Listing</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check4" type="checkbox" class="checkbox-input" checked>                                                                        
                                    <label for="check4" class="check-label">Don’t Know</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 mb-3 row m-0">
                            <div class="col-md-6 p-0 pr-3 form-field">
                                <label for="name">Start Date</label>
                                <input id="name" class="text-input date-input" type="datepicker" disabled placeholder="Select Date" />
                            </div>
                            <div class="col-md-6 p-0 pr-3 form-field mb-3">
                                <label for="name">End Date</label>
                                <input id="name" class="text-input date-input" type="datepicker" disabled placeholder="Select Date" />
                            </div>
                            <div class="help-msg pr-3">Optional</div>
                        </div>
                        <div class="col-md-12 p-0 pr-3 form-submit mb-3 mt-3">
                            <a href="{{ route('advertise-business-contact-d-s-page') }}" class="form-submit-btn">Submit</a>
                        </div>
                    </div>
                </form>
            </section>
        </main>
    </advertise-page>
@endsection