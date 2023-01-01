<script setup lang="ts">
import Header from './Header.vue'
</script>

<template>
    <Header />
    <main class="px-5 pt-8 md:px-10">
        <slot />
    </main>
</template>
