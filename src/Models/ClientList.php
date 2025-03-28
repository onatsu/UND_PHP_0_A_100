<?php
namespace App\Models;

class ClientList{
    private array $clients;

    public function add(Client $client)
    {
        $this->clients[] = $client;
    }
    
    public function getClients()
    {
        return $this->clients;
    }
}