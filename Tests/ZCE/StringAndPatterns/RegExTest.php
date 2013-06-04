<?php

/**
 * This file is part of the ZCE Preparation Exam package.
 *
 * (c) Daniel Gomes <me@danielcsgomes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\ZCE\StringAndPatterns;

use ZCE\StringsAndPatterns\RegEx;

/**
 * Tests for Regular Expressions
 *
 * @author Daniel Gomes <me@danielcsgomes.com>
 */
class RegExTest extends \PHPUnit_Framework_TestCase
{
    public function testCellphone ()
    {
        $regEx = new RegEx();
        $cellphone = "910000000";
        $this->assertTrue($regEx->matchStringAndPattern(RegEx::$cellphone, $cellphone));
        $cellphone = "+351930000000";
        $this->assertTrue($regEx->matchStringAndPattern(RegEx::$cellphone, $cellphone));
        $cellphone = "00351930000000";
        $this->assertTrue($regEx->matchStringAndPattern(RegEx::$cellphone, $cellphone));
        $cellphone = "35193000000";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$cellphone, $cellphone));
        $cellphone = "3519300000";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$cellphone, $cellphone));
        $cellphone = "3193000000";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$cellphone, $cellphone));
    }

    public function testCanadianPostalCode ()
    {
        $regEx = new RegEx();
        $postal_code = "G0S1V0";
        $this->assertTrue($regEx->matchStringAndPattern(RegEx::$postal_code_canada, $postal_code), 'Testing Canadian Postal Code"'.$postal_code.'", and should be valid');
        $postal_code_space = "G0S 1V0";
        $this->assertTrue($regEx->matchStringAndPattern(RegEx::$postal_code_canada, $postal_code_space), 'Testing Canadian Postal Code"'.$postal_code_space.'" (with a space), and should be valid');
    }

    public function testZipCode ()
    {
        $regEx = new RegEx();
        $zip_code = "2000";
        $this->assertTrue($regEx->matchStringAndPattern(RegEx::$zip_code, $zip_code));
        $zip_code = "2000-100";
        $this->assertTrue($regEx->matchStringAndPattern(RegEx::$zip_code, $zip_code));
        $zip_code = "295";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$zip_code, $zip_code));
        $zip_code = "1000-00";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$zip_code, $zip_code));
        $zip_code = "2000-00";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$zip_code, $zip_code));
        $zip_code = "200-000";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$zip_code, $zip_code));
        $zip_code = "2000 000";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$zip_code, $zip_code));
    }

    public function testEmail ()
    {
        $regEx = new RegEx();
        $email = "me@danielcsgomes.com";
        $this->assertTrue($regEx->matchStringAndPattern(RegEx::$email, $email));
        $email = "danielcsgomes.com";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$email, $email));
        $email = "me@danielcsgomes.c";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$email, $email));
        $email = "m@danielcsgomes.com";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$email, $email));
        $email = "me@d.com";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$email, $email));
    }

    public function testPhone ()
    {
        $regEx = new RegEx();
        $phone = "210000000";
        $this->assertTrue($regEx->matchStringAndPattern(RegEx::$phone, $phone));
        $phone = "+351230000000";
        $this->assertTrue($regEx->matchStringAndPattern(RegEx::$phone, $phone));
        $phone = "00351230000000";
        $this->assertTrue($regEx->matchStringAndPattern(RegEx::$phone, $phone));
        $phone = "35123000000";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$phone, $phone));
        $phone = "3512300000";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$phone, $phone));
        $phone = "3123000000";
        $this->assertFalse($regEx->matchStringAndPattern(RegEx::$phone, $phone));
    }

}
