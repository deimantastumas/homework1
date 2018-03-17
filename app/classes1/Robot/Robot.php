<?php namespace app\classes1\Robot;

class Robot
{
    private static $count = 0;
    private $name = array();

    public function __construct($name)
    {
        Robot::$count++;
        $this->name = $name;
    }

    public static function increase()
    {
        Robot::$count++;
        echo "Number of robots was increased!";
    }

    public static function GetCount()
    {
        return Robot::$count;
    }

    public function Walk()
    {
        echo "Robot is walking!";
    }

    public function Eat()
    {
        echo "Robot is eating!";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "System can't understand you!";
    }

    public function __call($name, $arguments)
    {
        echo "Robot can't understand you!";
    }

    public function __invoke($value)
    {
        return rand(0,$value);
    }
}