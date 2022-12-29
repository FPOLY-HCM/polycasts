<script setup lang="ts">
import Header from './Header.vue'
</script>

<template>
    <Header />
    <main class="px-5 md:px-10 pt-8">
        <slot />
    </main>
</template>
