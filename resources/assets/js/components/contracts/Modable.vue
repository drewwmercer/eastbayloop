<script>
    export default {
        data: function () {
            return {
                showModal: false,
                closeDisabled: false
            }
        },
        methods: {
            closeModal() {
                this.showModal = false;
            },
            closeDisable() {
                this.closeDisabled = true;
            },
            closeEnable() {
                this.closeDisabled = false;
            }
        }
    }
</script>