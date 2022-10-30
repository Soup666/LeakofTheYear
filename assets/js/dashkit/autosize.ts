//
// autosize.js
// Dashkit module
//

import autosize from 'autosize';

const toggles = document.querySelectorAll('[data-autosize]');

toggles.forEach((toggle) => {
    autosize(toggle);
});

// Make available globally
declare global {
    interface Window {
        autosize: any;
    }
}

window.autosize = autosize;
