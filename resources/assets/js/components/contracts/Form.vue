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
<style>
    .form-input {
        width: 100%;
        float: left;
        color: #494949;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
        border: 1px solid #c8c8c8;
        padding: 15px 10px 15px 15px;
        font-style: italic;
    }
    .form-input__error {
        border-color: #d34836;
    }
    .submit-block {
        width: 100%;
        float: left;
        margin-bottom: 30px;
    }
    .submit-block__btn_submit {
        padding: 15px 20px;
        background: #000000;
        border: 1px solid #000000;
        border-radius: 3px;
        color: #e4ff15;
        font-size: 20px;
        font-family: 'OpenSans-Light';
        border: 1px solid #000000;
        cursor: pointer;
    }
    .submit-block__text {
        width: 100%;
        display: inline-block;
        text-align: center;
        color: #000000;
        font-size: 16px;
        font-family: Arial, Helvetica, sans-serif;
    }
    .submit-block__text a {
        color: #4ca9d5;
    }
    .submit-block__text_terms {
        width: 73%;
        float: right;
        display: inline-block;
        color: #000000;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 14px;
        font-style: italic;
        padding-top: 20px;
    }
    .errors-list {
        padding: 5px 0;
        display: flex;
        flex-flow: column nowrap;
    }
    .errors-list__message {
        font-size: 0.8rem;
        margin-bottom: 3px;
        color: #d34836;
    }
</style>