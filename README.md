Builder design pattern - Robot
===

1. Builder design pattern:
- **Builder** is a creational design pattern, which allows constructing complex objects step by step.

![image](https://media.geeksforgeeks.org/wp-content/uploads/uml-of-builedr.jpg)

- Our builder builds robots (Helping and Killer). They conist of 3 parts:
1. Arm
2. Leg
3. Body

To build a robot 1st we need to instantiate the specific builder.
The specific builder inherits the Builder class and sets the parts.
The specific builder has an instance of the specific robot as a property , which is used to set the specific part.
For exmple HelpingRobot:
```
public function addLegs()
{
    $this->helpingRobot->setPart('rightLeg', new Leg());
    $this->helpingRobot->setPart('leftLeg', new Leg());
}
```
Each specific robot inherits from the Robot class, which has the setPart(); method:
```
public function setPart(string $key, object $value)
{
    $this->{$key} = $value;
}
```
- The Director is instantiated and uses a single method build(Builder builder), which uses the builder's method to create a robot:
```
    public function build(Builder $builder): Robot
    {
        $builder->createRobot();
        $builder->addArms();
        $builder->addLegs();
        $builder->addBody();

        return $builder->getRobot();
    }
```

 After which we create the robot using the Director.
```
$killerRobotBuilder = new KillerRobotBuilder();
$newKillerRobot = (new Director())->build($killerRobotBuilder);
```
- After we have our robot we can use can use the functionalities of it's parts:

```
$newKillerRobot->leftArm->performAction();
```

2. For the arms the Adapter design pattern is used:

 - **Adapter** is a structural design pattern that allows objects with incompatible interfaces to collaborate.
 ![image](https://refactoring.guru/images/patterns/diagrams/adapter/structure-object-adapter.png?id=33dffbe3aece29416244)

 - We have a HealingArm class which inherits Arm and a StrikingArm which has a different set of methods and we want to adapt them so it can inherits Arm as well. For this reason the StrikingArmAdapter is introduced which inherits Arm and uses a StrikingArm object to call it's methods:

 ```
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
 ```
