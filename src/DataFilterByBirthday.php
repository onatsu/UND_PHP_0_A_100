<?php
namespace App;

use App\Models\ClientList;
use App\Models\Date;

class DataFilterByBirthday{

    private Date $today;

    public function __construct(Date $today)
    {
        $this->today = $today;
    }

    public function filter(ClientList $data): ClientList{
        $clientListFiltered = new ClientList();
        
        foreach ($data->getClients() as $client)
        {
            if ($this->today->compare($client->getDateOfBirth())){
                $clientListFiltered->add($client);
            }
        }

        return $clientListFiltered;
    }

}
