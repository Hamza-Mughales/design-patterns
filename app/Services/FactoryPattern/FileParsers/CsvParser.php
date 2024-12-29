<?php

namespace App\Services\FactoryPattern\FileParsers;

use SplFileObject;

class CsvParser implements FileParserInterface
{
    public function parse(string $filePath): array
    {
        $data = [];
        $file = new SplFileObject($filePath);

        while (!$file->eof()) {
            $data[] = $file->fgetcsv();
        }

        return $data;
    }
}
