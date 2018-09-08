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
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        props: ['data'],
        
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