<?php
namespace App;

use App\Models\ClientList;
use App\Models\ClientsProvider;

class MysqlClientsProvider implements ClientsProvider
{
    public function getData(): Models\ClientList
    {
        return new ClientList();
    }
}