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


//Array Diff #1
$arr1 = array_diff(BasicArray::$ARRAY_ONE, BasicArray::$ARRAY_TWO);
$arr2 = array_diff(BasicArray::$ARRAY_TWO, BasicArray::$ARRAY_ONE);

$keys = array_keys($arr2);

echo count($arr1) . ' - ' . $keys[0] ."\n";

//Array Filter
$array = array(
    NULL,
    0,
    '0',
    '',
    -1,
    'HelloWorld'

);

print_r(count(array_filter($array)) . PHP_EOL);      // output: 2


// iteration functions
reset(BasicArray::$ARRAY_TWO);                       // pointer to the begin of the array
print_r(next(BasicArray::$ARRAY_TWO) . PHP_EOL);     // Output: Barcelona
print_r(current(BasicArray::$ARRAY_TWO) . PHP_EOL);  // Output: Barcelona
print_r(prev(BasicArray::$ARRAY_TWO) . PHP_EOL);     // Output: Lisbon
print_r(end(BasicArray::$ARRAY_TWO) . PHP_EOL);      // Output: Faro

foreach(BasicArray::$ARRAY_TWO as $k => $v)
{
    echo $v;                                         //Output: LisbonBarcelonaFaro
}
echo PHP_EOL;

reset(BasicArray::$ARRAY_TWO);
while(next(BasicArray::$ARRAY_TWO))
{
    echo current(BasicArray::$ARRAY_TWO);            //Output: BarcelonaFaro
}
echo PHP_EOL;
