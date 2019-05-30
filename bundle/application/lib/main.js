console.log(`----------------------------`);
console.log(`-- MAIN JAVASCRIPT ENGINE --`);
console.log(`----------------------------`);
console.log(`built on democi framework`);
console.log(`https://github.com/ghiyastfarisi/democi`);

import jQuery from 'jquery';

/**
 * enable window.jQuery and window.$
 * as bootstrap dependencies
 *  */
window.jQuery = jQuery;
window.$ = jQuery;

$(document).ready(function() {
    alert(`YEAY!`);
})