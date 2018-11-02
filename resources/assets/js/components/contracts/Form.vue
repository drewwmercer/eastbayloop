<script>

    import Loadable from "./Loadable.vue";

    const status = {
        SUCCESS: 200,
    };

    export default {

        mixins: [Loadable],

        data: function() {
            return {
                formData: null,
                formErrors: null,
                status: null,
            }
        },
        computed: {
            hasErrors: function () {
                return this.formErrors !== null && _.size(this.formErrors) > 0;
            },
            showInfo: function () {
                return this.status
            },
            statusMessage: function() {
                return (this.status === status.SUCCESS) ? "Success" : null;
            }
        },
        methods: {
            submit() {
                this.startLoading();
            },
            submittedSuccess(response) {
                this.stopLoading();
                if (response.status === status.SUCCESS) {
                    this.status = status.SUCCESS;
                }
            },
            submittedWithError(error) {
                this.stopLoading();
                if (error.response.status === 422) {
                    this.formErrors = error.response.data.errors;
                } else if (error.response.status === 400 && error.response.data.msg) {
                    this.formErrors = {
                        msg: error.response.data.msg
                    };
                } else {
                    console.error(error);
                }
            },
            hasErrorFor(fieldName) {
                if (this.formErrors && this.formErrors[fieldName]) {
                    return true;
                }
            }
        }
    }
</script>