import axios from 'axios';
import jQuery from 'jquery';
import _ from 'lodash';
window._ = _;
window.axios = axios;
window.$ = window.jQuery = jQuery;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
