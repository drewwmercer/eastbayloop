<script>
    export default {
        data() {
            return {
                pageName: 'Nightlife',
                cardName: 'Lounge',                
                sliders: [{img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'Nightlife', class: 'explore-slider'},
                          {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'Nightlife', class: 'explore-slider'},
                          {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: 'Nightlife', class: 'explore-slider'}],
                pageSelector: 'Nightlife',
                nonProduct: false
            }
        },
        
        mounted() {
        },

        methods: {
            changePage() {
                this.pageName = this.pageSelector;

                if (this.pageSelector === 'DAYCLUBS/PARTIES') {
                    this.cardName = 'Venue';
                    this.nonProduct = true;
                }

                this.sliders = [
                    {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: this.pageName, class: 'explore-slider'},
                    {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: this.pageName, class: 'explore-slider'},
                    {img: 'http://testsite.eastbayloop.com/images/client-banner.jpeg', text: this.pageName, class: 'explore-slider'}
                ];
            }
        }
    }
</script>
