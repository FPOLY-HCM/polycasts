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
        <div class="hidden w-96 md:block">
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
                        <select class="outline-none bg-[rgb(24,39,63)] text-grey-600 w-28 rounded-full px-5 py-3 text-xs appearance-none">
                            <option value="">Latest</option>
                        </select>
                        <ChevronDownIcon class="absolute w-3 h-4 top-3 right-5" />
                    </div>
                    <div class="relative">
                        <select class="outline-none bg-[rgb(24,39,63)] text-grey-600 w-28 rounded-full px-5 py-3 text-xs appearance-none">
                            <option value="">{{ trans('All') }}</option>
                        </select>
                        <ChevronDownIcon class="absolute w-3 h-4 top-3 right-5" />
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
                <button class="flex items-center justify-center text-center bg-blue-500 rounded-full shadow-lg h-14 w-14">
                    <img src="https://laracasts.com/images/forum/reply-mobile-button.svg" :alt="trans('Create a New Discussion Button')">
                </button>
            </div>
        </div>
    </div>
</template>
