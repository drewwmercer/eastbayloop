<template>
    <div class="form form_login">

        <div class="form__social">
            <a class="form__button_social form__button_social_fb" href="#" @click.prevent="authenticate('facebook')">&nbsp; Log in Using Facebook</a>
            <a class="form__button_social form__button_social_google" href="#" @click.prevent="authenticate('google')">&nbsp; Log in Using Google</a>
        </div>

        <span class="form__text_or">or</span>

        <div class="form__input-list">
            <input :class="['form__input', {'form__input_error': hasErrorFor('email')}]" name="email" placeholder="Email" type="email" v-model="formData.email">
            <input :class="['form__input', {'form__input_error': hasErrorFor('password')}]" name="password" placeholder="Password" type="password" v-model="formData.password">
        </div>

        <div v-if="hasErrors" class="form__errors-list">
            <span v-for="error_list in formErrors" class="form__errors-group">
                <span v-for="error in error_list" class="form__errors-message">{{ error }}</span>
            </span>
        </div>

        <div class="form__additional">
            <span class="form__text"><a href="#" @click.prevent="switchToForgotPassword">Forgot Password?</a></span>
        </div>

        <div class="form__footer">
            <div class="form__actions form__actions_main">
                <button class="form__button form__button_submit" @click.prevent="login">Sign in</button>
            </div>
            <div class="form__actions form__actions_additional">
                <span class="form__text form__text_terms">By logging in you agree to our <a href="#">Terms,</a> <a href="#">Privacy Policy </a></span>
                <span class="form__text">Don't have an account? <a href="#" @click.prevent="switchToRegistration">Sign Up</a></span>
            </div>
        </div>

    </div>
</template>

<script>
    import Auth from "../../contracts/Auth.vue";

    export default {
        mixins: [Auth],

        props: [
        ],

        data: function() {
            return {
                formData: {
                    email: '',
                    password: '',
                }
            }
        },
        methods: {
            switchToRegistration() {
                this.$emit('modal-switch', 'registration');
            },
            switchToForgotPassword() {
                this.$emit('modal-switch', 'forgot-password');
            },
        }
    }
</script>