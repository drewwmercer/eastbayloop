<template>
    <section class="custom-section">
        <div class="section-header">
            <p :class="'title text-uppercase font-barlow-bold ' + titleClass || ''">EVENTS</p>
            <p class="content text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius nulla ac ipsum pharetra, sodales euismod est rhoncus. Praesent nibh odio, rutrum quis tincidunt at, porta at magna.</p>
            <div class="events" :class="layoutClass">
                <div class="events__item" v-for="(n, key) in 4" :key="key">
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
                    <div class="more">
                        <a class="read-more-btn mt-2 float-none" href="#">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>

    const layoutTypes = {
        CARDS: 'cards',
        LIST: 'list'
    };

    export default {
        props: {
            data: Object,
            layoutList: Boolean,
        },
        
        data() {
            return {
                titleClass: '',
                layoutType: layoutTypes.CARDS
            }
        },

        mounted() {
           if (this.data !== undefined) {
               this.titleClass = this.data.titleClass || '';
           }
           if (this.layoutList !== undefined && this.layoutList === true) {
               this.layoutType = layoutTypes.LIST;
           }
        },

        computed: {
            layoutClass: function () {
                return {
                    'events_list': this.layoutType === layoutTypes.LIST,
                    'events_card': this.layoutType === layoutTypes.CARDS
                }
            }
        },

        methods: {

        }
    }
</script>

<style lang="scss">

.events {
    display: flex;
    flex-flow: column nowrap;
    &_card {
        margin: 0;
        @media (min-width: 768px) {
            flex-flow: row nowrap;
            margin: 0 -1rem;
        }
        .events__item {
            flex: 0 1 25%;
            @media (min-width: 768px) {
                margin: 0 0.5rem 1.5rem 0.5rem;
            }

        }
    }
    &_list {
        margin: -1rem 0;
        align-items: stretch;
        @media (min-width: 768px) {
        }
        .events__item {
            display: flex;
            flex-flow: column nowrap;
            @media (min-width: 768px) {
                flex-flow: row nowrap;
                margin: 0.5rem 0;
            }
            .image-header {
                img {
                    border-bottom-left-radius: 0;
                    @media (min-width: 768px) {
                        height: 100%;
                        max-width: 240px;
                        border-top-right-radius: 0;
                        border-top-left-radius: 6px;
                        border-bottom-left-radius: 6px;
                    }
                }
            }
            .content {
                flex-grow: 1;
                display: flex;
                flex-flow: column nowrap;
                align-items: stretch;
                .header {
                    flex: 1 0 40%;
                    h2 {
                        font-size: 1.5rem;
                        text-transform: uppercase;
                    }
                    h3 {
                        font-size: 1.2rem;
                    }
                }
                .footer {
                    flex: 1 0 60%;
                }
            }
            .more {
                @media (min-width: 768px) {
                    padding: 10px 20px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                }
            }
        }
    }

    &__item {
        box-shadow: 0px 0px 10px rgba(1, 1, 1, .5);
        border-radius: 6px;
        margin: 0 0 1.5rem 0;
        @media (min-width: 768px) {

        }
        .image-header {
            img {
                width: 100%;
                border-top-left-radius: 6px;
                border-top-right-radius: 6px;
            }
        }
        .content {
            .header {
                border-bottom: 1px solid rgb(185, 185, 185);
                padding: 6px;

                font-family: Barlow;

                h2 {
                    font-size: 16px;

                    .time {
                        font-size: 14px;
                        color: grey;
                        margin-left: 3%;
                    }
                }

                h3 {
                    font-size: 13px;

                    time {
                        font-size: 12px;
                        color: grey;
                        margin-left: 3%;
                    }
                }
            }

            .footer {
                position: relative;

                .date {
                    display: inline-flex;
                    border-right: 1px solid #dddcd7;
                    justify-content: center;
                    align-items: center;
                    width: 35%;
                    height: 75px;
                    padding-bottom: 6%;
                    padding-right: 2%;

                    .text {
                        color: #000000;
                        font-size: 21px;
                        font-family: 'DINCond-Medium';
                        position: relative;
                        width: 40px;

                        span {
                            display: inline-block;
                            font-size: 32px;
                            color: #c1060f;
                            font-family: 'DINCond-Bold';
                            position: absolute;
                            bottom: -29px;
                            padding-top: 6px;
                            right: -11px;

                            &:before {
                                width: 1px;
                                height: 30px;
                                background: #c1060f;
                                content: '';
                                position: absolute;
                                top: -10px;
                                left: 0px;
                                transform: rotate(50deg);
                            }
                        }
                    }
                }

                .description {
                    display: inline-flex;
                    -webkit-box-orient: vertical;
                    -webkit-box-direction: normal;
                    -ms-flex-direction: column;
                    flex-direction: column;
                    width: 60%;
                    padding-right: 6%;
                    padding-left: 6%;
                    position: absolute;
                    justify-content: center;
                    height: 100%;

                    .text {
                        margin-bottom: 0;
                        color: #989898;
                        font-size: 14px;
                        font-family: 'DINCond-Medium';
                        padding-bottom: 0px;
                    }

                    a {
                        color: #2c82d3;
                        font-size: 13px;
                        font-family: 'DINCond-Medium';
                        display: flex;
                        align-items: center;

                        div {
                            width: 15px;
                            height: 15px;
                            display: inline-flex;
                            align-items: center;
                            background: #0283ff;
                            color: white;
                            border-radius: 50%;
                            font-size: 25px;
                            padding-bottom: 2px;
                            padding-left: 1.5px;
                            font-family: BarlowLight;
                            margin-right: 3px;
                        }
                    }
                }
            }
        }

        .more {
            display: none;
            border-left: 1px solid rgb(185, 185, 185);
        }
    }
}
</style>