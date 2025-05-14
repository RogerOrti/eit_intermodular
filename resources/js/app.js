import './bootstrap';

import * as bootstrap from 'bootstrap'

import { createApp } from 'vue';

import registerVue from './components/auth/register.vue';
import formEvent from './components/events/crearEvent.vue';
import cardEsdeveniment from "./components/esdeveniment/cardEsdeveniment.vue";
import carrusel from "./components/home/carrusel.vue";
import esdeveniment from './components/esdeveniment/esdeveniment.vue';
import filtreExpo from './components/expo/filtreExpo.vue';
import expo from './components/expo/expo.vue';
import perfil from './components/profile/perfil.vue';

const app = createApp({});
app.component('register', registerVue);
app.component('formevent', formEvent);
app.component("card-esdeveniment", cardEsdeveniment);
app.component("esdeveniment", esdeveniment);
app.component("filtre", filtreExpo);
app.component("exposicio", expo);
app.component("carrusel", carrusel);
app.component("perfil", perfil);
app.mount('#app');
