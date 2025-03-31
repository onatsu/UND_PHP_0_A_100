<?php
namespace App;
use App\CSVDataReader;
use App\DataFilterByBirthday;

class SendBirthdayGreetingsToUsersUseCase
{
    private $clientProvider;
    private $filterByDate;

    public function __construct(CSVDataReader $clientProvider, DataFilterByBirthday $filterByDate){
        $this->clientProvider = $clientProvider;
        $this->filterByDate = $filterByDate;
    }

    public function execute()
    {
        $data=$this->clientProvider->getData();

        print_r($this->filterByDate->filter($data));
    }
}