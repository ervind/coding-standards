<?php
// Sample PHP file


// Adding a variable.
$variable = 14;


// Adding several variables in a bunch
// The right part of the definition is shifted to the longest variable name's tab
$variable		= 14;
$variable_too	= 'xyz';
$vari			= false;



/* FUNCTIONS */


// Leave 1 empty line between the beginning and the closing {} braces. The function name can contain only lowercase letters and underscores.
// Always add at least 1 line of explanation before defining the function: what it does in general, is there anything interesting we need to know about it?
function function_name() {

	do_something();
	return $value;

}



// When defining more functions in a row, leave 3 lines between them.
// Here below is a function with a parameter. Leave an empty space between the param name and the brackets.
function other_function_name( $param ) {

	do_something();
	return $value;

}



// And a function with a parameter with a default value
function another_function_name( $param = 'rulez' ) {

	do_something();
	return $value;

}


// Calling a function
other_function_name( 'hello' );

// Or if we need the return value
$variable = other_function_name( 'hello' );



/* ARRAYS */


// Array without values
$array_name = array();


// Associative Array with values
// On the left side there are double quotes (""), while on the right side single quotes ('')
// Between the name and the value are TABs. The rules are the same as for simple variables
// After the last line there is a comma (,). This way the lines are easier to be moved up or down
$array_name = array(
	"value"			=> 'Something',
	"other_value"	=> 'Something else',
	"numeric_value"	=> 456,
);


// Multi-level array
// Please note that the arrow goes 1 TAB right even if the param name on the left is shorter.
$array_name = array(
	"value"			=> 'Something',
	"other_value"	=> 'Something else',
	"numeric_value"	=> 456,
	"inner_array"	=> array(
		"value"			=> 'Hello',
		"other"			=> 'World',
	),
);



/* IF ... ELSE */


// Short version (when there is only 1 line in the branches)
// Always leave a line empty before and after the IF ... ELSE statement
if ( $variable == true ) {
	do_this();
}
else {
	do_that();
}


// Longer version (when there are more lines)
if ( $variable == true ) {

	do_this();
	and_this();
	and_this_too();

}

else {

	do_that();
	just_in_case();

}


// The other syntax can be used in WordPress loops, but if possible, nowhere else please
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<!-- SOME HTML CODE -->

<?php endwhile; else: ?>

	<p><?php _e( 'Sorry, no posts matched your criteria.', 'themple-starter' ); ?></p>

<?php endif;



/* FOR & FOREACH LOOP */


// Here is the standard syntax
for ( $variable = 0; $variable < 10; $variable++ ) {
	do_something();
}


// Leave out 1 line space if there are more lines inside the for loop
for ( $variable = 0; $variable < 10; $variable++ ) {

	do_something();
	and_this_too();

}


// Foreach works in a similar way.
// Of course $key is not always needed. If we don't need it, don't add to the loop to spare some memory
foreach ( $array as $key => $value ) {
	do_something();
}



/* STRINGS */


// Always use single apostrophes to define strings
$string	= 'I am a string';


// Adding variables to a string
// There is a space around the dots. It makes it more readable
$string	= 'I have ' . $apples . ' apples in my bucket.';


// And how strings are added with WordPress's i18n functions
$string	= __( 'I am a string', 'text-domain' );


// With sprintf to include the variable in the translatable string
// We can do it simply like this:
$string	= sprintf( __( 'I have %d apples in my bucket.', 'text-domain' ), $apples );

// Or break it to more lines if we have a longer text and more variables
$string	= sprintf(
	__( 'I have %d apples in my bucket. Lorem ipsum dolor sit amet, wisi proin neque morbi ante blandit et, neque a magna et tellus donec, bibendum nunc porta. Malesuada tincidunt tincidunt eu tortor, nulla nunc vel. Magnis dolor eleifend %s cras phasellus, porttitor consectetuer.', 'text-domain' ),
	$apples,
	$maximus
);



/* OBJECTS */


// Defining object classes
// Class name words start with Capital Letters, separated with underscores
// 2 empty lines after the class name AND before its closing
class Class_Name {


	// Variables are just like normally. There are tabs after the public / protected / private definition and the variable name, too
	protected	$variable		= false;
	public		$another_var	= "value";



	// 3 empty lines between the variables and the methods
	public function __construct( $args ) {

		do_something();

	}


	// Adding the necessary classes to the admin field
	public function method_name ( $param, $eter ) {

		do_something();
		return $something;

	}


}


// Initializing a new object
$obj = new Class_Name();



/* at the end of the PHP file, DON'T close the file with ?>. It can lead to compile issues. */
