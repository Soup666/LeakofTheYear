//
// inputmask.js
// Theme module
//

import Inputmask from 'inputmask';

const toggles = document.querySelectorAll('[data-inputmask]');

const options = {
    rightAlign: false,
};

Inputmask(options).mask(toggles);

// Make available globally
declare global {
    interface Window {
        InputMask: Inputmask;
    }
}

window.InputMask = Inputmask;
