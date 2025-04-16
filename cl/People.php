<?php
class People
{
    public $id;
    public $name;
    public $energy;

    public function __construct($id=null, $name=null, $energy=0)
    {
        $this->id=$id;
        $this->name=$name;
        $this->energy=$energy;

    }

    public function Vivod()
    {
        echo "<br> Id - $this->id Ім'я - $this->name En - $this->energy";
    }
    public function Go($km) {
        echo "<br> Я $this->name йду $km кілометрів";
        $this->energy -=$km *100;
    }

    public function Eat($gr)
    {
        echo "<br> Я $this->name їм $gr грамів";
        $this->energy +=$gr *10;
    }


}
