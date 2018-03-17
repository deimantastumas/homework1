<?php namespace app\classes2\Data;

class Data
{
    public $game;
    public $version;

    public function __set_state($an_array)
    {
        $obj = new Data;
        $obj->game = $an_array['game'];
        $obj->version = $an_array['version'];
        return $obj;
    }

    public function __toString()
    {
        return $this->game . ' ' . $this->version . '<br/>';
    }

    public function __clone()
    {
        $this->version = $this->version + 0.1;
    }

}