<template>
    <div>
        <button v-if="tag == 'button'" :class="{'hover:bg-black hover:text-white bg-white text-black' : type == 'secondary', 'hover:bg-black hover:text-white bg-yellow1 text-black' : type == 'primary'}"
        class="hover:bg-black hover:transition-colors cursor-pointer transition-colors duration-500 xl:flex hover:duration-500 uppercase font-extrabold py-[6px] px-4 rounded-full">
           {{ text }}
        </button>
        <a v-else :href="href" :class="{'hover:bg-black hover:text-white bg-white text-black' : type == 'secondary', 'hover:bg-black hover:text-white bg-yellow1 text-black' : type == 'primary'}"
            class="hover:transition-colors cursor-pointer transition-colors duration-500 xl:flex hover:duration-500 uppercase font-extrabold  py-[6px] px-4 rounded-full">
            {{ text }} 
        </a>
    </div>
</template>

<script setup lang="ts">
const props = defineProps<{
    type? : 'primary' | 'secondary'
    text: string
    tag?: 'a' | 'button'
    href?: string
}>();
</script>
