<script>
    import Form from "./Form.vue";

    export default {
        mixins: [Form],

        methods: {
            login() {
                this.$auth.login(this.formData)
                    .then(response => {
                        this.onSignInSuccess();
                    })
                    .catch(error => {
                        this.submittedWithError(error);
                    })
            },
            register() {
                this.$auth.register(this.formData)
                    .then(response => {
                        this.onSignInSuccess();
                    })
                    .catch(error => {
                        this.submittedWithError(error);
                    });
            },
            authenticate(provider) {
                this.$auth.authenticate(provider)
                    .then(() => {
                        this.onSignInSuccess();
                    })
                    .catch(error => {
                        this.onSignInError(error);
                    })
            },
            onSignInSuccess() {
                window.location.href = '/';
            },
            onSignInError(error) {
                console.error(error);
            }
        }
    }
</script>