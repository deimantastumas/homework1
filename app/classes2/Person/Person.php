<?php namespace app\classes2\Person;

class Person
{
    private $numbers = array();

    public function __set($name, $value)
    {
        $this->numbers[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->numbers)) {
            return $this->numbers[$name];
        }
        else
        {
            return "Invalid parameter!";
        }
    }

    public function __isset($name)
    {
        return isset($this->numbers[$name]);
    }

    public function __unset($name)
    {
        echo ("Now, trying to delete your number... <br/>");
        unset($this->numbers[$name]);
    }

    public function __debugInfo() {
        return [
            'output' => $this->numbers,
        ];
    }

    public function __destruct()
    {
        echo ('<br /> Data was cleaned');
    }
}
