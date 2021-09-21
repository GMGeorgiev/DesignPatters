<?php declare(strict_types=1);

namespace DesignPatterns\Builder;

use DesignPatterns\Builder\Parts\Robot;

/**
 * Director is part of the builder pattern. It knows the interface of the builder
 * and builds a complex object with the help of the builder
 *
 * You can also inject many builders instead of one to build more complex objects
 */
class Director
{
    public function build(Builder $builder): Robot
    {
        $builder->createRobot();
        $builder->addArms();
        $builder->addLegs();
        $builder->addBody();

        return $builder->getRobot();
    }
}