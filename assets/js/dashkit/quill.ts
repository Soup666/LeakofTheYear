//
// quill.js
// Theme module
//

import Quill from 'quill';

const toggles = document.querySelectorAll('[data-quill]');

toggles.forEach((toggle) => {
    const elementOptions = toggle.getAttribute("data-quill") ? JSON.parse(toggle.getAttribute("data-quill")) : {};

    const defaultOptions = {
        modules: {
            toolbar: [
                ['bold', 'italic'],
                ['link', 'blockquote', 'code', 'image'],
                [
                    {
                        list: 'ordered',
                    },
                    {
                        list: 'bullet',
                    },
                ],
            ],
        },
        theme: 'snow',
    };

    const options = {
        ...elementOptions,
        ...defaultOptions,
    };

    new Quill(toggle, options);
});

// Make available globally
declare global {
    interface Window {
        Quill: Quill;
    }
}

window.Quill = Quill;