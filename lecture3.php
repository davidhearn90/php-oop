<?php
//example 1
if(is_integer(3))
echo "it is a integer";

else

	echo "it is not a integer";
	var_dump(is_integer(4));
	var_dump(is_integer(7));
	var_dump(is_integer(0));
	var_dump(is_integer(11));

//example 2
$hello = array('hi', 'bye', 'yellow');

if(is_array($hello))
echo "it is a array";

else

	echo "it is not a null";
	var_dump(is_array('hi'));
	var_dump(is_array('bye'));
	var_dump(is_array('yellow'));
	var_dump(is_array('red'));

//example 3
if(is_float(33.7))
echo "it is a double";

else

	echo "it is not a double";
	var_dump(is_float(45.5));
	var_dump(is_float(29.8));
	var_dump(is_float(56e4));
	var_dump(is_float(38.9));
