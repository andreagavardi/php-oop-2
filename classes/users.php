<?php

class User
{

    protected $userName;
    protected $age;
    protected $mail;
    protected $codice_sconto;

    public function __construct($userName, $age, $mail, $codice_sconto = null)
    {
        $this->userName = $userName;
        $this->age = $age;
        $this->mail = $mail;
    }

    public function setCodice_sconto($codice_sconto)
    {
        $this->codice_sconto = $codice_sconto;
    }
}
