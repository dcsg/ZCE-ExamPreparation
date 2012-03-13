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
 * Regular Expressions examples.
 *
 * @author Daniel Gomes <me@danielcsgomes.com>
 */
class RegEx
{
    static $codigo_postal = '/\d{4}-\d{3}|\d{4}/';
    static $email = '/[a-zA-Z0-9._]{2,}@[a-zA-Z0-9]{2,}\.[a-zA-Z]{2,4}/';
    static $telefone = '/(00351|\+351)2\d{8}|2\d{8}/';
    static $telemovel = '/(00351|\+351)9\d{8}|9\d{8}/';

    public function validateCellPhone($pattern, $string)
    {
        if(preg_match($pattern, $string))
            return true;
        else
            return false;

    }
}

$regex = new RegEx();

var_dump($regex->validateCellPhone(RegEx::$codigo_postal,"2000-001")); //true
var_dump($regex->validateCellPhone(RegEx::$codigo_postal,"2000")); //true
var_dump($regex->validateCellPhone(RegEx::$email,"me@danielcsgomes.com")); //true
var_dump($regex->validateCellPhone(RegEx::$telefone,"999999999")); //false
var_dump($regex->validateCellPhone(RegEx::$telefone,"299999999")); //true
var_dump($regex->validateCellPhone(RegEx::$telemovel,"999999999")); //true
var_dump($regex->validateCellPhone(RegEx::$telemovel,"+351999999999")); //true
