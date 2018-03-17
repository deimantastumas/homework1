<?php namespace app\classes1\Account;

class Account
{
    private $name;
    private $password = "encrypted";

    public function __construct($name, $password)
    {
        $this->name = $name;
        $this->password = $password;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetPassword()
    {
        return $this->password;
    }

    public function __sleep() {
        //Užsaugo tik vardą
        return array("name");
    }

    public function __wakeup() {
        //Susijungia su duombaze ir pagal vardą nustato slaptažodį
        if($this->name == "deimantas") {
            $this->password = "reikšmė iš duombazės";
        }
    }

    public function __toString()
    {
        return 'Name: ' . $this->name . '<br/>' . 'Password: ' . $this->password . '<br/><br/>';
    }
}