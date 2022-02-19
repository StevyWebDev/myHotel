<?php
require_once('./vendor/autoload.php');

use Manager\Client as ManagerClient;
use Model\Client;

$client = new Client();
$client->setName("Steven");
$client->setEmail("vergueiro.steven@gmail.com");

$insertClient = new ManagerClient();
$insertClient->push($client->getName(), $client->getEmail());

