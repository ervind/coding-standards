<?php
// Usage of Framework functions


// When checking the value of a variable, use the tpl_get_option() function. When displaying them, use the tpl_get_value() or tpl_value().
// The _value() functions return a formatted string, and can make problems if tpl_get_option() is empty, but the _value() functions add a prefix/suffix
if ( tpl_get_option( 'option_name' ) == 'good' ) {

	echo tpl_get_value( 'option_name' );
	// or
	tpl_value( 'option_name' );

}
