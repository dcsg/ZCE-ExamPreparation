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
 * Regular Expressions examples for Portugal zip codes and phones.
 *
 * @author Daniel Gomes <me@danielcsgomes.com>
 */
class RegEx
{
    static $zip_code = '/\d{4}-\d{3}|\d{4}/';
    static $email = '/[a-zA-Z0-9._]{2,}@[a-zA-Z0-9]{2,}\.[a-zA-Z]{2,4}/';
    static $phone = '/(00351|\+351)2\d{8}|2\d{8}/';
    static $cellphone = '/(00351|\+351)9\d{8}|9\d{8}/';

    public function matchStringAndPattern($pattern, $string)
    {
        if(preg_match($pattern, $string))
            return true;
        else
            return false;

    }
}

$regex = new RegEx();

var_dump($regex->matchStringAndPattern(RegEx::$zip_code,"2000-001")); //true
var_dump($regex->matchStringAndPattern(RegEx::$zip_code,"2000")); //true
var_dump($regex->matchStringAndPattern(RegEx::$email,"me@danielcsgomes.com")); //true
var_dump($regex->matchStringAndPattern(RegEx::$email,"m@d.c")); //false
var_dump($regex->matchStringAndPattern(RegEx::$email,"me@fake.c")); //false
var_dump($regex->matchStringAndPattern(RegEx::$email,"me@f.com")); //false
var_dump($regex->matchStringAndPattern(RegEx::$phone,"999999999")); //false
var_dump($regex->matchStringAndPattern(RegEx::$phone,"299999999")); //true
var_dump($regex->matchStringAndPattern(RegEx::$phone,"00351299999999")); //true
var_dump($regex->matchStringAndPattern(RegEx::$phone,"299999999")); //true
var_dump($regex->matchStringAndPattern(RegEx::$cellphone,"999999999")); //true
var_dump($regex->matchStringAndPattern(RegEx::$cellphone,"+351999999999")); //true
