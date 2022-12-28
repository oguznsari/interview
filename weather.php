<?php
require 'database.php';
require 'functions.php';
$functions = new functions();
$config = require('config.php');

$index = require('index.html');

$db = new Database($config['database'], 'root', 'NewPassword');
$weather = $db->query("SELECT * FROM weather")->fetchAll();
$availableCities = $db->query("SELECT city FROM weather")->fetchAll(PDO::FETCH_COLUMN);

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $response = '';
    $errors = [];

    $matchedCity = [];
    if ($_GET) {
        $cities = explode(',', $_GET['city']);
        $matches = $functions->matchArrays($cities, $availableCities);
    }

    $query = "SELECT * FROM weather WHERE city IN ('"
        . implode("','", $matches)
        . "')";
    $weatherConditions = $db->query($query)->fetchAll();

    foreach ($weatherConditions as $weather) {
        $response .= '<br>';
        $response .= '<div align="center">';
        $response .= '<div class="city">' . 'City: ' . $weather['city'] . '</div>';
        $response .= '<div class="degrees">' . '<i class="bi bi-thermometer-half"></i>' .  'degrees(°C): ' . $weather['degrees'] . '</div>';
        $response .= '<div class="precipitation">' . 'precipitation: ' . $weather['precipitation'] . '</div>';
        $response .= '<div class="humidity">' . 'humidity: ' . $weather['humidity'] . '</div>';
        $response .= '<div class="wind">' . 'wind: ' . $weather['wind'] . '</div>';
        $response .= '</div>';
    }

    echo $response;
}
