<template>
    <div class="form" :class="loading">

        <div v-if="showInfo" class="form__info">
            <span class="form__info-message form__info-message_success">{{ statusMessage }}</span>
        </div>

        <div class="form__input-list">
            <input v-if="$auth.getPayload().has_password" :class="['form__input', {'form__input_error': hasErrorFor('old_password')}]" name="old_password" placeholder="Old password" type="password" v-model="formData.old_password">
            <input :class="['form__input', {'form__input_error': hasErrorFor('password')}]" name="password" placeholder="New password" type="password" v-model="formData.password">
            <input :class="['form__input', {'form__input_error': hasErrorFor('password_confirmation')}]" name="password_confirmation" placeholder="Confirm password" type="password" v-model="formData.password_confirmation">
        </div>

        <div v-if="hasErrors" class="form__errors-list">
            <span v-for="error_list in formErrors" class="form__errors-group">
                <span v-for="error in error_list" class="form__errors-message">{{ error }}</span>
            </span>
        </div>

        <div class="form__footer">
            <div class="form__actions form__actions_main">
                <button class="form__button form__button_submit" @click="submitChangePassword">Change</button>
            </div>
        </div>

    </div>
</template>

<script>
    import Form from "../contracts/Form.vue";

    export default {
        mixins: [Form],

        data: function () {
            return {
                formData: {
                    old_password: '',
                    password: '',
                    password_confirmation: ''
                }
            }
        },

        methods: {
            submitChangePassword() {
                this.submit();
                axios.post('/password/update', this.formData)
                    .then(response => {
                        this.freshFormData();
                        this.submittedSuccess(response);
                    })
                    .catch(error => {
                        this.freshFormData();
                        this.submittedWithError(error);
                    })
            },
            freshFormData() {
                this.formData.old_password = '';
                this.formData.password = '';
                this.formData.password_confirmation = '';
            }
        }
    }
</script>