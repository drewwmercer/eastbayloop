<template>
    <div class="details__wrapper">
        <div class="details__block user-avatar">
            <img :src="userPayload.avatar">
            <button id="pick-avatar" class="user-avatar__button_change">Change</button>
            <avatar-cropper
                    trigger="#pick-avatar"
                    :labels="{submit: 'Submit', cancel: 'Cancel'}"
                    :upload-handler="selectImage"
            ></avatar-cropper>
        </div>
        <div class="details__block">
            <h4>Type(s)</h4>
            <ul>
                <li v-for="role in userPayload.roles">
                    <b>{{ role }}</b>
                </li>
            </ul>
        </div>
        <div class="details__block">
            <h4>Details</h4>
            <ul>
                <li><b>First name:</b> {{ userPayload.first_name }}</li>
                <li><b>Last name:</b> {{ userPayload.last_name }}</li>
                <li><b>Email:</b> {{ userPayload.email }}</li>
            </ul>
        </div>
    </div>
</template>

<script>

    import AvatarCropper from 'vue-avatar-cropper';
    import Form from "../contracts/Form";

    export default {
        mixins: [Form],

        data: function () {
            return {
                userPayload: this.$auth.getPayload()
            }
        },

        components: {
            AvatarCropper
        },

        mounted() {
        },

        computed: {
        },

        methods: {
            selectImage(cropper) {
                cropper.getCroppedCanvas().toBlob((blob) => {
                    this.submit();
                    const data = new FormData();
                    data.append('avatar', blob);
                    axios.post('/account/update-avatar', data, {
                        'Content-Type': 'multipart/form-data'
                    })
                        .then(response => {
                            this.userPayload = this.$auth.getPayload();
                            this.submittedSuccess(response);
                        })
                        .catch(error => {
                            this.submittedWithError(error);
                        })
                });
            }
        }
    }
</script>

<style lang="scss" scoped>
    .details {
        &__wrapper {
            display: flex;
            flex-flow: column nowrap;
            align-items: flex-start;
        }
        &__block {
            margin-bottom: 30px;
        }
    }
    .user-avatar {
        width: 150px;
        &__button_change {
            width: 100%;
            display: inline-block;
            float: left;
            text-align: center;
            background: #000000;
            border: 1px solid #000000;
            color: #e4ff15;
            font-size: 20px;
            font-family: 'DINCond-Medium';
            padding: 10px 0px;
            text-transform: uppercase;
            line-height: 20px;

            &:hover {
                border: 1px solid #000000;
                background: #e4ff15;
                color: #000000;
            }
        }
    }
</style>