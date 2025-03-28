<?php
namespace App;

use App\Models\ClientList;

class DataFilterByBirthday{

    public function filter(ClientList $data): ClientList{
        $clientListFiltered = new ClientList();

        $today = new \DateTime("1982/10/08");
    
        
        foreach ($data->getClients() as $client)
        {

            if ($client->getDateOfBirth()->format("m-d") == $today->format("m-d")){
                $clientListFiltered->add($client);
            }
        }

        return $clientListFiltered;
    }

}
