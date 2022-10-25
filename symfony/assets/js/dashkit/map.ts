//
// map.js
// Theme module
//

import { mapboxgl } from 'mapbox-gl';

const maps = document.querySelectorAll('[data-map]');
const accessToken = 'pk.eyJ1IjoiZ29vZHRoZW1lcyIsImEiOiJjanU5eHR4N2cybDU5NGVwOHZwNGprb3E0In0.msdw9q16dh8v4azJXUdiXg';

if (typeof mapboxgl !== 'undefined') {
    maps.forEach(map => {
        const elementOptions = map.getAttribute("data-map") ? JSON.parse(map.getAttribute("data-map")) : {};

        const defaultOptions = {
            container: map,
            style: 'mapbox://styles/mapbox/light-v9',
            scrollZoom: false,
            interactive: false
        }

        const options = {
            ...elementOptions,
            ...defaultOptions
        };

        // Get access token
        mapboxgl.accessToken = accessToken;

        // Init map
        new mapboxgl.Map(options);
    })
}
