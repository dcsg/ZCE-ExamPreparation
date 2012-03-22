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

use ZCE\StringsAndPatterns\JSon;

/**
 * Tests for JSon class
 *
 * @author Daniel Gomes <me@danielcsgomes.com>
 */
class JSonTest extends \PHPUnit_Framework_TestCase
{
    public function testDefaultEncodeData ()
    {
        $json = new JSon();

        $json->encode(array());
        $this->assertTrue($json->encode());

        $json->encode();
        $this->assertInternalType('string', $json->getEncodedData());


        return $json;
    }

    /**
     * @depends testDefaultEncodeData
     */
    public function testDefaultDecodeData (JSon $json)
    {
        $json->decode(null, true);
        $this->assertInternalType('array', $json->getDecodedData());

        $this->assertFalse($json->decode("", true));

    }
}
