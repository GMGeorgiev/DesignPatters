<?php declare(strict_types=1);

namespace DesignPatterns\Builder\Parts;

abstract class Robot
{
    public function setPart(string $key, object $value)
    {
        $this->{$key} = $value;
    }
}