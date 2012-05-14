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
    public function anonymousFunction(){

        //Creates the anonymous function
        $squareSize = create_function('$x','print("<br/>x*x = " . $x*$x);');
        printf("<br/><br/>---- Anonymous Function<br/>Anonymous Function name: %s", $squareSize);
        $squareSize(5);
    }

    public function argumentsExample()
    {
        printf("---- Function Arguments<br/>Arguments length: " . func_num_args() );
        printf("<br/>Argument #1 if exists: " . func_get_arg(0) );
        printf("<br/>Argument #2 if exists: " . func_get_arg(1) );
        print("<br/>All Arguments of the function: ");
        print_r(func_get_args());
    }
}

$function = new Functions();
$function->argumentsExample(1.5,9,63);
$function->anonymousFunction();