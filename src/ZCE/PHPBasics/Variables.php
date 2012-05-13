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

class Variables
{
    public function __construct()
    {
        //Globals
        $GLOBALS["sum"] = $GLOBALS["x"]+$GLOBALS["y"];
    }
}

//Declared the values to the global variables
$x = 10;
$y = 20;

$variablesTest = new Variables();

// print the result - output 30
print($sum);
