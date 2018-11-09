<template>
    <div class="form" :class="loading">

        <div class="form__social">
            <a class="form__button_social form__button_social_fb" href="#" @click.prevent="authenticate('facebook')">&nbsp; Log in Using Facebook</a>
            <a class="form__button_social form__button_social_google" href="#" @click.prevent="authenticate('google')">&nbsp; Log in Using Google</a>
        </div>

        <span class="form__text_or">or</span>

        <div class="form__input-list">
            <div class="form__input-group">
                <input :class="['form__input', {'form__input_error': hasErrorFor('first_name')}]" name="first_name" placeholder="First Name" type="text" v-model="formData.first_name">
                <input :class="['form__input', {'form__input_error': hasErrorFor('last_name')}]" name="last_name" placeholder="Last Name" type="text" v-model="formData.last_name">
            </div>
            <input :class="['form__input', {'form__input_error': hasErrorFor('email')}]" name="email" placeholder="Email" type="email" v-model="formData.email">
            <input :class="['form__input', {'form__input_error': hasErrorFor('password')}]" name="password" placeholder="Password" type="password" v-model="formData.password">
            <input :class="['form__input', {'form__input_error': hasErrorFor('password_confirmation')}]" name="password_confirmation" placeholder="Confirm Password" type="password" v-model="formData.password_confirmation">
        </div>

        <div v-if="hasErrors" class="form__errors-list">
            <span v-for="error_list in formErrors" class="form__errors-group">
                <span v-for="error in error_list" class="form__errors-message">{{ error }}</span>
            </span>
        </div>

        <div class="form__footer">
            <div class="form__actions form__actions_main">
                <button class="form__button form__button_submit" @click="register">Sign up</button>
            </div>
            <div class="form__actions form__actions_additional">
                <span class="form__text form__text_terms">By logging in you agree to our <a href="#">Terms,</a> <a href="/page/privacy_policy">Privacy Policy </a></span>
                <span class="form__text">Already have an account? <a href="#" @click="switchToLogin">Login</a></span>
            </div>
        </div>

    </div>
</template>

<script>
    import Auth from "../../contracts/Auth.vue";

    export default {
        mixins: [Auth],

        data: function() {
            return {
                formData: {
                    first_name: '',
                    last_name: '',
                    email: '',
                    password: '',
                    password_confirmation: '',
                },
            }
        },
        methods: {
            switchToLogin() {
                this.$emit('modal-switch', 'login');
            },
            submittedSuccess(response) {
                Auth.methods.submittedSuccess.call(this, response);
                this.$emit('modal-switch', 'confirmation');
            }
        }
    }
</script>