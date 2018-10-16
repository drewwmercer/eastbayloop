@extends('layouts.main-page')

@section('content')
    <advertise-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/b-business.png') }}', text: 'Become a VIP Business!', class: 'explore-slider advertise-slider'}]">
            </slider>

            <section class="become-user-btn">
                <a href="{{ route('advertise-business-contact-d-page') }}" class="mt-4 join-btn">Join Now!</a>
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
                            Exclusive Access to Much Much More!
                        </li>
                    </ul>
                </div>
            </section>
        </main>
    </advertise-page>
@endsection
