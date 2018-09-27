@extends('layouts.main-page')

@section('content')
    <stay-page inline-template>
        <main>
            <slider :data="[{img: 'http://testsite.eastbayloop.com/images/banner10.jpeg', text: 'STAY', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner10.jpeg', text: 'STAY', class: 'explore-slider'},
                            {img: 'http://testsite.eastbayloop.com/images/banner10.jpeg', text: 'STAY', class: 'explore-slider'}]">
            </slider>
            <section class="custom-section">
                <div class="section-header">
                    <p class="content text-center mt-4 font-barlow-regular">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius nulla ac ipsum pharetra, sodales euismod est rhoncus.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="music-card text-left col-md-4 mt-3 mb-4">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="{{ route('stay-sell-page') }}">
                                        <img src="http://testsite.eastbayloop.com/images/stay-img1.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="font-barlow-regular">Hotels / Resorts</h2>
                                    <p class="text text-grey">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                    </p>

                                    <a class="read-more-link" href="{{ route('stay-sell-page') }}">Read More...</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="{{ route('stay-sell-page') }}">
                                        <img src="http://testsite.eastbayloop.com/images/stay-img2.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="font-barlow-regular">B&B/HOSTELS</h2>
                                    <p class="text text-grey">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                    </p>

                                    <a class="read-more-link" href="{{ route('stay-sell-page') }}">Read More...</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="{{ route('stay-sell-page') }}">
                                        <img src="http://testsite.eastbayloop.com/images/stay-img3.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="font-barlow-regular">LOOP EXCLUSIVE VACATION PACKAGES</h2>
                                    <p class="text text-grey">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                    </p>

                                    <a class="read-more-link" href="{{ route('stay-sell-page') }}">Read More...</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="{{ route('stay-sell-page') }}">
                                        <img src="http://testsite.eastbayloop.com/images/staysell3img4.png" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="font-barlow-regular">SHORT & LONG STAY RENTALS</h2>
                                    <p class="text text-grey">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                    </p>

                                    <a class="read-more-link" href="{{ route('stay-sell-page') }}">Read More...</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="{{ route('stay-sell-page') }}">
                                        <img src="http://testsite.eastbayloop.com/images/staysell3img5.png" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="font-barlow-regular">STAY FOR SELL</h2>
                                    <p class="text text-grey">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                    </p>

                                    <a class="read-more-link" href="{{ route('stay-sell-page') }}">Read More...</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="{{ route('stay-sell-page') }}">
                                        <img src="http://testsite.eastbayloop.com/images/staysell3img6.png" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2 class="font-barlow-regular">GROUP OFFERS & SPECIALS</h2>
                                    <p class="text text-grey">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                    </p>

                                    <a class="read-more-link" href="{{ route('stay-sell-page') }}">Read More...</a>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="stay-map mt-4 mb-4 p-1">
                <iframe allowfullscreen="" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d26081603.29442044!2d-95.677068!3d37.06250000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1505332785928&z=6"></iframe>
            </section>
        </main>
    </stay-page>
@endsection