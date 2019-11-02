import './bootstrap';
import Vue from 'vue';
import router from './router'
import Vuetify from 'vuetify'

import App from "./views/App";

Vue.use(Vuetify);

const app = new Vue({
  el: '#app',
  router,
  vuetify: new Vuetify(),
  render: h => h(App)
});
