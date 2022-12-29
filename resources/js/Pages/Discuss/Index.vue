<script setup>
import { trans } from 'laravel-vue-i18n'
import DiscussionItem from '@/components/DiscussionItem.vue'

defineProps({
    discussions: Array,
})
</script>

<template>
    <div class="flex">
        <div class="w-52 hidden md:block">
            <div class="sticky">
                <button class="w-full bg-blue-500 py-3.5 rounded-2xl font-semibold text-xs hover:transition-all hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400">
                    {{ trans('New Discussion') }}
                </button>
            </div>
        </div>
        <div>
            <div>
                <DiscussionItem
                    v-for="(discussion, index) in discussions"
                    :key="index"
                    :discussion="discussion"
                />
            </div>
            <div class="fixed right-5 lg:hidden bottom-8">
                <button class="flex h-14 w-14 items-center justify-center rounded-full bg-blue-500 text-center shadow-lg">
                    <img src="https://laracasts.com/images/forum/reply-mobile-button.svg" :alt="trans('Create a New Discussion Button')">
                </button>
            </div>
        </div>
    </div>
</template>
