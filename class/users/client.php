<?php

require_once __DIR__ . '/clientAccess.php';

class Client{
    protected $firstname;
    protected $lastname;
    protected $birth;

    public function __construct($_firstname, $_lastname, $_birth)
    {
        $this->firstname = $_firstname;
        $this->lastname = $_lastname;
        $this->birth = $_birth;
    }

    public function getFirstName(){
        return $this-> firstname;
    }

    public function getLastName(){
        return $this-> lastname;
    }

    public function getBirth(){
        return $this-> birth;
    }
}
?>