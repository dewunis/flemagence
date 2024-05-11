<template>
    <div class="flex">
        <div class="mr-12 hidden xl:flex">
            <ul class="flex items-center gap-x-6">
                <li class="capitalize hover:text-yellow-200 transition-colors text-lg" v-for="link in links">
                    <a href="">{{ link.name }}</a>
                </li>
            </ul>
        </div>
        <div class="xl:hidden cursor-pointer">
            <Burger @click="openMobileMenu = true" v-if="!openMobileMenu" />
            <Close @click="openMobileMenu = false" v-if="openMobileMenu" />
        </div>

        <Teleport to="body">
            <MobileMenu v-if="openMobileMenu" />
        </Teleport>
    </div>
</template>

<script setup lang="ts">
import { ref } from "vue";
import { links } from "@/constants/index.ts";
import Burger from "@/components/ui/Button/Burger.vue";
import Close from "@/components/ui/Button/Close.vue";
import MobileMenu from "@/components/MobileMenu.vue";

const openMobileMenu = ref(false);

</script>