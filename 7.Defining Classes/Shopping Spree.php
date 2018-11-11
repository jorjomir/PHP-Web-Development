<?php
class Person{
    private $name;
    private $money;
    private $bag;

    public function __construct($name, $money, $bag=[])
    {
        $this->setName($name);
        $this->setMoney($money);
        $this->bag=[];
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * @param mixed $money
     */
    public function setMoney($money): void
    {
        $this->money = $money;
    }
}

class Products {
    private $name;
    private $cost;

    public function __construct($name, $cost)
    {
        $this->setName($name);
        $this->setCost($cost);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $cost
     */
    public function setCost($cost): void
    {
        $this->cost = $cost;
    }
}
$people=explode(";", readline());
$products=explode(";", readline());
for ($i=0; $i<count($people); $i++) {
    $arr=explode("=", $people[$i]);
    $name=$arr[0];
    $money=$arr[1];

}