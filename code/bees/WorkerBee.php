<?php

namespace beetest\bees;

class WorkerBee extends Bee
{

    public function __construct()
    {
        $this->_hitPoints = 75;
    }

    public function hit()
    {
        $this->_hitPoints -= 10;
    }

    public function type()
    {
        return "WorkerBee";
    }
}