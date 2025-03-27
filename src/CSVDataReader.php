<?php
namespace App;

class CSVDataReader{
    private array $data;
    private $handle;
    
    public function __construct(string $fileName){
        if (!file_exists($fileName))
        { 
            throw new Exception("Archivo no encontrado", 1);
            //TODO: crear nuestra propia excepción
            
        }

        $this->handle = fopen($fileName, 'r');
    }


    private function read(){
        $headers = fgetcsv($this->handle);
        while (($row = fgetcsv($this->handle)) !== false) {
            //TODO: crear clase que valide la fecha
            $this->data[]=array_combine($headers, $row);
        }
        //print_r($this->data);
    }

    public function getData(){
        $this->read();
        $this->close();
        return $this->data;
    }




    private function close(){
        fclose($this->handle);
    }
}