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
    static $zip_code = '/\d{4}-\d{3}|^\d{4}$/m';
    static $email = '/[a-zA-Z0-9._]{2,}@[a-zA-Z0-9]{2,}\.[a-zA-Z]{2,4}/';
    static $phone = '/(00351|\+351)2\d{8}|^(2\d{8})$/m';
    static $cellphone = '/(00351|\+351)9\d{8}|^(9\d{8})$/m';

    public function matchStringAndPattern($pattern, $string)
    {
        if(preg_match($pattern, $string))
            return true;
        else
            return false;

    }
}
