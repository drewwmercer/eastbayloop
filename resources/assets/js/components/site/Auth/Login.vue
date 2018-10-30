<template>
    <div>
        <a class="popup_fb" href="#" @click.prevent="authenticate('facebook')">&nbsp; Log in Using Facebook</a>
        <a class="g_plus_fb" href="#" @click.prevent="authenticate('google')">&nbsp; Log in Using Google</a>
        <span class="or_text">or</span>

        <div>
            <ul class="login_ul_popup">
                <li>
                    <input :class="['form-input', {'form-input__error': hasErrorFor('email')}]" name="email" placeholder="Email" type="email" v-model="formData.email">
                </li>
                <li>
                    <input :class="['form-input', {'form-input__error': hasErrorFor('password')}]" name="password" placeholder="Password" type="password" v-model="formData.password">
                </li>
                <li v-if="hasErrors" class="errors-list">
                    <div v-for="error_list in formErrors">
                        <span v-for="error in error_list" class="errors-list__message">{{ error }}</span>
                    </div>
                </li>
            </ul>
            <div class="submit-block">
                <span class="submit-block__text"><a href="#" @click.prevent="switchToForgotPassword">Forgot Password?</a></span>
                <button class="submit-block__btn_submit" @click.prevent="login">Sign in</button>
                <span class="submit-block__text submit-block__text_terms">By logging in you agree to our <a href="#">Terms,</a> <a href="#">Privacy Policy </a></span>
            </div>
            <span class="submit-block__text">Don't have an account? <a href="#" @click.prevent="switchToRegistration">Sign Up</a></span>
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
<style>
    .login_popup {
        padding: 40px 60px 30px 60px;
        background: #ffffff;
        border-radius: 5px;
    }
    .popup_fb {
        width: 100%;
        display: inline-block;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        background: #3b5998;
        padding: 13px 0px;
        border: 1px solid #3b5998;
        margin-bottom: 10px;
    }
    .popup_fb:hover {
        border: 1px solid #3b5998;
        color: #3b5998;
        background: #fff;
    }
    .g-signin-button {
        width: 100%;
        display: inline-block;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        background: #d34836;
        padding: 13px 0px;
        border: 1px solid #d34836;
    }
    .g-signin-button:hover {
        border: 1px solid #d34836;
        color: #d34836;
        background: #fff;
    }
    .g_plus_fb {
        width: 100%;
        display: inline-block;
        text-align: center;
        font-size: 18px;
        font-weight: bold;
        color: #fff;
        background: #d34836;
        padding: 13px 0px;
        border: 1px solid #d34836;
    }
    .g_plus_fb:hover {
        border: 1px solid #d34836;
        color: #d34836;
        background: #fff;
    }
    .or_text {
        width: 100%;
        display: inline-block;
        text-align: center;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 20px;
        color: #000000;
        padding: 20px 0px;
    }
    li {
        list-style-type: none;
    }
    .login_ul_popup {
        width: 100%;
        float: left;
        margin-bottom: 20px;
    }
    .login_ul_popup > li {
        width: 100%;
        float: left;
    }
    .login_sub_ul {
        width: 100%;
        float: left;
    }
    .login_sub_ul > li {
        width: 50%;
        float: left;
    }
</style>