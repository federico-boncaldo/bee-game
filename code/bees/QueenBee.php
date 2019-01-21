<?php

namespace beetest\bees;

class QueenBee extends Bee
{

    public function __construct()
    {
        $this->_hitPoints = 100;
    }

    public function hit()
    {
        $this->_hitPoints -= 8;
    }

    public function type()
    {
        return "QueenBee";
    }
}