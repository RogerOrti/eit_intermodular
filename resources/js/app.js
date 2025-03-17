import './bootstrap';

import * as bootstrap from 'bootstrap'

import { createApp } from 'vue';

import prova from './components/prova.vue';

const app = createApp({});
app.component('prova', prova);
app.mount('#app');
