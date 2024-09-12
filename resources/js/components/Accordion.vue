<template>
    <div class="flex items-center py-2 border-b border-black">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-move-right"><path d="M18 8L22 12L18 16"/><path d="M2 12H22"/></svg>
        <span class="block ml-2">{{ text }}</span>
    </div>
</template>

<script setup lang="ts">
defineProps<{
    text?: string
    spacing?: number
}>();
</script>
