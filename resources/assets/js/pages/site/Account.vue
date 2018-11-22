<script>

    const components = {
        DETAILS: 'AccountDetails',
        SECURITY: 'AccountSecurity'
    };

    import AccountDetails from "../../components/site/AccountDetails.vue";
    import AccountSecurity from "../../components/site/AccountSecuryty.vue";

    export default {
        data: function () {
            return {
                componentNames: components,
                components: {
                    [components.DETAILS]: AccountDetails,
                    [components.SECURITY]: AccountSecurity
                },
                selectedPage: AccountDetails
            }
        },

        mounted() {

        },

        components: {
            AccountDetails,
            AccountSecurity
        },

        computed: {
        },

        methods: {
            selectComponent(component) {
                this.selectedPage = this.components[component];
            },
            isSelected(component) {
                return this.selectedPage === this.components[component]
            },
            getActiveMenuItemClass(component) {
                return this.isSelected(component) ? 'account-sidebar__menu-item_active' : ''
            }
        }
    }
</script>
