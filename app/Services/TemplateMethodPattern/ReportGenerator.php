<?php

namespace App\Services\TemplateMethodPattern;

abstract class ReportGenerator
{
    // Template method: Defines the skeleton of the report generation process
    public function generateReport(): void
    {
        $data = $this->fetchData();
        $formattedData = $this->formatData($data);
        $this->saveReport($formattedData);
    }

    // Concrete method: Common to all subclasses
    protected function fetchData(): array
    {
        // Simulate fetching data (e.g., from a database)
        return [
            ['name' => 'John Doe', 'sales' => 100],
            ['name' => 'Jane Smith', 'sales' => 200],
        ];
    }

    // Abstract methods: To be implemented by subclasses
    abstract protected function formatData(array $data): string;

    abstract protected function saveReport(string $formattedData): void;
}
