$(document).ready(function() {
// HEADROOM
    // grab an element
    var el = document.querySelector("header");
    // construct an instance of Headroom, passing the element
    var headroom  = new Headroom(el, {
      "offset": 200,
      "tolerance": 2
    });
    // initialise
    headroom.init();

// TYPED

		$("#typed").typed({
		    strings: [
		    "Oh hi.",
		    "hello there.",
		    "name's ^1000 Ray.",
		    "...doin' mostly ^200 Interaction Design in San Francisco these days."],
		    typeSpeed: 50,
		    backDelay: 1300,
		    backSpeed: 80,
		    loop: false,
		    // defaults to false for infinite loop
		    loopCount: false,
		    callback: function(){ $('.typed-cursor').fadeOut('fast'); $('span.hide').delay(1200).fadeIn('slow'); },
		    resetCallback: function() { newTyped(); }
		});

		$(".reset").click(function(){
		    $("#typed").typed('reset');
		});

		function newTyped(){ /* A new typed object */ }
		function foo(){ console.log("Callback"); }

// WAYPOINT
$('.projects a').hide();
$('.projects .row').waypoint(function(direction) { 
	$(this).find('a').fadeIn('slow');
}, { offset: '60%' });

});