<?php

namespace App\Services\FactoryPattern\Factories;

use App\Services\FactoryPattern\FileParsers\CsvParser;
use App\Services\FactoryPattern\FileParsers\JsonParser;
use App\Services\FactoryPattern\FileParsers\XmlParser;
use App\Services\FactoryPattern\FileParsers\FileParserInterface;

class FileParserFactory
{
    public static function create(string $fileType): FileParserInterface
    {
        return match (strtolower($fileType)) {
            'csv' => new CsvParser(),
            'json' => new JsonParser(),
            'xml' => new XmlParser(),
            default => throw new \InvalidArgumentException("Unsupported file type [$fileType]."),
        };
    }
}
