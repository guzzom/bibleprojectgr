require('./bootstrap');

window.Vue = require('vue');


//Bible
Vue.component('antiguo-component', require('./components/AntiguoComponent.vue').default);
Vue.component('nuevo-component', require('./components/NuevoComponent.vue').default);
Vue.component('libros-component', require('./components/LibrosComponent.vue').default);
Vue.component('capitulos-component', require('./components/CapitulosComponent').default);
Vue.component('editar-component', require('./components/EditarComponent').default);





const app = new Vue({
    el: '#app',
});
