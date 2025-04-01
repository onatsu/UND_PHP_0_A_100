<?php
namespace App;

use App\Models\Client;
use App\Models\ClientList;
use App\Models\ClientsProvider;
use PDO;

class MysqlClientsProvider implements ClientsProvider
{
    private PDO $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getData(): Models\ClientList
    {
        $clientList = new ClientList();
        $query = $this->pdo->query("SELECT first_name, last_name, birth_day, email FROM clients;");
        while($row = $query->fetch(PDO::FETCH_ASSOC))
        {
            $clientList->add(new Client($row["first_name"], $row["last_name"], $row["birth_day"], $row["email"]));
        }
        return $clientList;
    }
}