import './bootstrap';

import * as bootstrap from 'bootstrap'

import { createApp } from 'vue';

import registerVue from './components/auth/register.vue';
import formEvent from './components/events/event.vue';
import cardEsdeveniment from "./components/esdeveniment/cardEsdeveniment.vue";


const app = createApp({});
app.component('register', registerVue);
app.component('formevent', formEvent);
app.component("card-esdeveniment", cardEsdeveniment);
app.mount('#app');
