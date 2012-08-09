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
    static $ARRAY_ONE = array(
        'a' => 'Portugal',
        'b' => 'Spain'
    );
    static $ARRAY_TWO = array(
        'a' => 'Lisbon',
        'c' => 'Barcelona',
        'Faro'
    );


    function __construct()
    {
        //order by keys
        $data = BasicArray::$ARRAY_ONE;
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

$a = 'foo';
echo $a['bar']."\n"; // since 'bar' doesn't exist it will assume 0 and will output the first char 'f' of $a


//Exercise 1
$arr1 = array_diff(BasicArray::$ARRAY_ONE, BasicArray::$ARRAY_TWO);
$arr2 = array_diff(BasicArray::$ARRAY_TWO, BasicArray::$ARRAY_ONE);

$keys = array_keys($arr2);

echo count($arr1) . ' - ' . $keys[0] ."\n";


