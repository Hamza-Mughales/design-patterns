<?php

namespace App\Http\Controllers\FactoryPattern;

use App\Http\Controllers\Controller;
use App\Services\FactoryPattern\Factories\FileParserFactory;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function uploadFile(Request $request)
    {
        $file = $request->file('file'); // e.g., uploaded file
        $fileType = $file->getClientOriginalExtension(); // e.g., csv, json, xml

        try {
            $parser = FileParserFactory::create($fileType);
            $data = $parser->parse($file->getRealPath());

            return response()->json([
                'success' => true,
                'data' => $data,
            ]);
        } catch (\InvalidArgumentException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 400);
        }
    }
}
