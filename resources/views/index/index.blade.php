@extends('layouts.main-page')

@section('content')
    <home-page inline-template>
        <main>
            <slider :data="[{img: 'assets/img/sliders/banner.jpeg', text: 'LOREM IPSUM DOLOR SET AMIT DUMMY', link: '#'},
                            {img: 'assets/img/sliders/banner.jpeg', text: 'LOREM IPSUM DOLOR SET AMIT DUMMY', link: '#'},
                            {img: 'assets/img/sliders/banner.jpeg', text: 'LOREM IPSUM DOLOR SET AMIT DUMMY', link: '#'}]">
            </slider>

            <!-- OUR FEATURED -->
            <section class="custom-section with-divider">
                <div class="section-header">
                    <p class="title text-uppercase text-center">our featured</p>
                    <p class="content text-center">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="custom-card col-md-4">
                            <div class="custom-wrapper">
                                <div class="image-header">
                                    <img src="http://testsite.eastbayloop.com/images/featured-img1.jpeg" />
                                </div>
                                <div class="content">
                                    <a href="#" class="title">
                                        <h2>Adventure</h2>
                                    </a>
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn mb-3" href="#">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="custom-card col-md-4">
                            <div class="custom-wrapper">
                                <div class="image-header">
                                    <img src="http://testsite.eastbayloop.com/images/featured-img2.jpeg" />
                                </div>
                                <div class="content">
                                    <a href="#" class="title">
                                        <h2>Spotlight on</h2>
                                    </a>
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn mb-3" href="#">READ MORE</a>
                                </div>
                            </div>
                        </div>
                        <div class="custom-card col-md-4">
                            <div class="custom-wrapper">
                                <div class="image-header">
                                    <img src="http://testsite.eastbayloop.com/images/featured-img3.jpeg" />
                                </div>
                                <div class="content">
                                    <a href="#" class="title">
                                        <h2>Restaurants</h2>
                                    </a>
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn mb-3" href="#">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- EXPLORE -->
            <section class="custom-section with-divider">
                <div class="section-header">
                    <p class="title text-uppercase text-center">Explore</p>
                    <p class="content text-center">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="explore-card text-center col-md-3 mt-3">
                            <div class="explore-wrapper">
                                <div class="image-header">
                                    <img src="http://testsite.eastbayloop.com/images/explore-img1.png" />
                                </div>
                                <div class="content">
                                    <h2>Adventure</h2>
                                    <p class="text">
                                        Vivamus suscipit tortor
                                        felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="explore-card text-center col-md-3 mt-3">
                            <div class="explore-wrapper">
                                <div class="image-header">
                                    <img src="http://testsite.eastbayloop.com/images/explore-img2.png" />
                                </div>
                                <div class="content">
                                    <h2>NIGHTLIFE/DAYCLUB</h2>
                                    <p class="text">
                                        Vivamus suscipit tortor
                                        felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="explore-card text-center col-md-3 mt-3">
                            <div class="explore-wrapper">
                                <div class="image-header">
                                    <img src="http://testsite.eastbayloop.com/images/explore-img3.png" />
                                </div>
                                <div class="content">
                                    <h2>PET CLUB</h2>
                                    <p class="text">
                                        Vivamus suscipit tortor
                                        felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="explore-card text-center col-md-3 mt-3">
                            <div class="explore-wrapper">
                                <div class="image-header">
                                    <img src="http://testsite.eastbayloop.com/images/explore-img4.png" />
                                </div>
                                <div class="content">
                                    <h2>HOTEL</h2>
                                    <p class="text">
                                        Vivamus suscipit tortor
                                        felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FASHION -->
            <section class="custom-section with-divider">
                <div class="section-header">
                    <p class="title text-uppercase text-center">Fashion</p>
                    <p class="content text-center">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="fashion-card text-center col-md-4 mt-3">
                            <div class="fashion-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/fashion-img1.png" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>WOMEN</h2>
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="fashion-card text-center col-md-4 mt-3">
                            <div class="fashion-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/fashion-img2.png" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>NEW ARRIVAL</h2>
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="fashion-card text-center col-md-4 mt-3">
                            <div class="fashion-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/fashion-img3.png" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>MEN</h2>
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- TASTE -->
            <section class="custom-section with-divider">
                <div class="section-header">
                    <p class="title text-uppercase text-center">Taste</p>
                    <p class="content text-center">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere.</p>
                </div>
                <div class="section-content container">
                    <div class="row">
                        <div class="taste-card text-center col-md-4 mt-3">
                            <div class="taste-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/taste-img1.jpeg" />
                                        <span class="text text-uppercase">Restaurants</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="taste-card text-center col-md-4 mt-3">
                            <div class="taste-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/taste-img2.jpeg" />
                                        <span class="text text-uppercase">Chef Corner</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="taste-card text-center col-md-4 mt-3">
                            <div class="taste-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/taste-img3.jpeg" />
                                        <span class="text text-uppercase">Mixology</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="text">
                                        Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.
                                    </p>
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- LOCAL MARKETPLACE -->
            <section class="custom-section with-divider">
                <div class="section-header">
                    <p class="title text-uppercase text-center">Local Marketplace</p>
                    <p class="content text-center">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere.</p>
                </div>
                <div class="section-content container">
                    <div class="row">
                        <div class="market-card text-left col-md-4 mt-3">
                            <div class="market-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/place-img1.jpeg" />
                                        <span class="text text-uppercase">Acme Bread Company</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="text">
                                        Catherine felt trapped She had a key staff member request a raise that was not earned That same staff member decided she could ....
                                    </p>
                                    <a class="read-more-link" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="market-card text-left col-md-4 mt-3">
                            <div class="market-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/place-img2.jpeg" />
                                        <span class="text text-uppercase">American Eatery at</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="text">
                                        Catherine felt trapped She had a key staff member request a raise that was not earned That same staff member decided she could ....
                                    </p>
                                    <a class="read-more-link" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="market-card text-left col-md-4 mt-3">
                            <div class="market-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/place-img3.jpeg" />
                                        <span class="text text-uppercase">Bay Crossings</span>
                                    </a>
                                </div>
                                <div class="content">
                                    <p class="text">
                                        Catherine felt trapped She had a key staff member request a raise that was not earned That same staff member decided she could ....
                                    </p>
                                    <a class="read-more-link" href="#">READ MORE</a>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- MUSIC -->
            <section class="custom-section with-divider">
                <div class="section-header">
                    <p class="title text-uppercase text-center">Music</p>
                    <p class="content text-center">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur aliquet quam id dui posuere.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="music-card text-left col-md-4 mt-3 mb-4 pl-0">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/music-img1.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>DJS</h2>
                                    <p class="text">
                                        Catherine felt trapped She had a key staff member request a raise that was not earned That same staff member decided she could ....
                                    </p>

                                    <a href="#" class="radio-plus-btn">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4 pl-0">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/music-img2.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>BANDS</h2>
                                    <p class="text">
                                        Catherine felt trapped She had a key staff member request a raise that was not earned That same staff member decided she could ....
                                    </p>

                                    <a href="#" class="radio-plus-btn">+</a>
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4 pl-0">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/music-img3.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>ARTISTS</h2>
                                    <p class="text">
                                        Catherine felt trapped She had a key staff member request a raise that was not earned That same staff member decided she could ....
                                    </p>

                                    <a href="#" class="radio-plus-btn">+</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- STAY -->
            <section class="custom-section with-divider">
                <div class="section-header">
                    <p class="title text-uppercase text-center">STAY</p>
                    <p class="content text-center">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="music-card text-left col-md-4 mt-3 mb-4">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/stay-img1.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>HOTELS/RESORTS</h2>
                                    <p class="text text-grey">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                    </p>

                                    <a class="read-more-link" href="#">Read More...</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/stay-img2.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>B&B/HOSTELS</h2>
                                    <p class="text text-grey">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                    </p>

                                    <a class="read-more-link" href="#">Read More...</a>                            
                                </div>
                            </div>
                        </div>
                        <div class="music-card text-left col-md-4 mt-3 mb-4">
                            <div class="music-wrapper">
                                <div class="image-header">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/stay-img3.jpeg" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h2>LOOP EXCLUSIVE VACATION PACKAGES</h2>
                                    <p class="text text-grey">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.
                                    </p>

                                    <a class="read-more-link" href="#">Read More...</a>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- EVENTS -->
            <section class="custom-section">
                <div class="section-header">
                    <p class="title text-uppercase text-center">EVENTS</p>
                    <p class="content text-center">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="event-card col-md-12 mb-4">
                            <div class="event-wrapper row">
                                <div class="image-header col-md-3">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/events-img1.jpeg" />
                                    </a>
                                </div>
                                <div class="content col-md-6">
                                    <div class="header">
                                        <span class="title">
                                            FLORENCE + THE MACHINE 
                                            <span class="time">8pm</span>
                                        </span>
                                        <span class="additional-title">
                                            Cold War Kids
                                            <span class="time">7pm</span>                                        
                                        </span>
                                    </div>
                                    <div class="footer">
                                        <div class="date">
                                            <span class="text">
                                                OCT <span>23</span>
                                            </span>
                                        </div>
                                        <div class="description">
                                            <p class="text">This event is 21 and over</p>
                                            <a href="#">More Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="read-more col-md-3">
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                                                                
                                </div>
                            </div>
                        </div>
                        <div class="event-card col-md-12 mb-4">
                            <div class="event-wrapper row">
                                <div class="image-header col-md-3">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/events-img2.jpeg" />
                                    </a>
                                </div>
                                <div class="content col-md-6">
                                    <div class="header">
                                        <span class="title">
                                            FLORENCE + THE MACHINE 
                                            <span class="time">8pm</span>
                                        </span>
                                        <span class="additional-title">
                                            Cold War Kids
                                            <span class="time">7pm</span>                                        
                                        </span>
                                    </div>
                                    <div class="footer">
                                        <div class="date">
                                            <span class="text">
                                                OCT <span>23</span>
                                            </span>
                                        </div>
                                        <div class="description">
                                            <p class="text">This event is 21 and over</p>
                                            <a href="#">More Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="read-more col-md-3">
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                                                                
                                </div>
                            </div>
                        </div>
                        <div class="event-card col-md-12 mb-4">
                            <div class="event-wrapper row">
                                <div class="image-header col-md-3">
                                    <a href="#">
                                        <img src="http://testsite.eastbayloop.com/images/events-img3.jpeg" />
                                    </a>
                                </div>
                                <div class="content col-md-6">
                                    <div class="header">
                                        <span class="title">
                                            FLORENCE + THE MACHINE 
                                            <span class="time">8pm</span>
                                        </span>
                                        <span class="additional-title">
                                            Cold War Kids
                                            <span class="time">7pm</span>                                        
                                        </span>
                                    </div>
                                    <div class="footer">
                                        <div class="date">
                                            <span class="text">
                                                OCT <span>23</span>
                                            </span>
                                        </div>
                                        <div class="description">
                                            <p class="text">This event is 21 and over</p>
                                            <a href="#">More Info</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="read-more col-md-3">
                                    <a class="read-more-btn float-none" href="#">READ MORE</a>                                                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </home-page>
@endsection
