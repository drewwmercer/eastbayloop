<script>
    export default {
        mounted() {
        },

        methods: {
            upPage() {
                $("html, body").animate({ scrollTop: 0 }, "slow");
            }
        }
    }
</script>
