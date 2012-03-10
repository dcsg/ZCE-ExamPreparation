<?php

/**
 * functions to handle functions variable arguments
 */
function arguments()
{
    var_dump(func_num_args());
    var_dump(func_get_arg(1));
    var_dump(func_get_args());
}

arguments(1.5,9,63);

/**
 * Creation of an anonymous function
 */

$funcSingleQuote    = create_function('$x','return $x*$x;');
$funcDoubleQuote    = create_function("\$x", "return \$x*\$x;"); //with double quotes the dollar must be escaped
var_dump($funcSingleQuote(10));
var_dump($funcDoubleQuote(10));