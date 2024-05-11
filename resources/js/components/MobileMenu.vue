<template>
    <div class="absolute left-0 top-16 bg-black h-full w-full z-[60] opacity-80">
        <div class="w-full">
            <ul class="flex items-start pl-4 gap-x-6 text-white flex-col pt-4">
                <li class="capitalize hover:text-yellow-200 transition-colors text-lg mb-3" v-for="link in links">
                    <a href="">{{ link.name }}</a>
                </li>
            </ul>
            <div class="px-4 mt-1">
                <a href="/contact" class="hover:bg-opacity-10 text-center w-full block hover:transition-opacity hover:duration-1000 hover:text-white bg-white py-[6px] px-4 rounded-full">
                    Contact
                </a>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { links } from "@/constants/index.ts";

</script>