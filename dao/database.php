<?php

class Database
{
    public $connection;

    public function __construct($config, $username = 'root', $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    /**
     * Function to execute db query
     *
     * @param string $query
     *
     * @return false|PDOStatement
     */
    public function query(string $query)
    {
        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }

    /**
     * Function that retrieves weather conditions from database for the cities
     *
     * @param array $matches
     *
     * @return array|false
     */
    public function getWeatherConditions(array $matches)
    {
        $query = "SELECT * FROM weather WHERE city IN ('"
            . implode("','", $matches)
            . "')";

        return $this->query($query)->fetchAll();
    }

    /**
     * Function that retrieves all city names available in out database
     *
     * @return array|false
     */
    public function getAllCities()
    {
        $query = "SELECT city FROM weather";

        return $this->query($query)->fetchAll(PDO::FETCH_COLUMN);
    }
}

?>
