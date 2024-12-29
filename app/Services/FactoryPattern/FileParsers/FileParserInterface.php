<?php

namespace App\Services\FactoryPattern\FileParsers;

interface FileParserInterface
{
    public function parse(string $filePath): array;
}
