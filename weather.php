<?php
require 'database.php';

$config = require('config.php');

$db = new Database($config['database'], 'root', 'root');
$weat = $db->query("SELECT * FROM weather")->fetchAll();
echo json_encode($weat);
