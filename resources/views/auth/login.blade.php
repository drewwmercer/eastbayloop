<login inline-template>
    <div>
        <a class="popup_fb" href="#" @click.prevent="authenticate('facebook')">&nbsp; Log in Using Facebook</a>
        <a class="g_plus_fb" href="#" @click.prevent="authenticate('google')">&nbsp; Log in Using Google</a>
        <span class="or_text">or</span>

        <div>
            <ul class="login_ul_popup">
                <li>
                    <input v-bindv:class="['form-input', {'form-input__error': hasErrorFor('email')}]" name="email" placeholder="Email" type="email" v-model="formData.email">
                </li>
                <li>
                    <input v-bind:class="['form-input', {'form-input__error': hasErrorFor('password')}]" name="password" placeholder="Password" type="password" v-model="formData.password">
                </li>
                <li v-if="hasErrors" class="errors-list">
                    <div v-for="error_list in formErrors">
                        <span v-for="error in error_list" class="errors-list__message">@{{ error }}</span>
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
</login>