
import './bootstrap.js';
import '../scss/app.scss';

import.meta.glob([
    '../images/**'
])
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    },
    beforeSend: function () {
    },
    complete: function () {
    },
    error: window.ajaxDefaultErrorCallback
});
