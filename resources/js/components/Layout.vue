<script setup lang="ts">
import Header from './Header.vue'
</script>

<template>
    <Header />
    <main class="px-10 pt-8 font-poppins">
        <slot />
    </main>
</template>
