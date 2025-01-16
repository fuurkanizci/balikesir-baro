
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
window.dropzoneAddedFilesEventHandler = function () {
    document.querySelector('form button[type="submit"]').setAttribute('disabled', 'disabled');
}
window.dropzoneQueueCompleteEventHandler = function () {
    document.querySelector('form button[type="submit"]').removeAttribute('disabled');
}
