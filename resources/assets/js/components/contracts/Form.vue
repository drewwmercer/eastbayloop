<script>
    export default {

        data: function() {
            return {
                formData: null,
                formErrors: null,
            }
        },
        computed: {
            hasErrors: function () {
                return this.formErrors !== null && _.size(this.formErrors) > 0;
            }
        },
        methods: {
            submittedSuccess() {
                //
            },
            submittedWithError(error) {
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