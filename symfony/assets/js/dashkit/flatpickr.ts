//
// flatpickr.js
// Theme module
//

import flatpickr from 'flatpickr';

const toggles = document.querySelectorAll('[data-flatpickr]');

toggles.forEach((toggle) => {
    const options = toggle.getAttribute("data-flatpickr") ? JSON.parse(toggle.getAttribute("data-flatpickr")) : {};

    flatpickr(toggle, options);
});

// Make available globally
declare global {
    interface Window {
        flatpickr: any;
    }
}

window.flatpickr = flatpickr;