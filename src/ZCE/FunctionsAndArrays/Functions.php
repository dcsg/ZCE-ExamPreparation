<?php
/**
 * This file is part of the ZCE Preparation Exam package.
 *
 * (c) Daniel Gomes <me@danielcsgomes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ZCE\FunctionsAndArrays;

/**
 * functions to handle functions variable arguments
 */
class Functions
{
    /**
     * Anonymous function variable
     */
    public $squareSize;

    /**
     * Creates the anonymous function
     */
    public function __construct(){
        $this->squareSize = create_function('$x','print($x*$x);');
    }

    public function argumentsExample()
    {
        printf("Arguments length: " . func_num_args() );
        printf("<br>Argument #1 if exists: " . func_get_arg(0) );
        printf("<br>Argument #2 if exists: " . func_get_arg(1) );
        print("<br>All Arguments of the function: ");
        print_r(func_get_args());
    }
}

$function = new Functions();
$function->argumentsExample(1.5,9,63);
$function->squareSize(5);



/**
 * Creation of an anonymous function
 *

$funcSingleQuote    = create_function('$x','return $x*$x;');
$funcDoubleQuote    = create_function("\$x", "return \$x*\$x;"); //with double quotes the dollar must be escaped
var_dump($funcSingleQuote(10)); //output 100
var_dump($funcDoubleQuote(10)); //output 100*/