<script setup>
import { ChevronDownIcon } from '@heroicons/vue/24/solid'
import { trans } from 'laravel-vue-i18n'
import DiscussionItem from '@/components/DiscussionItem.vue'

defineProps({
    discussions: Array,
})
</script>

<template>
    <div class="flex gap-10">
        <div class="w-96 hidden md:block">
            <div class="sticky">
                <button class="w-full bg-blue-500 py-3.5 rounded-2xl font-semibold text-xs hover:transition-all hover:bg-gradient-to-r hover:from-blue-500 hover:to-blue-400">
                    {{ trans('New Discussion') }}
                </button>
            </div>
        </div>
        <div>
            <div class="mb-6">
                <div class="flex gap-4">
                    <div class="relative">
                        <select class="outline-none bg-[rgb(24,39,63)] text-[rgb(186,217,252)] w-28 rounded-full px-5 py-3 text-xs appearance-none">
                            <option value="">Latest</option>
                        </select>
                        <ChevronDownIcon class="w-3 h-4 absolute top-3 right-5" />
                    </div>
                    <div class="relative">
                        <select class="outline-none bg-[rgb(24,39,63)] text-[rgb(186,217,252)] w-28 rounded-full px-5 py-3 text-xs appearance-none">
                            <option value="">{{ trans('All') }}</option>
                        </select>
                        <ChevronDownIcon class="w-3 h-4 absolute top-3 right-5" />
                    </div>
                </div>
            </div>
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
