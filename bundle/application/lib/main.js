console.log(`----------------------------`);
console.log(`-- MAIN JAVASCRIPT ENGINE --`);
console.log(`----------------------------`);
console.log(`built on democi framework`);
console.log(`https://github.com/ghiyastfarisi/democi`);


/**
 * enable window.jQuery and window.$
 * as bootstrap dependencies
 *  */
const jQuery = require('../../../template/upbound/js/jquery.min');
window.jQuery = window.$ = jQuery;

$(document).ready(function() {
    alert(`YEAY!`);
})