@extends('layouts.main-page')

@section('content')
    <explore-page inline-template>
        <main>
            <slider :data="[{img: '{{ asset('assets/img/sliders/perfume.png') }}', text: 'Perfume', class: 'explore-slider'}]">
            </slider>

            <section class="product-details">
                <div class="header row">
                    <div class="left-text col-md-4">
                        Infuse your hair with a calming aroma,
                        letting this moment of peace positively
                        envelop you.
                    </div>
                    <div class="image col-md-3">
                        <img src="{{ asset('assets/img/product1.png') }}" />
                    </div>
                    <div class="price-content col-md-5">
                        <h2 class="title">Perfume ™</br> Lorem ipsum</h2>
                        <div class="rating w-100">
                            <div class="star-ratings-css">
                                <div class="star-ratings-css-top" style="width: 81%">
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
                            <span class="number">4.8 (2114)</span>
                            <a href="#">Write a review.</a>
                        </div>
                        <p class="description mt-3">
                            Lorem ipsum dolor morikue   protein from the Peruvian
                            rainforest. For optimum benefits, use with <b>shampure™
                            conditioner.</b>
                        </p>
                        <div class="selects">
                            <div class="w-100">
                                <span>
                                    <select>
                                        <option value="Select">8.5 fl oz/250 ml #14.00</option>
                                        <option value="bar1">7.5 fl oz/250 ml #14.00</option>
                                        <option value="bar2">6.5 fl oz/250 ml #14.00</option>
                                    </select>
                                </span>
                            </div>
                            <div class="w-100 mt-3">
                                <span>
                                    <select>
                                        <option value="Select">Purchase One Time</option>
                                        <option value="bar1">Purchase One Time</option>
                                        <option value="bar2">Purchase One Time</option>
                                    </select>
                                </span>
                            </div>
                        </div>
                        <div class="price-details w-100">
                            <span>Earn 140 Pure Privilege Points</span>
                            <span class="price">$14.00</span>
                        </div>
                        <div class="buttons-section w-100 mt-4">
                            <a href="{{ route('fashion-per-product-page') }}">ADD TO BAG</a>
                            <i class="fa fa-heart ml-4" aria-hidden="true"></i>
                            <i class="fa fa-share-square-o ml-3" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <div class="row">
                        <div class="col-3 tabs">
                            <div class="nav flex-column " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" id="v-pills-description-tab" data-toggle="pill" href="#v-pills-description" role="tab" aria-controls="v-pills-description" aria-selected="true">Description</a>
                                <a class="nav-link" id="v-pills-reviews-tab" data-toggle="pill" href="#v-pills-reviews" role="tab" aria-controls="v-pills-reviews" aria-selected="false">Reviews (2)</a>
                                <a class="nav-link" id="v-pills-video-tab" data-toggle="pill" href="#v-pills-video" role="tab" aria-controls="v-pills-video" aria-selected="false">Video</a>
                            </div>
                        </div>
                        <div class="col-9 content">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-description" role="tabpanel" aria-labelledby="v-pills-description-tab">
                                    <h2>Product Description</h2>
                                    <p>
                                        Culpa qui offici Have you ever wondered how grateful can be your pet for your care and love? Little hears of those animals we take care of are able to warm us and hide from sad thoughts no mater how big our pets are. They amy be small and fearful or big and brave, obedient or self-willed, they may differ in color and shape, but all they have is love in their hearts which we can easily discover just looking into their eyes.
                                        A desire to surround your pet with tenderness and present him or her with some plaasant emotions making a little holiday for a dear animal is a quite natural one. And we know how to make your ideas real! Out Pets & Glamour Store can meet the needs and requirements even of the most hard-to-please customers. We tried to foresee your wishes and are ready to offer you a wide range of various pets clothes and accessories which
                                        are of premium quality and are in line with today’s pets fashion and design. Basides, you are welcome to evaluate a great choice of birthday cakes, delicious treats, charming toys, carriers of all types, gifts for pet lovers and their little friends, and even more goods and brilliant ideas to make your pets happy.

                                        Let us be your assistants in making a nice present for your beloved pet. Your little friend is worth some original and creative gfts which you
                                        will find among a big variety of our products. A charming animal world is already waiting for you!

                                    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-reviews" role="tabpanel" aria-labelledby="v-pills-reviews-tab">
                                    <h2>Product Description</h2>
                                    <p>
                                        Culpa qui offici Have you ever wondered how grateful can be your pet for your care and love? Little hears of those animals we take care of are able to warm us and hide from sad thoughts no mater how big our pets are. They amy be small and fearful or big and brave, obedient or self-willed, they may differ in color and shape, but all they have is love in their hearts which we can easily discover just looking into their eyes.
                                        A desire to surround your pet with tenderness and present him or her with some plaasant emotions making a little holiday for a dear animal is a quite natural one. And we know how to make your ideas real! Out Pets & Glamour Store can meet the needs and requirements even of the most hard-to-please customers. We tried to foresee your wishes and are ready to offer you a wide range of various pets clothes and accessories which
                                        are of premium quality and are in line with today’s pets fashion and design. Basides, you are welcome to evaluate a great choice of birthday cakes, delicious treats, charming toys, carriers of all types, gifts for pet lovers and their little friends, and even more goods and brilliant ideas to make your pets happy.

                                        Let us be your assistants in making a nice present for your beloved pet. Your little friend is worth some original and creative gfts which you
                                        will find among a big variety of our products. A charming animal world is already waiting for you!

                                    </p>
                                </div>
                                <div class="tab-pane fade" id="v-pills-video" role="tabpanel" aria-labelledby="v-pills-video-tab">
                                    <h2>Product Description</h2>
                                    <p>
                                        Culpa qui offici Have you ever wondered how grateful can be your pet for your care and love? Little hears of those animals we take care of are able to warm us and hide from sad thoughts no mater how big our pets are. They amy be small and fearful or big and brave, obedient or self-willed, they may differ in color and shape, but all they have is love in their hearts which we can easily discover just looking into their eyes.
                                        A desire to surround your pet with tenderness and present him or her with some plaasant emotions making a little holiday for a dear animal is a quite natural one. And we know how to make your ideas real! Out Pets & Glamour Store can meet the needs and requirements even of the most hard-to-please customers. We tried to foresee your wishes and are ready to offer you a wide range of various pets clothes and accessories which
                                        are of premium quality and are in line with today’s pets fashion and design. Basides, you are welcome to evaluate a great choice of birthday cakes, delicious treats, charming toys, carriers of all types, gifts for pet lovers and their little friends, and even more goods and brilliant ideas to make your pets happy.

                                        Let us be your assistants in making a nice present for your beloved pet. Your little friend is worth some original and creative gfts which you
                                        will find among a big variety of our products. A charming animal world is already waiting for you!

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="product-cards mb-2">
                <div class="product-header text-center w-100 barlow-light mb-3">
                    <h2 class="font-size-30">Featured Products</h2>
                </div>
                <div class="row">
                    @for($i = 1; $i < 4; $i++)
                        <div class="product-card col-md-4 mb-4">
                            <div class="product-wrapper">
                                <a href="{{ route('fashion-per-product-page') }}">
                                    <div class="image-header">
                                        <img src="{{ asset('assets/img/product1.png') }}" />
                                    </div>
                                    <div class="product-content">
                                        <h2 class="title">Product title_0{{ $i }}</h2>
                                        <h3 class="description">Bras & panties</h3>
                                        <div class="star-ratings-css">
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
                                    </div>
                                    <div class="product-footer">
                                        <span class="price">$ 19.00</span>
                                        <a class="read-more-link" href="#">Read More</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endfor
                </div>
            </section>
        </main>
    </explore-page>
@endsection