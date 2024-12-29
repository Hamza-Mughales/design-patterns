<?php

namespace App\Services\FactoryPattern\FileParsers;

class JsonParser implements FileParserInterface
{
    public function parse(string $filePath): array
    {
        $content = file_get_contents($filePath);
        return json_decode($content, true);
    }
}
