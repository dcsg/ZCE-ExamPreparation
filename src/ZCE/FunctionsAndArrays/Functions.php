<?php

/**
 * functions to handle functions variable arguments
 */
function arguments()
{
    var_dump(func_num_args()); // output 3
    var_dump(func_get_arg(1)); // output 9
    var_dump(func_get_args()); //output array(1.5,9,63)
}

arguments(1.5,9,63);

/**
 * Creation of an anonymous function
 */

$funcSingleQuote    = create_function('$x','return $x*$x;');
$funcDoubleQuote    = create_function("\$x", "return \$x*\$x;"); //with double quotes the dollar must be escaped
var_dump($funcSingleQuote(10)); //output 100
var_dump($funcDoubleQuote(10)); //output 100