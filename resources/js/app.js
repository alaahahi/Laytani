import '../css/app.css';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { createI18n } from 'vue-i18n';
import { createScrollRevealDirective } from 'vue-scroll-reveal'; // Import the directive

import axios from "axios";

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';
import en from './lang/en.json';
import ar from './lang/ar.json';

window.axios = axios;
const i18n = createI18n({
  legacy: false,
  locale: localStorage.getItem('lang')||'en',
  messages: {
    en,
    ar,
  },
});

const slideUp = {
  easing: 'ease-in-out',
  origin: 'bottom',
  duration: 1000,
};
const fadeDown = {
  distance: '50PX',
  origin: 'bottom',
  opacity: 0,
  scale: 1,
  easing: 'ease-in',
  delay: 0,
  duration: 200,
  rotate: { x: 0, y: 0, z: 0 },
};
const fadeUp = {
  distance: '150px',
  origin: 'bottom',
  opacity: 1,
  scale: 1,
  easing: 'ease-in-out',
  delay: 150,
  duration: 1000,
  rotate: { x: 0, y: 0, z: 0 },
};
const fadeRight = {
  distance: '150px',
  origin: 'right',
  opacity: 1,
  scale: 1,
  easing: 'ease-in-out',
  delay: 150,
  duration: 1000,
  rotate: { x: 0, y: 0, z: 0 },
};
const ZoomIn = {
  opacity:1,
  scale: 0,
  easing: 'ease-in',
  delay: 100,
  duration: 1000,
};
const vScrollReveal = createScrollRevealDirective(slideUp);
const vScrollRevealFadeDown = createScrollRevealDirective(fadeDown);
const vScrollRevealFadeUp = createScrollRevealDirective(fadeUp);
const vScrollRevealfadeRight = createScrollRevealDirective(fadeRight);

const vScrollRevealZoomIn = createScrollRevealDirective(ZoomIn);


createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(i18n)
            .use(ZiggyVue, Ziggy)
            .directive('scroll-reveal', vScrollReveal) // Register the vScrollReveal directive
            .directive('scroll-reveal-fade-up', vScrollRevealFadeUp) // Register the vScrollRevealFadeDown directive
            .directive('scroll-reveal-fade-right', vScrollRevealfadeRight) // Register the vScrollRevealFadeDown directive
            .directive('scroll-reveal-fade-down', vScrollRevealFadeDown) // Register the vScrollRevealFadeDown directive
            .directive('scroll-reveal-zoom-in', vScrollRevealZoomIn) // Register the vScrollRevealFadeDown directive
            .mount(el);
    },
});
