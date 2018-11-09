<script>
    import Form from "./Form.vue";

    export default {
        mixins: [Form],

        methods: {
            login() {
                this.submit();
                this.$auth.login(this.formData)
                    .then(response => {
                        this.submittedSuccess(response);
                    })
                    .catch(error => {
                        this.submittedWithError(error);
                    })
            },
            register() {
                this.submit();
                this.$auth.register(this.formData)
                    .then(response => {
                        this.submittedSuccess(response);
                    })
                    .catch(error => {
                        console.error(error);
                        this.submittedWithError(error);
                    });
            },
            authenticate(provider) {
                this.submit();
                this.$auth.authenticate(provider)
                    .then(() => {
                        this.$emit('close-modal');
                        this.submittedSuccess(response);
                    })
                    .catch(error => {
                        this.submittedWithError(error);
                    })
            },
            submittedSuccess(response) {
                Form.methods.submittedSuccess.call(this, response);
            }
        }
    }
</script>