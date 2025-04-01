import './bootstrap';

import * as bootstrap from 'bootstrap'

import { createApp } from 'vue';

import registerVue from './components/auth/register.vue';

const app = createApp({});
app.component('register', registerVue);
app.mount('#app');
