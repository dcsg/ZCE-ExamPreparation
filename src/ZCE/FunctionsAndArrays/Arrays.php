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
 * Arrays examples and practices
 */
class Arrays
{
    function __construct()
    {
        $arrayOne = array(
            "php",
            0 => "zce",
            1 => "zend",
            5 => "symfony2",
            3 => "drupal",
            "wordpress",
            10,
            9 => "javascript"
        );
        $arrayTwo = array(
            "mysql",
            1,
            10 => "NoSQL",
            2,
            3 => "MongoDB",
            2 => "Doctrine",
            "ORM",
            9 => "redis",
            5
        );
        var_dump($arrayOne);
        var_dump($arrayTwo);
    }
}

new Arrays();