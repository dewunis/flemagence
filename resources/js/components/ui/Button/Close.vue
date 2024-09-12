<template>
    <div :class="{'fill-white' : !variant, 'fill-black' : variant}" class="w-[32px] h-[32px] flex items-center justify-center border-[2px] rounded-full">
        <svg v-if="variant" xmlns="http://www.w3.org/2000/svg" fill="#fff" width="24" height="24"  viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>
        <svg v-else xmlns="http://www.w3.org/2000/svg"  fill="#000" width="24" height="24"  viewBox="0 0 256 256"><path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path></svg>
    </div>
</template>

<script>
import { defineProps } from "vue";
defineProps(['variant']);
</script>