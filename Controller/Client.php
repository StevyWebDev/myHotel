<?php

namespace Controller;

use Manager\Client as ManagerClient;
use Model\Client as ModelClient;

class Client 
{
    public function newClient(ManagerClient $manager) 
    {
        if(isset($_POST['name']) && isset($_POST['email']) && !empty($_POST['name']) && !empty($_POST['email'])) {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);

            $insertClient = new ModelClient();
            $insertClient->setEmail($email);
            $insertClient->setName($name);

            $manager->push($name, $email);
        }
    }
}