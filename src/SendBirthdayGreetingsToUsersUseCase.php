<?php
namespace App;
use App\CSVDataReader;
use App\DataFilterByBirthday;

class SendBirthdayGreetingsToUsersUseCase
{
    private $csvfile;
    private $filter;

    public function __construct(CSVDataReader $csvfile, DataFilterByBirthday $filter){
        $this->csvfile = $csvfile;
        $this->filter = $filter;
    }

    public function execute()
    {
        $data=$this->csvfile->getData();

        print_r($this->filter->filter($data));
    }
}