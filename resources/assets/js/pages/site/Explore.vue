<script>
    export default {
        data() {
            return {
                pageName: 'Nightlife',
                sliders: [{img: '/assets/img/sliders/client-banner.jpeg', text: 'Nightlife', class: 'explore-slider'},
                          {img: '/assets/img/sliders/client-banner.jpeg', text: 'Nightlife', class: 'explore-slider'},
                          {img: '/assets/img/sliders/client-banner.jpeg', text: 'Nightlife', class: 'explore-slider'}],
                pageSelector: 'Nightlife',
                nonProduct: false,
                cards: [
                    {
                        id: 1,
                        name: 'Bars',
                        link: '/explore/nightlife/bars'
                    },
                    {
                        id: 2,
                        name: 'Lounge',
                        link: '/explore/nightlife/lounge'
                    },
                    {
                        id: 3,
                        name: 'Dance Club',
                        link: '/explore/nightlife/dance%20Club'
                    },
                    {
                        id: 4,
                        name: 'Country Western Clubs',
                        link: '/explore/nightlife/country%20Western%20Clubs'
                    },
                    {
                        id: 5,
                        name: 'Adult Entertainment Clubs',
                        link: '/explore/nightlife/Adult%20Entertainment%20Clubs'
                    },
                    {
                        id: 6,
                        name: 'Comedy Clubs',
                        link: '/explore/nightlife/comedy%20Clubs'
                    },
                    {
                        id: 7,
                        name: 'LIVE Music Venues',
                        link: '/explore/nightlife/LIVE%20Music%20Venues'
                    },
                    {
                        id: 8,
                        name: 'LGBT Bars & Clubs',
                        link: '/explore/nightlife/LGBT%20Bars%20&%20Clubs'
                    },
                    {
                        id: 9,
                        name: 'Jazz & Blues Clubs',
                        link: '/explore/nightlife/jazz%20&%20Blues%20Clubs'
                    },
                ],
                nightlife: [
                    {
                        id: 1,
                        name: 'Bars',
                        link: '/explore/nightlife/bars'
                    },
                    {
                        id: 2,
                        name: 'Lounge',
                        link: '/explore/nightlife/lounge'
                    },
                    {
                        id: 3,
                        name: 'Dance Club',
                        link: '/explore/nightlife/dance%20Club'
                    },
                    {
                        id: 4,
                        name: 'Country Western Clubs',
                        link: '/explore/nightlife/country%20Western%20Clubs'
                    },
                    {
                        id: 5,
                        name: 'Adult Entertainment Clubs',
                        link: '/explore/nightlife/Adult%20Entertainment%20Clubs'
                    },
                    {
                        id: 6,
                        name: 'Comedy Clubs',
                        link: '/explore/nightlife/comedy%20Clubs'
                    },
                    {
                        id: 7,
                        name: 'LIVE Music Venues',
                        link: '/explore/nightlife/LIVE%20Music%20Venues'
                    },
                    {
                        id: 8,
                        name: 'LGBT Bars & Clubs',
                        link: '/explore/nightlife/LGBT%20Bars%20&%20Clubs'
                    },
                    {
                        id: 9,
                        name: 'Jazz & Blues Clubs',
                        link: '/explore/nightlife/jazz%20%20Blues%20Clubs'
                    },
                ],
            }
        },
        
        mounted() {
        },

        methods: {
            changePage() {
                this.pageName = this.pageSelector;

                if (this.pageSelector === 'DAYCLUBS/PARTIES') {
                    this.cards = [];
                    for (var i = 1; i < 10; i++) {
                        this.cards.push({
                            id: i,
                            name: 'Venue ' + i,
                            link: '/explore/dayclubs/profile'
                        });
                    }
                    this.nonProduct = true;
                } else {
                    this.cards = this.nightlife;
                    this.nonProduct = false;                    
                }

                this.sliders = [
                    {img: '/assets/img/sliders/client-banner.jpeg', text: this.pageName, class: 'explore-slider'},
                    {img: '/assets/img/sliders/client-banner.jpeg', text: this.pageName, class: 'explore-slider'},
                    {img: '/assets/img/sliders/client-banner.jpeg', text: this.pageName, class: 'explore-slider'}
                ];
            }
        }
    }
</script>
