<?php

class User
{

    protected $userName;
    protected $age;
    protected $mail;
    protected $codice_sconto;
    protected $user_type;
    protected $discount;


    public function __construct($userName, $age, $mail, $codice_sconto = null, $user_type = 'general', $discount = 20)
    {
        $this->userName = $userName;
        $this->age = $age;
        $this->mail = $mail;
        $this->user_type = $user_type;
        $this->discount = $discount;
    }

    public function setCodice_sconto($codice_sconto)
    {
        $this->codice_sconto = $codice_sconto;
    }
    public function getCodice_sconto()
    {
        return $this->codice_sconto;
    }
    public function getUserType()
    {
        return $this->user_type;
    }
    public function getDiscount()
    {
        return $this->discount;
    }
}


class Premium_user extends User
{
    protected $discount;
    protected $user_type;
    public function __construct($userName, $age, $mail, $codice_sconto = null, $discount = 50, $user_type = 'premium')
    {
        parent::__construct($userName, $age, $mail, $codice_sconto);
        $this->discount = $discount;
        $this->user_type = $user_type;
    }
}
