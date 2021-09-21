<?php declare(strict_types=1);

namespace DesignPatterns\Builder\Parts\Arm;

use DesignPatterns\Builder\Parts\Arm\StrikingArm;

class StrikingArmAdater implements Arm 
{

    public function __construct(protected StrikingArm $strikingArm){
        $this->strikingArm = $strikingArm;
    }

    public function performAction(){
        $this->strikingArm->strike();
    }

    public function move($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
}