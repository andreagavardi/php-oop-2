<?php

class Game_xbox extends Videogame
{
    use GameDetail;
    protected $console_type = 'Xbox';
    function setIsUsed($used)
    {
        $this->used = $used;
    }
}
