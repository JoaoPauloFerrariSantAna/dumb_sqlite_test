<?php

class Database
{
    private string $databaseName;

    public function __construct(string $databaseName)
    {
        $this->databaseName = $databaseName;
    }

    private function openDatabaseConnection(): PDO
    {
        $connnection = new PDO("sqlite:./" . $this->databaseName);
        return $connnection;
    }

    private function createTables(): void
    {
        $connnection = $this->openDatabaseConnection();

        $connnection->exec(
            "CREATE TABLE IF NOT EXISTS user_tbl(username VARCHAR(16))"
        );
    }

    public function insert(string $data): void
    {
        $this->createTables();

        $connnection = $this->openDatabaseConnection(); 
        $sql_query = "INSERT INTO $data";

        $connnection->exec($sql_query);
    }

    public function select(string $data)
    {
        $connnection = $this->openDatabaseConnection();
        $sql_query = "SELECT $data";
        $result = $connnection->query($sql_query);

        return $result->fetch(PDO::FETCH_ASSOC);
    }
}

