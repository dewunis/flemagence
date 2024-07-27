<template>
    <a href="">
        <div class="h-[400px]  w-[320px] overflow-hidden relative" @mouseleave="isHighOpacityBackground = false"
            @mouseover="isHighOpacityBackground = true">
            <div v-if="!isHighOpacityBackground"
                class="duration-1000 transition-colors after:transition-colors after:duration-500 after:rounded-lg after:-z-0 after:absolute after:left-0 after:top-0 after:w-full after:h-full after:bg-black  after:opacity-30">
            </div>
            <div v-if="isHighOpacityBackground"
                class="duration-1000 transition-colors after:transition-colors after:duration-500 after:rounded-lg after:-z-0 after:absolute after:left-0 after:top-0 after:w-full after:h-full after:bg-black  after:opacity-80">
            </div>
            
            <img class="rounded-lg h-[400px] w-[320px] object-cover" :src="backgroundImgUrl" alt="work image">

            <div class="absolute left-1/2 bottom-14 -translate-x-1/2" v-if="!isHighOpacityBackground">
                <img class="h-[22px]" src="	https://makeagency.co.uk/wp-content/uploads/2024/04/Boxpark-Make-Agency.svg" alt="work logo image">
            </div>

            <div class="absolute left-0 top-0 w-full h-full" v-if="isHighOpacityBackground">
                <div class="absolute -translate-x-1/2 left-1/2 top-1/2 -translate-y-1/2 w-full">
                    <div class="flex items-center text-center flex-col w-full px-[40px] ">
                        <img class="h-[22px]" src="	https://makeagency.co.uk/wp-content/uploads/2024/04/Boxpark-Make-Agency.svg" alt="work logo image">
                        <p class="font-bold uppercase text-yellow1 my-14 text-sm">full website design and build</p>
                        <a href=""
                            class="uppercase text-sm font-light bg-yellow1 text-black py-[12px] w-full rounded-full">
                            FULL CASE STUDY
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </a>
</template>

<script setup lang="ts">
import { ref } from "vue";

const isHighOpacityBackground = ref(false);

defineProps<{
    backgroundImgUrl?: string
}>();

</script>
