<?php

namespace App\Services\SingletonPattern;

use PDO;

class Database
{
    private static ?Database $instance = null;
    private PDO $connection;

    // Private constructor to initialize the database connection
    private function __construct()
    {
        $dsn = 'mysql:host=localhost;dbname=my_database';
        $username = 'root';
        $password = '';

        $this->connection = new PDO($dsn, $username, $password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Static method to get the single instance
    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }

        return self::$instance;
    }

    // Getter for the PDO connection
    public function getConnection(): PDO
    {
        return $this->connection;
    }

    // Prevent cloning
    private function __clone()
    {}

    // Prevent unserialization
    private function __wakeup()
    {}
}
