<template>
    <div class="form" :class="loading">

        <div v-if="hasErrors" class="form__errors-list">
            <span v-for="error_list in formErrors" class="form__errors-group">
                <span v-for="error in error_list" class="form__errors-message">{{ error }}</span>
            </span>
        </div>

        <div class="form__footer">
            <div class="form__actions form__actions_main">
                <button class="form__button form__button_submit" @click="resendConfirmationEmail">Resend email</button>
            </div>
            <div class="form__actions form__actions_additional">
                <span class="form__text">Email with confirmation link has been sent to your email address</span>
            </div>
        </div>

    </div>
</template>

<script>
    import Form from "../../contracts/Form.vue";

    export default {
        mixins: [Form],

        methods: {
            resendConfirmationEmail() {
                console.log('here');
                this.submit();
                axios.post('/register/confirm/resend')
                    .then(response => {
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