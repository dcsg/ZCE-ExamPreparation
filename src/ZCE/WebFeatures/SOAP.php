<?php

/**
 * This file is part of the ZCE - Exam Preparation package.
 *
 * (c) Daniel Gomes <me@danielcsgomes.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace ZCE\WebFeatures;

/**
 * SOAP example
 *
 * @author Daniel Gomes <me@danielcsgomes.com>
 */
class SOAP
{
    static $URL_SOCCER      = 'http://footballpool.dataaccess.eu/data/info.wso?WSDL';
    static $URL_COUNTRIES   = 'http://www.mobilefish.com/services/web_service/countries.php?wsdl';
    private $client         = array();
    private $countries      = array();

    public function GetPortugalGoalkeepersName()
    {
        $this->client['soccer'] = new \SoapClient(self::$URL_SOCCER);
        print_r($this->client['soccer']->AllGoalKeepers(array('sCountryName' => 'Portugal')));
    }

    public function GetAllCountries()
    {
        $this->client['countries'] = new \SoapClient(self::$URL_COUNTRIES);
        $result = $this->client['countries']->getIANAInfo();
        foreach($result as $key => $value)
        {
            $this->countries[$value[0]] = $value[1];
        }
    }

    public function GetCountryInfo($ianaCode = null)
    {
        if(!is_array($this->client['countries']))
            $this->GetAllCountries();

        if(!is_null($ianaCode) && array_key_exists($ianaCode, $this->countries))
        {
            return $this->client['countries']->countryInfoByIana($ianaCode);
        }
        else
        {
            print_r("This '".$ianaCode."' is not a valid ianacode.\n");
        }
    }
}

$client = new SOAP();
$client->GetPortugalGoalkeepersName();
$client->GetAllCountries();
print_r($client->GetCountryInfo('pt'));
print_r($client->GetCountryInfo('en'));
print_r($client->GetCountryInfo('uk'));
