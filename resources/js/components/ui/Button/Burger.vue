<template>
    <div class="xl:hidden cursor-pointer">
        <svg :class="{'fill-white' : !variant, 'fill-black' : variant}" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 256 256">
            <path
                d="M224,128a8,8,0,0,1-8,8H40a8,8,0,0,1,0-16H216A8,8,0,0,1,224,128ZM40,72H216a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16ZM216,184H40a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Z">
            </path>
        </svg>
    </div>
</template>

<script setup lang="ts">
import { defineProps } from "vue";
defineProps(['variant']);
</script>