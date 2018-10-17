@extends('layouts.main-page')

@section('content')
    <taste-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/distilleries.png') }}', text: 'For Groups, for Celebrations, and Private Parties', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/distilleries.png') }}', text: 'For Groups, for Celebrations, and Private Parties', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/distilleries.png') }}', text: 'For Groups, for Celebrations, and Private Parties', class: 'explore-slider'}]">
            </slider>

            <section class="taste-contact-page">
                <form>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <input class="taste-contact-input" placeholder="Name*" />
                            <input class="taste-contact-input" placeholder="Email*" />
                            <input class="taste-contact-input" placeholder="Time Start/End" />
                            <input class="taste-contact-input" placeholder="Do you need a Transportation for your Group?" />                            
                        </div>
                        <div class="col-md-6">
                            <input class="taste-contact-input" placeholder="Phone Number*" />
                            <input class="taste-contact-input" placeholder="Date of Event" />
                            <input class="taste-contact-input" placeholder="Reason for Gathering" />
                            <input class="taste-contact-input" placeholder="Preferred Business Client/ Venue" />                            
                        </div>
                        <div class="col-md-12">
                            <textarea class="taste-contact-textarea" placeholder="Event Description"></textarea>
                        </div>
                    </div>
                </form>
            </section>
        </main>
    </taste-page>
@endsection