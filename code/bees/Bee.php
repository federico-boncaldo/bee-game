<?php

namespace beetest\bees;

abstract class Bee
{
    protected $_hitPoints;

    abstract public function hit();

    public function isAlive()
    {
        return ($this->_hitPoints > 0);
    }

    public function hitPoints()
    {
        return $this->_hitPoints;
    }

    abstract public function type();
}