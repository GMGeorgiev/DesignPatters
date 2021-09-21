<?php declare(strict_types=1);

namespace DesignPatterns\Builder;

use DesignPatterns\Builder\Parts\Body;
use DesignPatterns\Builder\Parts\Arm\StrikingArmAdater;
use DesignPatterns\Builder\Parts\Arm\StrikingArm;
use DesignPatterns\Builder\Parts\Leg\Leg;
use DesignPatterns\Builder\Parts\KillerRobot;
use DesignPatterns\Builder\Parts\Robot;

class KillerRobotBuilder implements Builder
{
    private KillerRobot $killerRobot;

    public function addArms()
    {
        $this->killerRobot->setPart('rightArmWithSaw', new StrikingArmAdater(new StrikingArm()));
        $this->killerRobot->setPart('leftArmWithDrill', new StrikingArmAdater(new StrikingArm()));
    }

    public function addBody()
    {
        $this->killerRobot->setPart('titaniumBody', new Body());
    }

    public function addLegs()
    {
        $this->killerRobot->setPart('rightLegFireThrower', new Leg());
        $this->killerRobot->setPart('leftLegFreezingMechanic', new Leg());
    }

    public function createRobot()
    {
        $this->killerRobot = new KillerRobot();
    }

    public function getRobot(): Robot
    {
        return $this->killerRobot;
    }
}