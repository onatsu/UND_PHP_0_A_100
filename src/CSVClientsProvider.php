<?php
namespace App;

use App\Models\ClientList;
use App\Models\Client;
use App\Models\ClientsProvider;

class CSVClientsProvider implements ClientsProvider{
    private ClientList $data;
    private $handle;
    
    public function __construct(string $fileName){
        if (!file_exists($fileName))
        { 
            throw new \Exception("Archivo no encontrado", 1);
            //TODO: crear nuestra propia excepción
            
        }
        $this->data = new ClientList();
        $this->handle = fopen($fileName, 'r');
    }


    private function read(){
        $headers = fgetcsv($this->handle);
        while (($row = fgetcsv($this->handle)) !== false) {
            //TODO: crear clase que valide la fecha
            //$this->data[]=array_combine($headers, $row);
            $this->data->add(new Client($row[0],$row[1], $row[2], $row[3]));
        }
        //print_r($this->data);
    }

    public function getData(): ClientList {
        $this->read();
        $this->close();
        return $this->data;
    }




    private function close(){
        fclose($this->handle);
    }
}