<script setup>
import { Link , usePage } from '@inertiajs/vue3'
import { MagnifyingGlassIcon } from '@heroicons/vue/24/outline'
import route from 'ziggy-js/src/js'

const menu = [
    { name: 'Home', url: '/', active: true },
    { name: 'Topics', url: '/', active: false },
    { name: 'Series', url: '/', active: false },
    { name: 'Forum', url: route('discuss.index'), active: false },
]
</script>

<template>
    <header>
        <nav class="px-10 py-3 h-14">
            <div class="flex items-center justify-between h-full">
                <div>
                    <Link>
                        <img src="https://laracasts.com/images/logo/logo-white.svg" width="145">
                    </Link>
                </div>
                <div>
                    <Link
                        v-for="(item, index) in menu"
                        :key="index"
                        :href="item.url"
                        v-text="item.name"
                        class="relative uppercase font-medium px-5 font-poppins text-base hover:text-white after:absolute after:opacity-0 after:content-[''] after:-bottom-3 after:h-1 after:w-[60%] after:left-[20%] after:bg-blue-500 after:rounded-lg hover:after:opacity-100 after:transition-opacity duration-300"
                        :class="{ 'text-grey-600/30': !item.active, 'after:opacity-100 text-white': item.active }"
                    />
                </div>
                <div class="flex items-center">
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
