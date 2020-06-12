require('./bootstrap');
window.Vue = require('vue');

import App from './components/App'
import Form from './components/pages/form/Index'

Vue.component('form-vue', Form);

const app = new Vue({
    el: '#app',
    render: h => h(App)
});
