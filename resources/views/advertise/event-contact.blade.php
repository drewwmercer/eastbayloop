@extends('layouts.main-page')

@section('content')
    <advertise-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/event-contact.png') }}', text: 'List your Event', class: 'explore-slider font-barlow-bold'}]">
            </slider>
            <h2 class="form-msg mb-4 pb-3 mt-4">
                Thank you for your request! Please fill out this form and we will be in touch:
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
                        
                        <div class="col-md-12 p-0 pr-3 form-field mb-3">
                            <label >My Event Listing category:</label>
                            <div class="row m-0">
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check1" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check1" class="check-label">Culinary / Taste / Food / Mixology</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check2" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check2" class="check-label">Family Friendly Events</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check3" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check3" class="check-label">Sports / Concert / Theater / Museum Ticket</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check5" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check5" class="check-label">Kid Events</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check6" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check6" class="check-label">Community Festivals</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check4" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check4" class="check-label">Day Events</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check7" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check7" class="check-label">Gallery / Museum Exhibits</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check8" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check8" class="check-label">Conferences / Business Networking</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check9" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check9" class="check-label">Music Event - DJ / Artist / Band</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check10" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check10" class="check-label">The Loop Exclusive Exerience</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check11" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check11" class="check-label">Night Club Events</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3 mr-3">
                            <label >Are you adding events to a current business with East Bay Loop?</label>
                            <div class="row m-0">
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check16" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check16" class="check-label">Yes</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check17" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check17" class="check-label">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3 mr-3">
                            <label >Do you have more than one event?</label>
                            <div class="row m-0">
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check18" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check18" class="check-label">Yes</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check19" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check19" class="check-label">No</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 p-0 pr-3 form-field mb-3">
                            <label >Is your event interested in being featured?</label>
                            <div class="row m-0">
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check20" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check20" class="check-label">Yes</label>
                                </div>
                                <div class="col-md-6 p-0 pr-3">
                                    <input id="check21" type="checkbox" class="checkbox-input">                                                                        
                                    <label for="check21" class="check-label">No</label>
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