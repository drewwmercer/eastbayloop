@extends('layouts.main-page')

@section('content')
    <fashion-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/hautre.png') }}', text: 'Haute Couture', class: 'explore-slider'}]">
            </slider>

            <section class="haute-main mt-4">
                <div class="row m-0 p-0">
                    <div class="col-md-8 houte-cards p-0">
                        <h2 class="h2-title mb-3">FASHION EDITORIALS</h2>
                        @for($i = 1; $i < 3; $i++)
                            <div class="col-md-12 houte-card mb-3 p-0">
                                <div class="houte-wrapper">
                                    <div class="image-header">
                                        <img src='{{ asset("assets/img/fashion/editorial$i.png") }}' />
                                    </div>
                                    <div class="content">
                                        <p class="breadcreambs">Lorem ipsum / dolor sit amet / consectetur</p>
                                        <h2 class="houte-title">Fashion Editorial {{ $i }}</h2>
                                        <p class="houte-text">consectetur adipiscing elit. Sed semper velit pellentesque purus porttitor rhoncus. Mauris commodo mattis ligula eu porttitor. Eu leo lectus, venenatis eu efficitur et, venenatis lobortis eros. Donec fringilla blandit auctor. Orci varius natoque penatibus et magnis dis parturient monets, nascetur ridiculus mus.</p>
                                        <a class="mt-3 houte-rm" href="#">Read More...</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <div class="col-md-4 scoop-cards pr-0">
                        <h2 class="h2-title mb-3">FASHION SCOOP</h2>
                        @for($i = 1; $i < 4; $i++)
                            <div class="col-md-12 p-0 mb-3 scoop-card">
                                <div class="scoop-wrapper">
                                    <div class="image-header">
                                        <img src='{{ asset("assets/img/fashion/scoop$i.png") }}' />
                                    </div>
                                    <div class="content mt-3">
                                        <h2 class="scoop-title">FASHION SCOOP {{ $i }}</h2>
                                        <p class="scoop-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem, varius in dictum</p>
                                        <a class="scoop-rm" href="#">Read More...</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </section>
            <section class="houte-talent-cards">
                <div class="talent-header mb-3 w-100">
                    <h2 class="h2-title">TALENT & CASTING</h2>
                    <a href="{{ route('music-artist-band-dj-page') }}" class='black-btn'>View all Talent & Casting</a>
                </div>
                <div class="row p-0 m-0">
                    @for($i = 1; $i < 5; $i++)
                        <div class="houte-talent-card col-md-3 pl-0 mb-3">
                            <div class="houte-talent-wrapper">
                                <div class="image-header">
                                    <img src='{{ asset("assets/img/fashion/talent$i.png") }}' />
                                </div>
                                <div class="content">
                                    <h2 class="houte-talent-title">Talent & Casting {{ $i }}</h2>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>

            <!-- EVENTS -->
            <events-widget></events-widget>
        </main>
    </fashion-page>
@endsection