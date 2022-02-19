<?php
namespace Manager;

class Client {

    protected $pdo;

    public function __construct()
    {
        $this->pdo = \Manager\Database::pdo();
    }

    public function push(string $name, string $email)
    {
        $insertClient = $this->pdo->prepare('INSERT INTO client(name, email) VALUES(?, ?)');
        $insertClient->execute(array($name, $email));
    }

    
}