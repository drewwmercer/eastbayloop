<script>
    export default {
        data: function () {
            return {
                is_loading: false
            }
        },
        computed: {
            loading: function () {
                return {
                    loadable: this.is_loading
                }
            }
        },
        methods: {
            startLoading() {
                this.is_loading = true;
            },
            stopLoading() {
                this.is_loading = false;
            }
        }
    }
</script>
<style>
    .loadable {
        position: relative;
    }
    .loadable::before {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, .8);
        z-index: 1;
    }
    .loadable::after {
        content: "";
        display: block;
        position: absolute;
        border: 2px solid #e4fe14;
        border-left-color: rgba(0,0,0,0);
        border-bottom-color: rgba(0,0,0,0);
        animation-name: loader-spin;
        animation-duration: 0.5s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        border-radius: 50%;
        width: 5em;
        height: 5em;
        top: calc(50% - 2.5em);
        left: calc(50% - 2.5em);
        z-index: 2;
    }
    @keyframes loader-spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>