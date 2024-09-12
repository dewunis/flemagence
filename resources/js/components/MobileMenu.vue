<template>
    <div :class="{'bg-black opacity-90' : !variant , 'bg-white' : variant}" class="fixed left-0 top-16  h-screen w-full z-[100] ">
        <div class="w-full">
            <ul :class="{'text-white' : !variant, 'text-black' :  variant}" class="flex items-start pl-4 gap-x-6 flex-col pt-4">
                <li :class="{'hover:text-yellow-200' : !variant, 'hover:text-gray-200' : variant}" class="capitalize  transition-colors text-lg mb-3" v-for="link in links">
                    <a :href="link.url">{{ link.name }}</a>
                </li>
            </ul>
            <div class="px-4 mt-1">
                <a href="/contact" :class="{'hover:text-white bg-white hover:bg-opacity-10' : !variant , 'hover:text-white bg-black text-white' : variant}" class=" text-center w-full block hover:transition-opacity hover:duration-1000  py-[6px] px-4 rounded-full">
                    Contact
                </a>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { defineProps } from "vue";
import { links } from "@/constants/index.ts";
defineProps(['variant']);
</script>