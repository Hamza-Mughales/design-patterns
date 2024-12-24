<?php

namespace App\Services\TemplateMethodPattern;

class CsvReportGenerator extends ReportGenerator
{
    protected function formatData(array $data): string
    {
        // Simulate formatting data as CSV
        $csv = "Name,Sales\n";
        foreach ($data as $row) {
            $csv .= "{$row['name']},{$row['sales']}\n";
        }
        return $csv;
    }

    protected function saveReport(string $formattedData): void
    {
        // Simulate saving a CSV file
        file_put_contents('report.csv', $formattedData);
        echo "CSV report saved as report.csv\n";
    }
}
