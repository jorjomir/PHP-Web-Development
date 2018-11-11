<?php
class Box
{
    public function __construct($length, $width, $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function surfaceArea()
    {
        $ans=(2 * $this->length * $this->width) + (2 * $this->length * $this->height) + (2 * $this->width * $this->height);
        return 'Surface Area - ' . number_format((float)$ans, 2, '.', '') . PHP_EOL;
    }
    public function lateralArea()
    {
        $ans=(2*$this->length*$this->height)+(2*$this->width*$this->height);
        return 'Lateral Surface Area - ' . number_format((float)$ans, 2, '.', '') . PHP_EOL;
    }
    public function volume()
    {
        $ans=$this->length*$this->height*$this->width;
        return 'Volume - ' . number_format((float)$ans, 2, '.', '') . PHP_EOL;
    }
}
$a=readline();
$b=readline();
$c=readline();
$newBox=new Box($a,$b,$c);
echo $newBox->surfaceArea();
echo $newBox->lateralArea();
echo $newBox->volume();