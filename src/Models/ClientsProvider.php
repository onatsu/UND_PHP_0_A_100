<?php
namespace App\Models;
use App\Models\ClientList;

interface ClientsProvider
{
    public function getData():ClientList;
}
