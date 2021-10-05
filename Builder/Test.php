<?php declare(strict_types=1);


namespace DesignPatterns\Builder\Tests;
include("../vendor/phpunit/phpunit/src/Framework/TestCase.php");


use DesignPatterns\Builder\Parts\HelpingRobot;
use DesignPatterns\Builder\Parts\KillerRobot;
use DesignPatterns\Builder\KillerRobotBuilder;
use DesignPatterns\Builder\HelpingRobotBuilder;
use DesignPatterns\Builder\Director;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildKillerRobot()
    {
        $killerRobotBuilder = new KillerRobotBuilder();
        $newKillerRobot = (new Director())->build($killerRobotBuilder);

        $this->assertInstanceOf(KillerRobot::class, $newKillerRobot);
    }

    public function testCanBuildHelpingRobot()
    {
        $helpingRobotBuilder = new HelpingRobotBuilder();
        $newHelpingRobot = (new Director())->build($helpingRobotBuilder);

        $this->assertInstanceOf(HelpingRobot::class, $newHelpingRobot);
    }
}