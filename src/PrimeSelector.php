<?php
namespace App;

class PrimeSelector {
    private $primeList = [1, 2, 3, 5, 7, 11, 13, 17];
    public function listNPrimes(int $cuanto):array
    {
        if ($cuanto > count($this->primeList)) 
        {
            return ["avaricioso"]; 
        }

        $salida = ["números primos"];
        /*
        for ($i = 0; $i < $cuanto; $i++) {
            $salida[] = $primeList[$i];
        } */

        foreach ($this->primeList as $key=>$prime){
            if ( $key >= $cuanto) { 
                break;
            }
            //echo $prime.", ";
            $salida[] = $prime;
        }
    
        return $salida;
    }
}