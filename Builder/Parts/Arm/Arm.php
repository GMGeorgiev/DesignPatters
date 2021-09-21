<?php declare(strict_types=1);

namespace DesignPatterns\Builder\Parts\Arm;

interface Arm
{
    public function performAction();
    public function move($x, $y);
}