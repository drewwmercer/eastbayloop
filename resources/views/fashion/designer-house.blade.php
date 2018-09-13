@extends('layouts.main-page')

@section('content')
    <fashion-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/designer.png') }}', text: 'Designer and Fashion House', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/designer.png') }}', text: 'Designer and Fashion House', class: 'explore-slider'},
                            {img: '{{ asset('assets/img/sliders/designer.png') }}', text: 'Designer and Fashion House', class: 'explore-slider'}]">
            </slider>

            <section class="profile-page">
                <div class="row">
                    <div class="description col-md-8 col-sm-12 mb-4">
                        <h2 class="title">Designer and Fashion House Name</h2>
                        <div class="main-text">
                            <h2>Business Description</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, mi a blandit sollicitudin,
                                eros neque sodales felis, nec consequat ex urna eu ipsum. Fusce vel neque id tortor tempor pharetra
                                eu non urna. Sed sed metus euismod, varius sem ac, cursus quam. Nulla eu orci sit amet purus aliquam 
                                gravida at lacinia odio. Duis non erat sem. Sed dignissim scelerisque libero, in ornare ligula aliquam vel.
                                Fusce rutrum justo ac egestas malesuada. Pellentesque mi odio, suscipit in orci in, tincidunt semper enim.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam consequat, mi a blandit sollicitudin, eros 
                                neque sodales felis, nec consequat ex urna eu ipsum. Fusce vel neque id tortor tempor pharetra eu non urna. 
                                Sed sed metus euismod, varius sem ac, cursus quam. Nulla eu orci sit amet purus aliquam gravida at lacinia odio.
                                Duis non erat sem. Sed dignissim scelerisque libero, in ornare ligula aliquam vel. Fusce rutrum justo ac egestas
                                malesuada. Pellentesque mi odio, suscipit in orci in, tincidunt semper enim. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. 
                            </p>
                        </div>
                    </div>
                    <div class="info col-md-4 col-sm-12">
                        <h2 class="title text-right">
                            <a class="black-btn" href="#">Book Me For Your Event</a>
                        </h2>

                        <div class="info-block">
                            <div class="info-title">Contact Details</div>
                            <div class="col-md-12 col-sm-12 info-details">
                                <div>
                                    <i class="fa fa-map-marker"></i>
                                    <span class="ml-2">
                                        445 Mount Eden Road, Mount Eden Auckland
                                    </span>
                                        
                                </div>
                                <div>
                                    <i class="fa fa-phone"></i> 
                                    <span class="ml-2">
                                        123 4567 8901 / 123 4567 8901
                                    </span>
                                </div>  
                                <div>
                                    <i class="fa fa-dribbble"></i>
                                    <span class="ml-2">
                                         www.website.com
                                        </span>
                                    </div>                                                                                              
                            </div>
                            <div class="info-title mt-2">Social Media</div> 
                            <div class="col-md-12 col-sm-12 info-social mb-0 p-0">
                                <div class="w-100 mt-2 facebook text-center "><i class="fa fa-facebook"></i></div>
                                <div class="w-100 mt-2 twitter text-center"><i class="fa fa-twitter"></i></div>
                                <div class="w-100 mt-2 youtube text-center"><i class="fa fa-youtube"></i></div>                                
                            </div>                          
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="designer-product mt-4 ">
                <div class="row">
                    @for($i = 1; $i < 5; $i++)
                        <div class="col-md-3 designer-card mb-4">
                            <div class="designer-wrapper">
                                <div class="image-header">
                                    <img src="http://testsite.eastbayloop.com/images/woman{{ $i == 4 ? 1 : $i}}.jpeg" />
                                </div>
                                <div class="content">
                                    <h2>Product title_0{{ $i }}</h2>
                                    <div class="category">CATEGORY</div>
                                    <div class="footer">
                                        <div class="star-ratings-css mb-2">
                                            <div class="star-ratings-css-top" style="width: 61%">
                                                <span>★</span>
                                                <span>★</span>
                                                <span>★</span>
                                                <span>★</span>
                                                <span>★</span>
                                            </div>
                                            <div class="star-ratings-css-bottom">
                                                <span>★</span>
                                                <span>★</span>
                                                <span>★</span>
                                                <span>★</span>
                                                <span>★</span>
                                            </div>
                                        </div>
                                        <span class="price">$19.00</span>    
                                    </div>                                                                    
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>

             <!-- EVENTS -->
             <section class="custom-section">
                <div class="section-header">
                    <p class="title text-uppercase text-center">UPCOMING FASHION EVENTS</p>
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
                    </div>
                </div>
            </section>
        </main>
    </fashion-page>
@endsection