<template>
    <div class="modal__mask">
        <div class="modal__container">
            <div class="modal__close-btn" @click="close"></div>
            <div class="modal__header">
                <slot name="header"></slot>
            </div>
            <div class="modal__content">
                <slot name="content"></slot>
            </div>
            <div class="modal__footer">
                <slot name="footer"></slot>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data: function() {
            return {
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