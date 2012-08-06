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
<?xml version="1.0" standalone="yes"?>
<a xmlns:p="http://example.org/ns" xmlns:t="http://example.org/test">
    <p:b>
        <c>text</c>
        <c>stuff</c>
    </p:b>
    <d xmlns:s="http://example.org/ns">
        <c>code</c>
    </d>
</a>
XML;

    static $ANOTHER_XML_STRING = <<<XML
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
        $dom->loadXML(XMLBasics::$ANOTHER_XML_STRING);
        return $dom;
    }

    public function getSimpleXMLIterator()
    {
        return new \SimpleXMLIterator(XMLBasics::$XML_STRING);
    }


}

/**
 * ##########################################################
 * ################    SimpleXML     ########################
 * ##########################################################
 */

// ============== using xpath to search inside the xml content
$xmlBasic = new XMLBasics();
$simpleXML= $xmlBasic->getSimpleXML();
$result = $simpleXML->xpath('/a/p:b/c'); //Search for <a><p:b><c>
printf($result[0] . " and " . $result[1] . "\n"); //Prints: text and stuff

// ============== get the tag name
printf("tag name: " . $simpleXML->getName() . "\n"); //prints "a"

$simpleXMLIterator = $xmlBasic->getSimpleXMLIterator();
printf("children tag name: " . $simpleXMLIterator->children()->getName() . "\n"); //prints the children tag name

// ============== get the namespaces

//Gets the namespaces used in the document
$nsUsed = $simpleXML->getNamespaces(true);
printf("namespaces used: " . $nsUsed['p'] ."\n total used: " . count($nsUsed) . "\n");

//gets the namespaces declared in the root tag of the document
$nsDoc = $simpleXML->getDocNamespaces();
printf("namespaces declared: " . $nsDoc['p'] ." ". $nsDoc['t'] ."\n total declared: " . count
($nsDoc) ."\n");

//gets the namespaces declared in all elements of the document
$nsDoc = $simpleXML->getDocNamespaces(true);
printf("namespaces declared all elements: ");
foreach($nsDoc as $elem)
{
    echo $elem ." ";
}
printf("\n total declared all elements: " .
    count
($nsDoc) ."\n");

// ============== simplexml_import_dom function
$domString = $xmlBasic->getDOMDocumentString();
$simpleXML = simplexml_import_dom($domString);
printf("Book title: " . $simpleXML->book[0]->title . "\n");

// ============== simplexml_load_file function
$simpleXML = simplexml_load_file("../../../Resources/example.xml");
printf("Movie title: " . $simpleXML->movie[0]->title . "\n");

// ============== Add Attribute and asXML()
$movieTitle = $simpleXML->movie[0]->title;
$movieTitle->addAttribute('stars', '3');
echo $simpleXML->asXML(); // output: ... <title stars="3" >PHP: Behind the Parser</title> ...


/**
 * @TODO: dom->document_element(), xml_set_element_handler, xml_set_object,
 * xml_parse_into_struct, xml_parser_create_ns
 */

