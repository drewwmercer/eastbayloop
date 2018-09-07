@extends('layouts.main-page')

@section('css')
@endsection

@section('content')
    <home-page inline-template>
        <div>
            <div class="main-slider">
                <section class="slider">
                    <div class="flexslider w-100">
                        <ul class="slides">
                            <li>
                                <div class="index-banner" style="background:url('assets/img/sliders/banner.jpeg') no-repeat center;">
                                    <div class="wrapper">
                                        <span class="banner-text">LOREM IPSUM DOLOR SET AMIT DUMMY</span>
                                        <a class="banner-btn" href="#">READ MORE</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="index-banner" style="background:url('assets/img/sliders/banner.jpeg') no-repeat center;">
                                    <div class="wrapper">
                                        <span class="banner-text">LOREM IPSUM DOLOR SET AMIT DUMMY</span>
                                        <a class="banner-btn" href="#">READ MORE</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="index-banner" style="background:url('assets/img/sliders/banner.jpeg') no-repeat center;">
                                    <div class="wrapper">
                                        <span class="banner-text">LOREM IPSUM DOLOR SET AMIT DUMMY</span>
                                        <a class="banner-btn" href="#">READ MORE</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </home-page>
@endsection

@section('scripts')
@endsection

