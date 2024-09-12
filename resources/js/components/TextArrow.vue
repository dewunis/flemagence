<template>
    <div class="flex items-center">
        <span :class="{ 'mr-4': !spacing, [spacing]: spac }" class="block text-lg font-bold text-white uppercase">
            {{ text }}
        </span>
        <ArrowLeft />
    </div>
</template>

<script setup lang="ts">
import ArrowLeft from "@/components/ui/icon/ArrowLeft.vue";
import { defineProps } from "vue";

const props = defineProps<{
    text?: string
    spacing?: number
}>();
</script>
