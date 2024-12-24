<?php

namespace App\Services\TemplateMethodPattern;

class ExcelReportGenerator extends ReportGenerator
{
    protected function formatData(array $data): string
    {
        // Simulate formatting data as an Excel file
        return "Excel Report: " . json_encode($data);
    }

    protected function saveReport(string $formattedData): void
    {
        // Simulate saving an Excel file
        file_put_contents('report.xlsx', $formattedData);
        echo "Excel report saved as report.xlsx\n";
    }
}
