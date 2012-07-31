<?php
/**
 * This file is part of the ZCE - Exam Preparation package.
 *
 * (c) Daniel Gomes <me@danielcsgomes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ZCE\FunctionsAndArrays;

class BasicArray
{
    function __construct()
    {
        $data = array(
            0 => 1,
            3 => 2,
            5 => 3,
            2 => 5,
            1 => 4
        );

        //order by keys
        ksort($data);
        $keysOrder = $data;

        //order by values
        asort($data);
        $valuesOrder = $data;

        var_dump($keysOrder);
        var_dump($valuesOrder);
    }
}

new BasicArray();
