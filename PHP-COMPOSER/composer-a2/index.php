<?php

require 'vendor/autoload.php';

use Humble23\CartolaFcClient\CartolaClient;

$client = new CartolaClient();
$response = $client->market()->status();

