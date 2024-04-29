<template>
    <ul class="flex items-center gap-x-6">
        <li class="capitalize hover:text-yellow-200 transition-colors text-lg" v-for="link in links">
            <a href="">{{ link.name }}</a>
        </li>
    </ul>
</template>

<script setup lang="ts">
const links = [
    { name: 'about', url: '/about' },
    { name: 'services', url: '/services' },
    { name: 'work', url: '/work' },
    { name: 'bolg', url: '/blog' },
    { name: 'join', url: '/join' },
]
</script>