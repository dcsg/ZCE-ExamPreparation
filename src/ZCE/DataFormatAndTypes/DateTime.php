<?php

/**
 * This file is part of the ZCE - Exam Preparation package.
 *
 * (c) Daniel Gomes <me@danielcsgomes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ZCE\DataFormatAndTypes;

/**
 * DateTime functions and operations
 *
 * @author Daniel Gomes <me@danielcsgomes.com>
 */
class DateTime
{
    static $DATE_STRING         = "01/05/2012";
    static $SHORT_DATE_FORMAT   = "d/m/Y";
    static $LONG_DATE_FORMAT    = "l, j F Y";
    static $TIME_STRING_24H     = "13:20";
    static $TIME_STRING_12H     = "1:20 am";
    static $TIME_FORMAT_24H     = "H:i";
    static $TIME_FORMAT_12H     = "h:i a";
}

date_default_timezone_set('Europe/Lisbon'); //sets the default timezone (should be done in php.ini date.timezon)

echo date(DateTime::$LONG_DATE_FORMAT, time())."\n"; //current date
echo date(DateTime::$LONG_DATE_FORMAT, strtotime(DateTime::$DATE_STRING))."\n"; // Thursday, 5 January 2012
print_r(getdate(strtotime(DateTime::$DATE_STRING))); // returns an array with the date values
echo date( DateTime::$SHORT_DATE_FORMAT . ' ' . DateTime::$TIME_FORMAT_24H,  gmmktime(0,0,0,5,15,2012))."\n";

echo gmdate(DateTime::$SHORT_DATE_FORMAT, gmmktime());
print_r(localtime(time(), true));



