<?php
class Book {
    protected $title;
    protected $author;
    protected $price;
    public function __construct($title, $author, $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    private function setTitle($title): void
    {
        if(strlen($title)<3) {
            echo "Title not valid!";
            die;
        }
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    private function setAuthor($author): void
    {
        $arr=explode(" ", $author);
        $second=$arr[1];
        if(is_numeric($second[0])) {
            echo "Author not valid!";
            die;
        }
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        if($price<=0) {
            echo "Price is not valid!";
            die;
        }
        $this->price = $price;
    }

}
class GoldenBook extends Book {
    public function __construct($title, $author, $price)
    {
        parent::__construct($title, $author, $price);
        $this->price*=1.30;
    }
}

$author=readline();
$title=readline();
$price=(float)readline();
$type=readline();
if($type!="STANDARD" && $type!="GOLD") {
    echo "Type is not valid!";
    die;
} else {
    if($type=="STANDARD") {
        $book=new Book($title, $author, $price);
        echo 'OK' . PHP_EOL;
        echo $price;
    } elseif ($type=="GOLD") {
        $book=new GoldenBook($title, $author, $price);
        echo 'OK' . PHP_EOL;
        echo $book->getPrice();
    }
}

