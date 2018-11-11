<?php
class Box
{
    /**
     * @var float
     */
    private $length;

    /**
     * @var float
     */
    private $width;

    /**
     * @var float
     */
    private $height;
    public function __construct(float $length, float $width, float $height)
    {
        $this->setLength($length);
        $this->setWidth($width);
        $this->setWidth($height);
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @param float $length
     * @throws Exception
     */
    private function setLength(float $length)
    {
        if($length<=0) {
            throw new Exception("Length cannot be zero or negative.");
        }
        $this->length = $length;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     * @throws Exception
     */
    private function setWidth(float $width)
    {
        if($width<=0) {
            throw new Exception("Width cannot be zero or negative.");
        }
        $this->width = $width;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     * @throws Exception
     */
    private function setHeight(float $height)
    {
        if($height<=0) {
            throw new Exception("Height cannot be zero or negative.");
        }
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
try {
    $newBox = new Box($a, $b, $c);
    echo $newBox->surfaceArea();
    echo $newBox->lateralArea();
    echo $newBox->volume();
} catch (Exception $exception) {
    echo $exception->getMessage();
}
