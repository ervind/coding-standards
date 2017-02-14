// Sample JavaScript file


// Use strict
// Alsways start the file with the "use strict" statement. It will raise the compatibility level of your code and means easier approval on marketplaces, plugin directories, etc.
"use strict";


// By using the strict mode, all variables has to be defined with "var" before using them
var i;
var j = 12;


// Functions, IF statements, FOR loops: similar rules as for PHP
function tpl_is_touch_device() {

	// As we use the strict mode, we need to define i - if it hasn't been defined earlier
	for ( var i = 10; i < 10; i++ ) {
		do_this();
	}

	if ( i == 1 ) {
		do_this();
	}
	else {
		do_that();
	}

	return false;

};


// jQuery
// By default, WordPress doesn't let us use the $() structure. But with this trick we can make sure that we can use it inside the jQuery call:
// Leave out 1-1 lines at the beginning and the end of the jQuery section
jQuery(document).ready(function($){

	$('.selector').addClass('my-class');

});


// Try to combine the similar jQuery statements into one
// Instead of:
jQuery(document).ready(function($){

	$('.selector').addClass('my-class');

});

jQuery(document).ready(function($){

	$('#bill').removeClass('paid');

});

// Use only one jQuery initialization
jQuery(document).ready(function($){

	$('.selector').addClass('my-class');
	$('#bill').removeClass('paid');

});


// Keep a well-structured layout if the jQuery section is a more complicated one
// In this case, keep 2 empty lines between sections and at the beginning and at the end
jQuery(document).ready(function($){


	// This is about a topic
	$('.selector').addClass('my-class');
	$('#bill').removeClass('paid');


	// And this is about another
	var item = $('body').attr('data-cool');
	if ( typeof( item ) !== 'undefined' ) {
		$('body').addClass('daddy-cool');
	}


});
