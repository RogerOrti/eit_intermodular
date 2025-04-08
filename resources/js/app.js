import './bootstrap';

import * as bootstrap from 'bootstrap'

import { createApp } from 'vue';

import registerVue from './components/auth/register.vue';
import formEvent from './components/events/event.vue';

const app = createApp({});
app.component('register', registerVue);
app.component('formevent', formEvent);
app.mount('#app'); 
