<template>
     <div class="radio">
        <div class="radio-wrapper">
            <div class="radio-btn">
                <i class="fa fa-play ml-2" aria-hidden="true"></i>
            </div>
        </div>
        <div class="radio-progress" style="width: 40%"></div>
        <div class="radio-info">
            <div class="info-wrapper">
                <div class="info-text">
                    <span class="song-title mr-1">Somewhere in the Middle </span>
                    <span class="song-author mr-1">by Dishwalla </span>
                    <span class="song-time">
                        <span class="song-left">1:09 </span>
                        / 3:42
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['data'],
        
        mounted() {

        },
        
        methods: {

        }
    }
</script>