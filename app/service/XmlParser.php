<?php

/*
 * egyszerü xml feldolgozó
 */

class XmlParser {

    public $productXml;
    public $xmlData;

    public function __construct($xml)
    {
        $this->productXml = $xml;
    }

    public function loadXmlData()
    {
        $this->xmlData = simplexml_load_string(file_get_contents($this->productXml)) or die("Error: Cannot create object");
        return $this->xmlData;
    }
}