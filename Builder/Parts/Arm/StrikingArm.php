<?php declare(strict_types=1);

namespace DesignPatterns\Builder\Parts\Arm;

class StrikingArm
{
    public function strike(){
        echo 'Attack';
    }

    public function move($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
}