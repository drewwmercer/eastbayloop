<template>
    <div class="form" :class="loading">

        <div v-if="showInfo" class="form__info">
            <span class="form__info-message form__info-message_success">{{ statusMessage }}</span>
        </div>

        <div class="form__input-list">
                <input :class="['form__input', {'form__input_error': hasErrorFor('email')}]" name="email" placeholder="Email" type="email" v-model="formData.email">
        </div>

        <div v-if="hasErrors" class="form__errors-list">
            <span v-for="error_list in formErrors" class="form__errors-group">
                <span v-for="error in error_list" class="form__errors-message">{{ error }}</span>
            </span>
        </div>

        <div class="form__footer">
            <div class="form__actions form__actions_main">
                <button class="form__button form__button_submit" @click="submitForgotPassword">Send mail</button>
            </div>
            <div class="form__actions form__actions_additional">
                <span class="form__text">Back to <a href="#" @click="switchToLogin">Login</a></span>
            </div>
        </div>

    </div>
</template>

<script>
    import Form from "../../contracts/Form.vue";

    export default {
        mixins: [Form],

        data: function() {
            return {
                formData: {
                    email: '',
                    password: '',
                }
            }
        },
        methods: {
            submitForgotPassword() {
                this.submit();
                axios.post('/password/email', this.formData)
                    .then(response => {
                        this.submittedSuccess(response);
                    })
                    .catch(error => {
                        this.submittedWithError(error);
                    })
            },
            switchToLogin() {
                this.$emit('modal-switch', 'login');
            }
        }
    }
</script>