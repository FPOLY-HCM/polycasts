<script setup>
import { Link } from '@inertiajs/vue3'
import { MagnifyingGlassIcon, Bars3Icon } from '@heroicons/vue/24/outline'
import route from 'ziggy-js/src/js'
import { trans } from 'laravel-vue-i18n'

const menu = [
    { name: trans('Home'), url: '/', active: true },
    { name: trans('Topics'), url: '/', active: false },
    { name: trans('Series'), url: '/', active: false },
    { name: trans('Forum'), url: route('discuss.index'), active: false },
]
</script>

<template>
    <header>
        <nav class="px-5 py-3 md:px-10 h-14">
            <div class="flex items-center justify-between h-full">
                <div>
                    <Link :href="route('home')">
                        <img src="@/../images/logo.svg" width="145">
                    </Link>
                </div>
                <div class="hidden md:block">
                    <Link
                        v-for="(item, index) in menu"
                        :key="index"
                        :href="item.url"
                        v-text="item.name"
                        class="relative uppercase font-medium px-5 text-base hover:text-white after:absolute after:opacity-0 after:content-[''] after:-bottom-3 after:h-1 after:w-[60%] after:left-[20%] after:bg-blue-500 after:rounded-lg hover:after:opacity-100 after:transition-opacity duration-300"
                        :class="{ 'text-gray-400/50': !item.active, 'after:opacity-100 text-white': item.active }"
                    />
                </div>
                <div class="flex items-center space-x-3 md:hidden">
                    <button class="text-white p-2.5 bg-blue-500/10 rounded-xl">
                        <MagnifyingGlassIcon class="w-4 h-4" />
                    </button>
                    <Link>
                        <img src="https://www.gravatar.com/avatar/c8b47d3bd947380bba793fc8ccb15395?s=100&d=https%3A%2F%2Fs3.amazonaws.com%2Flaracasts%2Fimages%2Fforum%2Favatars%2Fdefault-avatar-10.png" class="rounded-full w-7 h-7" />
                    </Link>
                    <button>
                        <Bars3Icon class="w-7 h-7" />
                    </button>
                </div>
                <div class="items-center hidden md:flex">
                    <div>
                        <button class="bg-blue-500/10 p-2.5 text-white rounded-xl transition-all hover:bg-blue-500/20 hover:text-blue-500">
                            <MagnifyingGlassIcon class="w-4 h-4" />
                        </button>
                    </div>
                    <div class="ml-4">
                        <Link>
                            <img src="https://unavatar.io/github/datlechin" width="35" class="rounded-lg">
                        </Link>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>
