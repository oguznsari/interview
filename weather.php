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
        $response .= '<div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                          <div class="col-md-8 col-lg-6 col-xl-4">
                            <div class="card" style="color: #4B515D; border-radius: 35px;">
                              <div class="card-body p-4">
                                
                                <div class="d-flex">
                                  <h6 class="flex-grow-1">' . $weather['city'] . '</h6>
                                  <h6>' . date("H:i", time()) . ' UTC</h6>
                                </div>
                                
                                <div class="d-flex flex-column text-center mt-5 mb-4">
                                  <h6 class="display-4 mb-0 font-weight-bold" style="color: #1C2331;">' . $weather['degrees'] . '°C </h6>
                                </div>
                                
                                <div class="d-flex align-items-center">
                                  <div class="flex-grow-1" style="font-size: 1rem;">
                                    <div>
                                       <i class="fas fa-wind fa-fw" style="color: #868B94;"></i> 
                                       <span class="ms-1"> ' . $weather['wind'] . ' km/h</span>
                                    </div>
                                    <div>
                                      <i class="fas fa-tint fa-fw" style="color: #868B94;"></i> 
                                      <span class="ms-1"> ' . $weather['precipitation'] . ' % </span>
                                    </div>
                                    <div>
                                      <i class="fas fa-tint fa-fw" style="color: #868B94;"></i> 
                                      <span class="ms-1"> ' . $weather['humidity'] . ' % </span>
                                    </div>

                                    <div>
                                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-weather/ilu1.webp" width="100px">
                                    </div>
                                  </div>
                                </div>
                                  
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>';
    }

    echo $response;
}
