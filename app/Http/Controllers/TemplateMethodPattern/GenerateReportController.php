<?php

namespace App\Http\Controllers\TemplateMethodPattern;

use App\Http\Controllers\Controller;
use App\Services\TemplateMethodPattern\CsvReportGenerator;
use App\Services\TemplateMethodPattern\ExcelReportGenerator;
use App\Services\TemplateMethodPattern\PdfReportGenerator;

class GenerateReportController extends Controller
{
    protected $signature = 'report:generate {type}';
    protected $description = 'Generate a report of the specified type (pdf, csv, excel)';

    public function generateReport()
    {
        $type = request('type') ?? 'pdf';

        $reportGenerator = null;

        switch ($type) {
            case 'pdf':
                $reportGenerator = new PdfReportGenerator();
                break;
            case 'csv':
                $reportGenerator = new CsvReportGenerator();
                break;
            case 'excel':
                $reportGenerator = new ExcelReportGenerator();
                break;
            default:
                return response()->json(['error' => 'Invalid report type.'], 400);
        }

        // dd($reportGenerator);
        $reportGenerator->generateReport();

        return response()->json(["{$type} report generated successfully."]);
    }
}
