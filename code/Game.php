<?php

namespace beetest;

use beetest\bees\QueenBee;
use beetest\bees\WorkerBee;
use beetest\bees\DroneBee;

class Game
{

    public static function createBees()
    {
        $bees = [
            new QueenBee(),
            new WorkerBee(),
            new WorkerBee(),
            new WorkerBee(),
            new WorkerBee(),
            new WorkerBee(),
            new DroneBee(),
            new DroneBee(),
            new DroneBee(),
            new DroneBee(),
            new DroneBee(),
            new DroneBee(),
            new DroneBee(),
            new DroneBee()
            ];

        return $bees;
    }

    public static function hit($bees)
    {
        $beeNum = rand(0, count($bees) - 1);

        $bee = $bees[$beeNum];

        $bee->hit();

        if (!$bee->isAlive()) {
            array_splice($bees, $beeNum, 1);

            if ($bee->type() == "QueenBee") {
                $bees = self::createBees();
            }

            if (count($bees) == 0) {
                $bees = self::createBees();
            }
        }

        return $bees;

    }

}