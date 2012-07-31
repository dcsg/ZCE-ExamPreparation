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
 * XML Basics, SimpleXML, XML Extension, XPath
 *
 * @author Daniel Gomes <me@danielcsgomes.com>
 */
class XMLBasics
{
    static $XML_STRING = <<<XML
    <a>
     <b>
      <c>text</c>
      <c>stuff</c>
     </b>
     <d>
      <c>code</c>
     </d>
    </a>
XML;

    static $DOM_STRING = <<<XML
    <books>
        <book>
            <title>blah</title>
        </book>
    </books>
XML;


    /**
     *
     * @return \SimpleXMLElement
     */
    public function getSimpleXML()
    {
        return new \SimpleXMLElement(XMLBasics::$XML_STRING);
    }

    /**
     * @return \DOMDocument
     */
    public function getDOMDocumentString()
    {
        $dom = new \DOMDocument();
        $dom->loadXML(XMLBasics::$DOM_STRING);
        return $dom;
    }

    public function getSimpleXMLIterator()
    {
        return new \SimpleXMLIterator(XMLBasics::$XML_STRING);
    }


}

/**
 * SimpleXML Element
 */
// ============== using xpath to search inside the xml content
$xmlBasic = new XMLBasics();
$simpleXML= $xmlBasic->getSimpleXML();
$result = $simpleXML->xpath('/a/b/c'); //Search for <a><b><c>
printf($result[0] . " and " . $result[1] . "\n"); //Prints: text and stuff

// ============== get the tag name
printf("tag name: " . $simpleXML->getName() . "\n"); //prints "a"

$simpleXML = $xmlBasic->getSimpleXMLIterator();
printf("children tag name: " . $simpleXML->children()->getName() . "\n"); //prints the children tag name



/**
 * SimpleXML Functions
 */
// simplexml_import_dom
$domString = $xmlBasic->getDOMDocumentString();
$simpleXML = simplexml_import_dom($domString);
printf("Book title: " . $simpleXML->book[0]->title);


