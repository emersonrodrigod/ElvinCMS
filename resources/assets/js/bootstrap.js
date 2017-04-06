
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

require('bootstrap-sass');


import Vue from 'vue';
import axios from 'axios';
import VueRouter from 'vue-router';
import Form from './utilities/Form';



window.Vue = Vue;

Vue.use(VueRouter);

window.axios = axios;

window.Form = Form;





window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest'
};


