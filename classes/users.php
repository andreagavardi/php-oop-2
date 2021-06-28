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
    public function getCodice_sconto()
    {
        return $this->codice_sconto;
    }
}


class Premium_user extends User
{
    protected $discount;
    protected $user_type;
    public function __construct($userName, $age, $mail, $codice_sconto = null, $discount = 50, $user_type = 'Premium')
    {
        parent::__construct($userName, $age, $mail, $codice_sconto = null);
        $this->discount = $discount;
        $this->user_type = $user_type;
    }

    public function getDiscount()
    {
        return $this->discount;
    }
}
