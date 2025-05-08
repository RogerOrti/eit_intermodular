import './bootstrap';

import * as bootstrap from 'bootstrap'

import { createApp } from 'vue';

import registerVue from './components/auth/register.vue';
import formEvent from './components/events/event.vue';
import cardEsdeveniment from "./components/esdeveniment/cardEsdeveniment.vue";
import carrusel from "./components/home/carrusel.vue";
import perfil from './components/profile/perfil.vue';

const app = createApp({});
app.component('register', registerVue);
app.component('formevent', formEvent);
app.component("card-esdeveniment", cardEsdeveniment);
app.component("carrusel", carrusel);
app.component("perfil", perfil);
app.mount('#app');
