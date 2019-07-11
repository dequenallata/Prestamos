
require('./bootstrap');

window.Vue = require('vue');


Vue.component('ejemplo-component', require('./components/EjemploComponent.vue').default);
Vue.component('form-component', require('./components/FormComponent.vue').default);
Vue.component('mi-componente', require('./components/MiComponente.vue').default);
const app = new Vue({
    el: '#app',
});
