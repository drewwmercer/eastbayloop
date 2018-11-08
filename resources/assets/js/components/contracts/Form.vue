<script>

    import Loadable from "./Loadable.vue";

    const statuses = {
        SUCCESS: 200,
        BAD_REQUEST: 400,
        UNPROCESSABLE_ENTITY: 422
    };

    export default {

        mixins: [Loadable],

        data: function() {
            return {
                formData: null,
                formErrors: null,
                status: null,
                availableStatuses: null
            }
        },

        created() {
            this.availableStatuses = statuses;
        },

        computed: {
            hasErrors: function () {
                return this.formErrors !== null && _.size(this.formErrors) > 0;
            },
            showInfo: function () {
                return this.status
            },
            statusMessage: function() {
                return (this.status === this.availableStatuses.SUCCESS) ? "Success" : null;
            }
        },
        methods: {
            submit() {
                this.startLoading();
            },
            submittedSuccess(response) {
                this.stopLoading();
                if (response.status === this.availableStatuses.SUCCESS) {
                    this.status = this.availableStatuses.SUCCESS;
                }
            },
            submittedWithError(error) {
                this.stopLoading();
                if (error.response.status === this.availableStatuses.UNPROCESSABLE_ENTITY) {
                    this.formErrors = error.response.data.errors;
                } else if (error.response.status === this.availableStatuses.BAD_REQUEST && error.response.data.msg) {
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