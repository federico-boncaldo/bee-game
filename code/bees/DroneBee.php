<?php

namespace beetest\bees;

class DroneBee extends Bee
{

    public function __construct()
    {
        $this->_hitPoints = 50;
    }

    public function hit()
    {
        $this->_hitPoints -= 12;
    }

    public function type()
    {
        return "DroneBee";
    }
}