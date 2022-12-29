<?php

class Database {
    public $connection;

    public function __construct($config, $username = 'root', $password = '')
    {


        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query) {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }

    public function getWeatherConditions($matches) {
        $query = "SELECT * FROM weather WHERE city IN ('"
            . implode("','", $matches)
            . "')";

        return $this->query($query)->fetchAll();
    }

    public function getAllCities() {
        $query = "SELECT city FROM weather";

        return $this->query($query)->fetchAll(PDO::FETCH_COLUMN);
    }
}

?>
