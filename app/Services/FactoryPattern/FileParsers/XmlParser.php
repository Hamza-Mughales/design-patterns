<?php

namespace App\Services\FactoryPattern\FileParsers;

use SimpleXMLElement;

class XmlParser implements FileParserInterface
{
    public function parse(string $filePath): array
    {
        $content = file_get_contents($filePath);
        $xml = new SimpleXMLElement($content);

        return json_decode(json_encode($xml), true);
    }
}
