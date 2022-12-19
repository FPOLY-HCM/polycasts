import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

import '../sass/app.scss'

createInertiaApp({
    resolve: name => {
        // @ts-ignore
        const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
        return pages[`./Pages/${name}.vue`]
    },
    // @ts-ignore
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
})
