<?php
namespace Core\Entities;

class User
{
    public function __construct($id,$firstName,$lastName,$email)
    {
        $this->id=$id;
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->email=$email;
    }

    private $id;
    private $firstName;
    private $lastName;
    private $email;
    public function getId()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

}