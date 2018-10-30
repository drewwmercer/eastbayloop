<script>

    import AuthMenu from './AuthMenu.vue';

    const selects = {
        NAVIGATION: '.navigation'
    }

    const classes = {
        TOGGLE: 'toggle'
    }

    export default {
        props: ['data'],

        data() {
            return {
                isToogleNavbar: false,
            }
        },

        components: {
            AuthMenu,
        },

        mounted() {
        },
        
        methods: {
            toogleMenu: function(event) {
                this.isToogleNavbar = !this.isToogleNavbar;

                $(selects.NAVIGATION).slideToggle(700);			
                $(event.target).toggleClass(classes.TOGGLE);
            },
            logout() {
                this.$auth.logout({
                    makeRequest: true,
                    success: () => {},
                    error: () => {},
                    redirect: {
                        name: 'home'
                    }
                });
            }
        }
    }
</script>