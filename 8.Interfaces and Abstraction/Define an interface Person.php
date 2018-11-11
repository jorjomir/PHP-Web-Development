<?php
interface Person {
    public function setName($name);
    public function setAge($age);
}
class Citizen implements Person {
    protected $name;
    protected $age;
    public function __construct($name, $age)
    {
        $this->setName($name);
        $this->setAge($age);
    }

    public function setName($name)
    {
        $this->name=$name;
    }

    public function setAge($age)
    {
        $this->age=$age;
    }
    public function __toString()
    {
        return $this->name . PHP_EOL . $this->age;
    }

}
$input=readline();
$input2=readline();
$a=new Citizen($input, $input2);
echo $a->__toString();