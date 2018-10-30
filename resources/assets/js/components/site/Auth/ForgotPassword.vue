<template>
    <div class="login_ul_popup__wrapper">
        <ul class="login_ul_popup">
            <li>
                <input :class="['form-input', {'form-input__error': hasErrorFor('email')}]" name="email" placeholder="Email" type="email" v-model="formData.email">
            </li>
            <li v-if="hasErrors" class="errors-list">
                <div v-for="error_list in formErrors">
                    <span v-for="error in error_list" class="errors-list__message">{{ error }}</span>
                </div>
            </li>
        </ul>
        <div class="submit-block">
            <button class="submit-block__btn_submit" @click="submitForgotPassword">Send mail</button>
            <span class="submit-block__text"><a href="#" @click="switchToLogin">Back to login</a></span>
        </div>
    </div>
</template>

<script>
    import Form from "../../contracts/Form.vue";

    export default {
        mixins: [Form],

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
            submitForgotPassword() {
                axios.post('/password/email', this.formData)
                    .then(response => {
//                        window.location.href = '/';
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

<style>
    .login_ul_popup__wrapper {
        overflow: auto;
    }
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
        position: relative;
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