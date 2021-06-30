<?php

trait GameDetail
{
    protected $used;
    protected $condition;

    public function console()
    {
        return $this->console_type;
    }
}
