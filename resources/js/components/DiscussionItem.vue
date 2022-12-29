<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import { EyeIcon } from '@heroicons/vue/24/solid'
import {trans} from "laravel-vue-i18n";

defineProps({
    discussion: Object,
})
</script>

<template>
    <Link class="flex flex-col bg-[rgb(24,39,63)] hover:bg-[rgb(25,48,78)] bg-opacity-70 text-white px-5 py-4 mb-3 rounded-2xl">
        <div class="flex items-center mr-5 mb-4">
            <div class="flex items-center">
                <img
                    :src="discussion.user.avatar"
                    :alt="discussion.user.username"
                    class="rounded-xl w-14 h-14 mr-3"
                />
                <strong class="text-xs uppercase">{{ discussion.user.username }}</strong>
            </div>
            <div class="ml-auto">
                <div class="flex items-center">
                    <EyeIcon class="h-5 w-5 text-gray-400" />
                    <span class="text-gray-400 text-xs ml-1">{{ discussion.replies_count }}</span>
                </div>
            </div>
        </div>
        <div>
            <h4 class="mb-4 font-semibold hover:underline">{{ discussion.title }}</h4>
            <div class="text-xs font-semibold leading-none tracking-tight text-gray-300">
                <a class="text-blue-400" href="/@vincent15000">vincent15000</a>
                {{ trans('replied') }}
                <a href="https://laracasts.com/discuss/replies/860134">
                    <time class="font-semibold">{{ discussion.created_at }}</time>
                </a>
            </div>
        </div>
    </Link>
</template>
