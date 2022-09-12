<?php

require_once __DIR__ . '/client.php';

class ClientLogin extends Client{

    protected $username;
    protected $email;
    protected $password;

    public function __construct($_firstname, $_lastname, $_username, $_email, $_password)
    {
        parent::__construct($_firstname, $_lastname);
        $this->username = $_username;
        $this->email = $_email;
        $this->password = $_password;
    }

    public function getUsername(){
        return $this-> username;
    }

    public function getEmail(){
        return $this-> email;
    }

    public function getPaasword(){
        return $this->password;
    }
}
?>