<script>
    import Register from "./Auth/Register.vue";
    import Login from "./Auth/Login.vue";
    import ForgotPassword from "./Auth/ForgotPassword.vue";
    import Confirmation from "./Auth/Confirmation.vue";
    import Modal from './Modal.vue';
    import Modable from '../contracts/Modable.vue';

    export default {
        mixins: [Modable],
        props: {
            showLogin: Boolean
        },
        components: {
            Modal,
            Register,
            Login,
            ForgotPassword,
            Confirmation
        },
        data: function () {
            return {
                currentComponent: null
            }
        },
        created() {
            if (this.showLogin) {
                this.showLoginForm();
            }
        },
        methods: {
            showLoginForm() {
                this.currentComponent = Login;
                this.showModal = true;
            },
            showRegistrationForm() {
                this.currentComponent = Register;
                this.showModal = true;
            },
            showForgotPasswordForm() {
                this.currentComponent = ForgotPassword;
                this.showModal = true;
            },
            showConfirmationForm() {
                this.currentComponent = Confirmation;
                this.showModal = true;
            },
            modalSwitch(component_name) {
                switch (component_name) {
                    case 'login':
                        this.showLoginForm();
                        break;
                    case 'registration':
                        this.showRegistrationForm();
                        break;
                    case 'confirmation':
                        this.showConfirmationForm();
                        break;
                    case 'forgot-password':
                        this.showForgotPasswordForm();
                        break;
                    default:
                        console.error(`Component ${component_name} does not exists`);
                }
            }
        }
    }
</script>