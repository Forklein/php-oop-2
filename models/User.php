<?php

class User
{
    protected $name;
    protected $lastName;
    protected $email;

    public function __construct($name, $lastName, $email)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    //Getter
    public function getFullName()
    {
        return $this->name . ' ' . $this->lastName;
    }
}
