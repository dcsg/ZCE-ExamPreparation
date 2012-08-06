<?php

/**
 * This file is part of the ZCE - Exam Preparation package.
 *
 * (c) Daniel Gomes <me@danielcsgomes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$numA = 12;
$numB = 4;


//Bitwise Operators
printf("%d (%b) = (%b << %b)\n", 2 << 2, 2 << 2, 2, 2); // 8 (1000) = (10 << 10)
printf("%d (%b) = (%b ^ %b)\n", $numA ^ $numB,$numA ^ $numB,$numA,$numB); // 8 (1000) = (1100 ^ 100)
printf("%d (%b) = (%b | %b)\n", $numA | $numB,$numA | $numB,$numA,$numB); // 12 (1100) = (1100 | 100)
printf("%d (%b) = (%b & %b)\n", $numA & $numB,$numA & $numB,$numA,$numB); //4 (100) = (1100 & 100)
printf("%d (%b) = (%b >> %b)\n", 16 >> 2, 16 >> 2, 16, 2); // 4 (100) = (10000 >> 10)

// Incrementing / Decrementing Operators
$test = $numA++; printf("\$test = %d , \$numA = %d \n", $test, $numA);
$test = ++$numB; printf("\$test = %d , \$numA = %d \n", $test, $numB);
$test = $numA--; printf("\$test = %d , \$numA = %d \n", $test, $numA);
$test = --$numB; printf("\$test = %d , \$numA = %d \n", $test, $numB);

// Hexadecimal math
$calc = 0xAF * 2; printf("(int) 0xAF = %d , \$calc=%d", 0xAF, $calc);
