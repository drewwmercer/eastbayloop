@extends('layouts.main-page')

@section('content')
    <advertise-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/sell-products.png') }}', text: 'Sell Products', class: 'explore-slider font-barlow-bold'}]">
            </slider>
            <h2 class="form-msg mb-4 pb-3 mt-4">
                Thank you for you request! Please fill out this form and an East Bay Loop representative
                will get in touch with you within 24-28 hours.
            </h2>
            <section class="business-form mt-4 mb-4">
                <form class="mt-3">
                    <div class="row m-0">
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
                            <label for="name">Company Name*</label>
                            <input id="name" class="text-input" type="text" />
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label for="name">Phone Number*</label>
                            <input id="name" class="text-input" type="text" />
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label for="name">Company Website</label>
                            <input id="name" class="text-input" type="text" />
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label for="name">Email*</label>
                            <input id="name" class="text-input" type="text" />
                        </div>        
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label for="name">Job Title</label>
                            <input id="name" class="text-input" type="text" />
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label for="name">Social Media Website 1</label>
                            <input id="name" class="text-input" type="text" />
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label for="name">Social Media Website 2</label>
                            <input id="name" class="text-input" type="text" />
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field">
                                <label for="name">Start Date</label>
                                <input id="name" class="text-input date-input" type="datepicker" disabled placeholder="Select Date" />
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label for="name">End Date</label>
                            <input id="name" class="text-input date-input" type="datepicker" disabled placeholder="Select Date" />
                            <div class="help-msg">Optional</div>
                        </div>

                        <div class="col-md-12 p-0 form-field mb-3">
                            <label class=" pl-1" >I am interested in the following:</label>
                            <div class="row m-0">
                                <div class="col-md-6 p-0 pr-3 form-check-field pl-1">
                                    <input id="check1" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check1" class="check-label">Fashion / Local Store / Designer</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3 form-check-field pl-1">
                                    <input id="check2" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check2" class="check-label">Stay - Loop Exclusive </label>
                                </div>
                                <div class="col-md-6 p-0 pr-3 form-check-field pl-1">
                                    <input id="check3" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check3" class="check-label">Marketplace / Food / Local Goods & Condiments</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3 form-check-field pl-1">
                                    <input id="check4" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check4" class="check-label">Stay - Short and Long Stay RentalsVacation Packages</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3 form-check-field pl-1">
                                    <input id="check5" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check5" class="check-label">Music / Digital Music</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3 form-check-field pl-1">
                                    <input id="check6" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check6" class="check-label">Stay - Stay for Sell</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3 form-check-field pl-1">
                                    <input id="check7" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check7" class="check-label">Nightlige / Dayparty - Bottle Service Table / Daybed / Cabana Reservations</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3 form-check-field pl-1">
                                    <input id="check8" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check8" class="check-label">Taste - Wine Loop / Bars / Breweries / Distilleries</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3 form-check-field pl-1">
                                    <input id="check9" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check9" class="check-label">Stay - Hotel / Resort</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3 form-check-field pl-1">
                                    <input id="check10" type="checkbox" class="checkbox-input" checked>                                                                        
                                    <label for="check10" class="check-label">Don’t Know</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3 form-check-field pl-1">
                                    <input id="check11" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check11" class="check-label">Stay - B&B / Hostels</label>
                                </div>
                            </div>
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