<script setup>
import { Link } from '@inertiajs/vue3'
import { EyeIcon } from '@heroicons/vue/24/solid'

defineProps({
    conversation: Object,
})
</script>

<template>
    <Link class="flex bg-[rgb(24,39,63)] hover:bg-[rgb(25,48,78)] bg-opacity-70 text-white px-5 py-4 mb-3 rounded-2xl">
        <div class="mr-5">
            <img
                :src="conversation.user.avatar"
                :alt="conversation.user.username"
                class="rounded-xl w-14 h-14"
            />
        </div>
        <div class="flex flex-col justify-between w-full">
            <div class="flex justify-between">
                <h4 class="text-lg font-semibold truncate hover:underline">{{ conversation.title }}</h4>
                <div class="flex">
                    <div class="flex mr-4 text-grey-700">
                        <EyeIcon class="w-4 h-4" />
                        <span class="ml-1.5 text-xs font-medium">{{ conversation.views }}</span>
                    </div>
                    <div class="flex mr-4 text-grey-700">
                        <EyeIcon class="w-4 h-4" />
                        <span class="ml-1.5 text-xs font-medium">{{ conversation.replies_count }}</span>
                    </div>
                    <Link class="ml-5 block w-28 py-2 px-0 text-center text-xs border rounded-full border-[var(--channel-color)] text-[var(--channel-color)]" :style="{ '--channel-color': conversation.channel.color }">Laravel</Link>
                </div>
            </div>
            <div class="text-xs font-semibold">
               <template v-if="conversation.last_replly">
                   <Link class="text-blue-600">{{ conversation.last_replly.username }}</Link>
                   replied
               </template>
                <template v-else>
                    <Link class="text-blue-600">{{ conversation.user.username }}</Link>
                    posted
                </template>
                <span class="text-grey-800">{{ conversation.created_at }}</span>
            </div>
        </div>
    </Link>
</template>
