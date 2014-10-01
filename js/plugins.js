$(document).ready(function() {
    // grab an element
    var el = document.querySelector("header");
    // construct an instance of Headroom, passing the element
    var headroom  = new Headroom(el, {
      "offset": 200,
      "tolerance": 2
    });
    // initialise
    headroom.init();
});