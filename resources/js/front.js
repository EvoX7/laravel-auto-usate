
window.Vue = require('vue');

import Vue from 'vue';
import App from './views/App';

const app = new Vue({
    el: '#root',

    //! <- Mostra App all'avvio di Vue
    render: h => h(App)
});