<?php

namespace App\Services\TemplateMethodPattern;

class PdfReportGenerator extends ReportGenerator
{
    protected function formatData(array $data): string
    {
        // Simulate formatting data as a PDF
        return "PDF Report: " . json_encode($data);
    }

    protected function saveReport(string $formattedData): void
    {
        // Simulate saving a PDF file
        file_put_contents('report.pdf', $formattedData);
        echo "PDF report saved as report.pdf\n";
    }
}
