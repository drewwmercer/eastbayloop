<template>
    <div class="modal__mask">
        <div class="modal__container">
            <div v-if="!closeDisabled" class="modal__close-btn" @click="close"></div>
            <div class="modal__content">
                <slot name="content"></slot>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: {
            isCloseDisabled: Boolean
        },

        data: function() {
            return {
                closeDisabled: this.isCloseDisabled === undefined ? true : this.isCloseDisabled
            }
        },

        watch: {
            isCloseDisabled: function(value) {
                this.closeDisabled = value;
            }
        },

        methods: {
            close() {
                this.$emit('close');
            }
        }
    }
</script>

<style>

</style>