<?php
/**
 * This file is part of the ZCE - Exam Preparation package.
 *
 * (c) Daniel Gomes <me@danielcsgomes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ZCE\StringsAndPatterns;

/**
 * Some String examples and functions usage
 *
 * @author Daniel Gomes <me@danielcsgomes.com>
 */
class Strings
{
    static $ONE     = 'hello';
    static $TWO     = 'Hello';
    static $THREE   = 'Portugal';
    static $FOUR    = 'Lisbon';
    static $FIVE    = "hello";
}

//String Comparison #1
print_r(strcmp(Strings::$ONE, Strings::$FIVE)."\n");    // 'hello' vs "hello" = 0
print_r(strcmp(Strings::$THREE, Strings::$FOUR)."\n");  // 'Portugal' vs 'Lisbon' = 4
print_r(strcmp(Strings::$TWO, Strings::$FIVE)."\n");    // 'Hello' vs "hello" = -32
print_r(strcmp(Strings::$TWO, Strings::$ONE)."\n");     // 'Hello' vs 'hello' = -32
print_r(strcmp(Strings::$ONE, Strings::$TWO)."\n");     // 'hello' vs 'Hello' = 32
print_r(strcmp('1', '0125')."\n");                      // '1' vs '0125' = 1
