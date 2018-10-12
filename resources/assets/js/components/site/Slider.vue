<template>
     <div class="main-slider">
        <section class="slider">
            <div class="flexslider w-100">
                <ul class="slides">
                    <li v-for="(slide, key) in data" :key="key">
                        <div class="index-banner" :style="'background:url(' + slide.img +') no-repeat center;'">
                            <div class="wrapper">
                                <span :class="'banner-text ' + slide.class || ''">{{ slide.text }}</span>
                                <a class="banner-btn" v-if="slide.link" :href="slide.link">{{ slide.btnText || 'READ MORE'}}</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <template v-if="radio">
                    <div class="slider-menu">
                        <div class="list-menu">
                            <div class="item-menu yellow">
                                <a href="#">Listen Live!</a>
                            </div>
                            <div class="separator-menu"></div>
                            <div class="item-menu">
                                <a href="#">Schedule</a>
                            </div>
                            <div class="separator-menu"></div>
                            <div class="item-menu">
                                <a href="#">Advertise with us!</a>
                            </div>
                            <div class="separator-menu"></div>
                            <div class="item-menu">
                                <a href="#">Featured EVENTS</a>
                            </div>
                            <div class="separator-menu"></div>
                            <div class="item-menu">
                                <a href="#">COMMUNITY SUPPORTERS</a>
                            </div>
                        </div>
                    </div>
                    <radio></radio>
                </template>
                <template v-if="carousel">
                    <div class="slider-carousel-menu">
                        <div class="carousel-card mr-4">
                            <div class="carousel-wrapper">
                                <img src="/assets/img/events/car1.png" />
                                <span class="play-btn"><i class="fa fa-play"></i></span>
                            </div>
                        </div>
                        <div class="carousel-card mr-4">
                            <div class="carousel-wrapper">
                                <img src="/assets/img/events/car2.png" />
                                <span class="play-btn"><i class="fa fa-play"></i></span>
                            </div>
                        </div>
                        <div class="carousel-card mr-4">
                            <div class="carousel-wrapper">
                                <img src="/assets/img/events/car3.png" />
                            </div>
                        </div>
                        <div class="carousel-card mr-4">
                            <div class="carousel-wrapper">
                                <img src="/assets/img/events/car4.png" />
                            </div>
                        </div>
                        <div class="carousel-card mr-4">
                            <div class="carousel-wrapper">
                                <img src="/assets/img/events/car5.png" />
                            </div>
                        </div>
                        <div class="carousel-card mr-4">
                            <div class="carousel-wrapper">
                                <img src="/assets/img/events/car6.png" />
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        props: ['data', 'radio', 'carousel'],
        
        mounted() {
            $('.flexslider').flexslider({
                    animation: "slide",
                    directionNav:false,
            })
        },
        
        methods: {

        }
    }
</script>