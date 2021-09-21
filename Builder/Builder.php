<?php declare(strict_types=1);

namespace DesignPatterns\Builder;

use DesignPatterns\Builder\Parts\Robot;

interface Builder
{
    public function createRobot();

    public function addArms();

    public function addLegs();

    public function addBody();

    public function getRobot(): Robot;
}