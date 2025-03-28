<?php
namespace App\Models;

class Client{
    private string $firstName;
    private string $lastName;
    private string $dateOfBirth;
    private string $email;  
    
    public function __construct(string $firstName, string $lastName, string $dateOfBirth, string $email)
    {  
        $this->firstName = $firstName; 
        $this->lastName = $lastName;
        $this->dateOfBirth = $dateOfBirth;
        $this->email = $email;

    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    public function getEmail()
    {
        return $this->email;
    }
}