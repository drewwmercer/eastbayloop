@extends('layouts.main-page')

@section('content')
    <fashion-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/spotlight.png') }}', text: 'Spotlight On', class: 'explore-slider'}]">
            </slider>

            <section class="spotlight-page">
                <h2 class="blog-title">BLOG</h2>
                <section class="blog row m-0">
                    <div class="blog-card col-md-12 p-0 mb-4">
                        <div class="blog-wrapper">
                            <div class="col-md-5 image-header p-0">
                                <img src='{{ asset("assets/img/fashion/blog1.png") }}' />
                            </div>
                            <div class="col-md-7 content">
                                <h2 class="blog-title mt-3">Blog Post - Fashion Feature</h2>
                                <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas urna ex, iaculis non porttitor eget, pulvinar eu lorem. Nunc at consequat ante. Suspendisse nec ante blandit, condimentum sem ut, auctor mauris. Aliquam sit amet auctor odio.</p>
                                <p class="blog-text">Vestibulum elementum ullamcorper tortor, sed rhoncus felis. Phasellus tempor elit quis ex volutpat porttitor. Vivamus quis justo velit. Sed accumsan urna ac lectus posuere. Phasellus tempor elit quis ex volutpat porttitor. Vivamus quis justo velit. Sed accumsan urna ac lectus posuere laoreet. Aenean volutpat tellus vel sem facilisis vulputate. </p>
                                <a class="blog-rm" href="#">Read More...</a>
                                <p class="blog-breadcreambs mt-2 mb-0">Lorem ipsum / dolor sit amet / consectetur</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card col-md-12 p-0 mb-4">
                        <div class="blog-wrapper">
                            <div class="col-md-5 image-header p-0">
                                <img src='{{ asset("assets/img/fashion/blog2.png") }}' />
                            </div>
                            <div class="col-md-7 content">
                                <h2 class="blog-title mt-3">Blog Post - Interview</h2>
                                <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas urna ex, iaculis non porttitor eget, pulvinar eu lorem. Nunc at consequat ante. Suspendisse nec ante blandit, condimentum sem ut, auctor mauris. Aliquam sit amet auctor odio.</p>
                                <p class="blog-text">Vestibulum elementum ullamcorper tortor, sed rhoncus felis. Phasellus tempor elit quis ex volutpat porttitor. Vivamus quis justo velit. Sed accumsan urna ac lectus posuere. Phasellus tempor elit quis ex volutpat porttitor. Vivamus quis justo velit. Sed accumsan urna ac lectus posuere laoreet. Aenean volutpat tellus vel sem facilisis vulputate. </p>
                                <a class="blog-rm" href="#">Read More...</a>
                                <p class="blog-breadcreambs mt-2 mb-0">Lorem ipsum / dolor sit amet / consectetur</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card col-md-12 p-0 mb-4">
                        <div class="blog-wrapper">
                            <div class="col-md-5 image-header p-0">
                                <img src='{{ asset("assets/img/fashion/blog3.png") }}' />
                            </div>
                            <div class="col-md-7 content">
                                <h2 class="blog-title mt-3">Blog Post - Trend Editorial</h2>
                                <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas urna ex, iaculis non porttitor eget, pulvinar eu lorem. Nunc at consequat ante. Suspendisse nec ante blandit, condimentum sem ut, auctor mauris. Aliquam sit amet auctor odio.</p>
                                <p class="blog-text">Vestibulum elementum ullamcorper tortor, sed rhoncus felis. Phasellus tempor elit quis ex volutpat porttitor. Vivamus quis justo velit. Sed accumsan urna ac lectus posuere. Phasellus tempor elit quis ex volutpat porttitor. Vivamus quis justo velit. Sed accumsan urna ac lectus posuere laoreet. Aenean volutpat tellus vel sem facilisis vulputate. </p>
                                <a class="blog-rm" href="#">Read More...</a>
                                <p class="blog-breadcreambs mt-2 mb-0">Lorem ipsum / dolor sit amet / consectetur</p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card col-md-12 p-0 mb-4">
                        <div class="blog-wrapper">
                            <div class="col-md-5 image-header p-0">
                                <img src='{{ asset("assets/img/fashion/blog4.png") }}' />
                            </div>
                            <div class="col-md-7 content">
                                <h2 class="blog-title mt-3">Blog Post - Emerging Designer</h2>
                                <p class="blog-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas urna ex, iaculis non porttitor eget, pulvinar eu lorem. Nunc at consequat ante. Suspendisse nec ante blandit, condimentum sem ut, auctor mauris. Aliquam sit amet auctor odio.</p>
                                <p class="blog-text">Vestibulum elementum ullamcorper tortor, sed rhoncus felis. Phasellus tempor elit quis ex volutpat porttitor. Vivamus quis justo velit. Sed accumsan urna ac lectus posuere. Phasellus tempor elit quis ex volutpat porttitor. Vivamus quis justo velit. Sed accumsan urna ac lectus posuere laoreet. Aenean volutpat tellus vel sem facilisis vulputate. </p>
                                <a class="blog-rm" href="#">Read More...</a>
                                <p class="blog-breadcreambs mt-2 mb-0">Lorem ipsum / dolor sit amet / consectetur</p>
                            </div>
                        </div>
                    </div>
                    <div class="scoop-cards pr-0 ">
                        <h2 class="h2-title mb-3">COMMUNITY NEWS</h2>
                        <div class="row m-0 pl-1">
                            @for($i = 1; $i < 4; $i++)
                                <div class="col-md-4 p-0 mb-3 pr-3 scoop-card">
                                    <div class="scoop-wrapper">
                                        <div class="image-header">
                                            <img src='{{ asset("assets/img/fashion/scoop$i.png") }}' />
                                        </div>
                                        <div class="content mt-3">
                                            <h2 class="scoop-title">COMMUNITY  {{ $i }}</h2>
                                            <p class="scoop-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit lorem, varius in dictum</p>
                                            <a class="scoop-rm" href="#">Read More...</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </section>
            </section>
        </main>
    </fashion-page>
@endsection