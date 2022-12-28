<script setup>
import { trans } from 'laravel-vue-i18n'
</script>

<template>
    <div class="flex">
        <div class="w-52">
            <div class="sticky">
                <button class="w-full bg-blue-500 py-3.5 rounded-2xl font-semibold text-xs hover:transition-all hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400">
                    {{ trans('New Discussion') }}
                </button>
            </div>
        </div>
        <div>
            
        </div>
    </div>
</template>
