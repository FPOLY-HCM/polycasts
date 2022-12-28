import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from 'ziggy-js/src/js/vue';
import { i18nVue } from 'laravel-vue-i18n'
import Layout from './components/Layout.vue';

import '../sass/app.scss'

createInertiaApp({
    resolve: async name => {
        const page = await resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue'))
        page.default.layout ??= Layout
        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin, ZiggyVue, i18nVue, {
                lang: 'vi',
                resolve: async lang => {
                    const langs = import.meta.glob('../../lang/*.json');
                    return await langs[`../../lang/${lang}.json`]();
                }
            })
            .mount(el)
    },
})
