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
 * JSon Class
 *
 * @author Daniel Gomes <me@danielcsgomes.com>
 */
class JSon
{
    static $data = array(
        "John" => array(
            "Age"     => 23,
            "Married"    => true,
            "Children"    => false
            ),
        "Maria" => array(
                "Age"     => 35,
                "Married"    => true,
                "Children"    => true
                ),
    );

    private $encodedData;
    private $decodedData;

    /**
     * @param array|null $data
     * @return bool
     */
    public function encode(array $data = null)
    {
        if(is_null($data))
            $data = JSon::$data;
        $this->encodedData = json_encode($data);
        if(is_string($this->encodedData) && $this->encodedData != "[]" )
            return true;
        else
            return false;
    }

    /**
     * @param string $encoded
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     * @return bool
     */
    public function decode($encoded = null, $assoc = false, $depth = 512)
    {
        if(is_null($encoded) && is_null($this->encodedData) )
            return false;
        else
        {
            if(is_null($encoded))
                $encoded = $this->encodedData;

            $this->decodedData = json_decode($encoded, $assoc, $depth);
            if(is_array($this->decodedData) && !empty($this->decodedData) || $this->decodedData instanceof \stdClass)
                return true;
            else
                return false;
        }

    }

    /**
     * @return array
     */
    public function getDecodedData()
    {
        return $this->decodedData;
    }

    /**
     * @return string
     */
    public function getEncodedData()
    {
        return $this->encodedData;
    }
}