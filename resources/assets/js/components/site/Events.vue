<template>
    <section class="custom-section">
        <div class="section-header">
            <p :class="'title text-uppercase font-barlow-bold ' + titleClass || ''">EVENTS</p>
            <p class="content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius nulla ac ipsum pharetra, sodales euismod est rhoncus. Praesent nibh odio, rutrum quis tincidunt at, porta at magna.</p>
            <div class="row p-0 m-0">
                <div class="col-md-3 m-upcoming-event-card mb-4 p-0 pr-3" v-for="(n, key) in 4" :key="key">
                    <div class="m-upcoming-event-wrapper">
                        <div class="image-header">
                            <img :src="'/assets/img/music/' + n + '.png'" />
                        </div>
                        <div class="content">
                            <div class="header">
                                <h2>Florence + the machine <span class="time">8PM</span></h2>
                                <h3>Cold War Kids <span class="time">7PM</span></h3>                                            
                            </div>
                            <div class="footer">
                                <div class="date">
                                    <span class="text">
                                        OCT 
                                        <span>23</span>
                                    </span>
                                </div>
                                <div class="description">
                                    <p class="text">This event is 21 and over</p>
                                    <a href="#"><div>+</div>More Info</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    export default {
        props: ['data'],
        
        data() {
            return {
                titleClass: ''
            }
        },

        mounted() {
           if (this.data !== undefined) {
               this.titleClass = this.data.titleClass || '';
           }
        },
        
        methods: {

        }
    }
</script>