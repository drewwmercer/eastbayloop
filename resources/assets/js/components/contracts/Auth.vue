<script>
    import Form from "./Form.vue";

    export default {
        mixins: [Form],

        methods: {
            login() {
                this.$auth.login(this.formData)
                    .then(response => {
                        this.submittedSuccess();
                    })
                    .catch(error => {
                        this.submittedWithError(error);
                    })
            },
            register() {
                this.$auth.register(this.formData)
                    .then(response => {
                        this.submittedSuccess();
                    })
                    .catch(error => {
                        this.submittedWithError(error);
                    });
            },
            authenticate(provider) {
                this.$auth.authenticate(provider)
                    .then(() => {
                        this.submittedSuccess();
                    })
                    .catch(error => {
                        this.submittedWithError(error);
                    })
            },
            submittedSuccess() {
                window.location.href = '/';
            },

        }
    }
</script>