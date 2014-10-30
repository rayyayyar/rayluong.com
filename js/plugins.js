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
	    "Hello!^400 Name's Ray. ^1000",
	    "I'm a designer in San Francisco today. ^1000 Come to see my work?"],
	    typeSpeed: 20,
	    backDelay: 100,
	    backSpeed: 30,
	    loop: false,
	    // defaults to false for infinite loop
	    loopCount: false,
	    callback: function(){ 
	    	$('.typed-cursor').fadeOut('fast'); 
	    	$('h4.down-arrow').delay(800).fadeTo('slow', 0.6); },
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

	$('.main-content').waypoint(function(direction) {
		$('.cover').find('.down-arrow').fadeOut('slow');
	}, { offset: '90%' });

// FLUIDBOX
	$('a').fluidbox( {
			// Close modal on scroll
			closeTrigger: [
			    {
			        selector: 'window',
			        event: 'scroll',
			    }
			]
	});
});