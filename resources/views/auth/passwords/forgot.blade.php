<forgot-password inlite-template>
    <div>
        <ul class="login_ul_popup">
            <li>
                <input v-bind:class="['form-input', {'form-input__error': hasErrorFor('email')}]" name="email" placeholder="Email" type="email" v-model="formData.email">
            </li>
            <li v-if="hasErrors" class="errors-list">
                <div v-for="error_list in formErrors">
                    <span v-for="error in error_list" class="errors-list__message">@{{ error }}</span>
                </div>
            </li>
        </ul>
        <div class="submit-block">
            <button class="submit-block__btn_submit" @click="submitForgotPassword">Send mail</button>
            <span class="submit-block__text"><a href="#" @click="switchToLogin">Back to login</a></span>
        </div>
    </div>
</forgot-password>