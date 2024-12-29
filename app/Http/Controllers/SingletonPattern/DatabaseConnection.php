<?php

namespace App\Http\Controllers\SingletonPattern;

use App\Http\Controllers\Controller;
use App\Services\SingletonPattern\Database;
use PDO;

class DatabaseConnection extends Controller
{
    public function index()
    {
        // Get the singleton instance
        $db = Database::getInstance();

        // Use the PDO connection
        $connection = $db->getConnection();

        // Example query
        $stmt = $connection->query("SELECT * FROM users");
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

        print_r($users);
    }
}
