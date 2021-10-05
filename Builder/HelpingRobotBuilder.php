<?php declare(strict_types=1);

namespace DesignPatterns\Builder;

use DesignPatterns\Builder\Parts\Body;
use DesignPatterns\Builder\Parts\Arm\HealingArm;
use DesignPatterns\Builder\Parts\Arm\StrikingArm;
use DesignPatterns\Builder\Parts\Leg\Leg;
use DesignPatterns\Builder\Parts\HelpingRobot;
use DesignPatterns\Builder\Parts\Robot;

class HelpingRobotBuilder implements Builder
{
    private $helpingRobot;

    public function __construct(){
        $this->helpingRobot = new HelpingRobot();
    }

    public function addArms()
    {
        $this->helpingRobot->setPart('rightArmHealingGel', new HealingArm());
        $this->helpingRobot->setPart('secondRightArmWithBandages', new HealingArm());
        $this->helpingRobot->setPart('leftArmWithBandages', new HealingArm());
        $this->helpingRobot->setPart('secondLeftArmWithHealingGel', new HealingArm());
    }

    public function addBody()
    {
        $this->helpingRobot->setPart('titaniumBody', new Body());
    }

    public function addLegs()
    {
        $this->helpingRobot->setPart('rightLeg', new Leg());
        $this->helpingRobot->setPart('leftLeg', new Leg());
    }

    public function createRobot()
    {
        $this->helpingRobot = new helpingRobot();
    }

    public function getRobot(): Robot
    {
        return $this->helpingRobot;
    }
}