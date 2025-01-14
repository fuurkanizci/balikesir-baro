import _ from 'lodash';
import * as bootstrap from 'bootstrap';
import axios from 'axios';
import jQuery from 'jquery';

window._ = _;
window.$ = window.jQuery = jQuery;
window.bootstrap = bootstrap
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

