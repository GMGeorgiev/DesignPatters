<?php declare(strict_types=1);

namespace DesignPatterns\Builder\Parts\Arm;

class HealingArm implements Arm 
{
    public function performAction(){
        echo 'This arm helps';
    }

    public function move($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
}