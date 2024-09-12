<template>
    <div class="flex">
        <div class="mr-12 hidden xl:flex">
            <ul class="flex items-center gap-x-6" :class="{'text-gray-800': variant}">
                <li :class="{'hover:text-yellow-200' : !variant, 'hover:text-gray-500' : variant}" class="capitalize  transition-colors text-lg" v-for="link in links">
                    <a :href="link.url">{{ link.name }}</a>
                </li>
            </ul>
        </div>
        <div class="xl:hidden cursor-pointer">
            <Burger :variant="variant" @click="openMobileMenu = true" v-if="!openMobileMenu" />
            <Close :variant="variant" @click="openMobileMenu = false" v-if="openMobileMenu" />
        </div>

        <Teleport to="body">
            <MobileMenu :variant="variant" v-if="openMobileMenu" />
        </Teleport>
    </div>
</template>

<script setup lang="ts">
import { ref,defineProps } from "vue";
import { links } from "@/constants/index.ts";
import Burger from "@/components/ui/Button/Burger.vue";
import Close from "@/components/ui/Button/Close.vue";
import MobileMenu from "@/components/MobileMenu.vue";

const openMobileMenu = ref(false);

defineProps(['variant']);

</script>