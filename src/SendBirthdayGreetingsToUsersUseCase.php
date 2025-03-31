<?php
namespace App;
use App\Models\ClientsProvider;
use App\DataFilterByBirthday;

class SendBirthdayGreetingsToUsersUseCase
{
    private $clientsProvider;
    private $filterByDate;

    public function __construct(ClientsProvider $clientsProvider, DataFilterByBirthday $filterByDate){
        $this->clientsProvider = $clientsProvider;
        $this->filterByDate = $filterByDate;
    }

    public function execute()
    {
        $data=$this->clientsProvider->getData();

        print_r($this->filterByDate->filter($data));
    }
}