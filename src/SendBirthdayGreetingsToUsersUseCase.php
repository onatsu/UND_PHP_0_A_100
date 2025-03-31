<?php
namespace App;
use App\CSVDataReader;
use App\DataFilterByBirthday;

class SendBirthdayGreetingsToUsersUseCase
{
    private $clientProvider;
    private $filter;

    public function __construct(CSVDataReader $clientProvider, DataFilterByBirthday $filter){
        $this->clientProvider = $clientProvider;
        $this->filter = $filter;
    }

    public function execute()
    {
        $data=$this->clientProvider->getData();

        print_r($this->filter->filter($data));
    }
}