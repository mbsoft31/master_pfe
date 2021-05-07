require('./bootstrap');

require('@popperjs/core')

require('alpinejs');

import Dropdown from 'bootstrap/js/src/dropdown'
import Modal from 'bootstrap/js/src/modal'

window.Dropdown = Dropdown;
window.Modal = Modal;
