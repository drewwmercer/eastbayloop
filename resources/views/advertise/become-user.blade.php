@extends('layouts.main-page')

@section('content')
    <advertise-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/b-user.png') }}', text: 'Become a VIP User!', class: 'explore-slider advertise-slider'}]">
            </slider>

            <section class="become-user-btn">
                <a href="#" class="join-btn">Join Now!</a>
            </section>
            <section class="become-user-text mt-4 mb-4">
                <div>
                    <h2 class="b-title mb-4">Become a Loop Exclusive and get access to:</h2>

                    <ul class="list-none b-list">
                        <li>
                            <span class="b-star"></span>
                            WineLoop!
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