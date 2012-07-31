<?php
/**
 * This file is part of the ZCE Preparation Exam package.
 *
 * (c) Daniel Gomes <me@danielcsgomes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ZCE\PHPBasics;

/**
 * Variables types and scope
 *
 * @author Daniel Gomes <me@danielcsgomes.com>
 */

/**
 * Globals variables
 * url: http://php.net/manual/en/language.variables.scope.php
 *
 */
function globals()
{

    // Using PHP-defined $Globals Array
    $GLOBALS["sum"] = $GLOBALS["x"]+$GLOBALS["y"];
    printf("The Sum of %d with %d is: %d", $GLOBALS["x"],$GLOBALS["y"],$GLOBALS["sum"]);

    // Using global keyword
    global $mul, $x, $y;
    $mul = $x * $y;
    printf("<br/>The Multiplication of %d with %d is: %d", $x,$y ,$mul);
}

/**
 * Usage of static variables inside functions
 * url: http://php.net/manual/en/language.variables.scope.php
 *
 */
function statics()
{
    static $a = 0;
    $b = 0;
    printf("<br/>Value of a: %d and b: %d", $a, $b);
    $a++; $b++;
}
//Declared the values to the global variables
$x = 10; $y = 20;

globals(); // outputs the sum and multiplication of x and y

statics(); // outputs a = b = 0
statics(); // outputs a = 1 & b = 0
statics(); // outputs a = 2 & b = 0

