<?php

require '../dao/database.php';
require '../utilities/functions.php';
$functions = new functions();
$config = require('../utilities/config.php');

$card = require('../views/weatherCard.php');
$index = require('../index.html');

$db = new Database($config['database'], 'root', 'NewPassword');

$availableCities = $db->getAllCities();

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    $response = '';
    $errors = [];

    $matchedCity = [];
    if ($_GET) {
        $cities = explode(',', $_GET['city']);
        $matches = $functions->matchArrays($cities, $availableCities);
    }

    $weatherConditions = $db->getWeatherConditions($matches);

    $response .= '<div class="row g-3 justify-content-center">';
    foreach ($weatherConditions as $weather) {
        $weather['date'] = date("H:i", time());
        $weather['bgcolor'] = $config['weather-icons'][$weather['status']]['background'];
        $weather['status'] = $config['weather-icons'][$weather['status']]['icon'];
        $response .= $functions->templateSubstitution($card, $weather);
    }
    $response .= '</div>';

    echo $response;
}
