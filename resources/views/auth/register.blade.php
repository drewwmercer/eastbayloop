<register inline-template>
    <div>
        <a class="popup_fb" href="#" @click.prevent="authenticate('facebook')">&nbsp; Log in Using Facebook</a>
        <a class="g_plus_fb" href="#" @click.prevent="authenticate('google')">&nbsp; Log in Using Google</a>

        <span class="or_text">or</span>

        <div>
            <ul class="login_ul_popup">
                <li>
                    <ul class="login_sub_ul">
                        <li>
                            <input v-bind:class="['form-input', {'form-input__error': hasErrorFor('first_name')}]" name="first_name" placeholder="First Name" type="text" v-model="formData.first_name">
                        </li>
                        <li>
                            <input v-bind:class="['form-input', {'form-input__error': hasErrorFor('last_name')}]" name="last_name" placeholder="Last Name" type="text" v-model="formData.last_name">
                        </li>
                    </ul>
                </li>
                <li>
                    <input v-bind:class="['form-input', {'form-input__error': hasErrorFor('email')}]" name="email" placeholder="Email" type="email" v-model="formData.email">
                </li>
                <li>
                    <input v-bind:class="['form-input', {'form-input__error': hasErrorFor('password')}]" name="password" placeholder="Password" type="password" v-model="formData.password">
                </li>
                <li>
                    <input v-bind:class="['form-input', {'form-input__error': hasErrorFor('password_confirmation')}]" name="password_confirmation" placeholder="Confirm Password" type="password" v-model="formData.password_confirmation">
                </li>
                <li v-if="hasErrors" class="errors-list">
                    <div v-for="error_list in formErrors">
                        <span v-for="error in error_list" class="errors-list__message">@{{ error }}</span>
                    </div>
                </li>
            </ul>
            <div class="submit-block">
                <button class="submit-block__btn_submit" @click="register">Sign up</button>
                <span class="submit-block__text submit-block__text_terms">By logging in you agree to our <a href="#">Terms,</a> <a href="#">Privacy Policy </a></span>
            </div>
            <span class="submit-block__text">Already have an account? <a href="#" @click="switchToLogin">Login</a></span>
        </div>
    </div>
</register>