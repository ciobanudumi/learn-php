<?php

class EmptyArrayHandleException extends Exception{
    function __construct($message = "")
    {
        parent::__construct($message);
    }
}

abstract class Publication {

    protected $id;
    protected  $title;
    protected  $content;
    protected  $date;
    protected  $authorName;

    public function __construct(array $row){

        if(empty($row)){
            throw new EmptyArrayHandleException("Array is empty". __CLASS__.", ".__METHOD__);
        }
        $this->id = $row['id'];
        $this->title =$row['title'];
        $this->content =$row['content'];
        $this->authorName =$row['authorName'];
        $this->date =$row['date'];
    }

    abstract function printPublication();
}

class NewsPublication extends Publication {

    private $viwes;

    function __construct($row)
    {
        parent::__construct($row);
        $this->views  = rand(10, 100);
    }

    function printPublication()
    {
        echo __CLASS__."<br>";
        echo "Id = $this->id<br>";
        echo "Title = $this->title<br>";
        echo "Content = $this->content<br>";
        echo "Author Name = $this->authorName<br>";
        echo "Date = $this->date<br>";
        echo "Views = $this->views <br><br><hr>";
    }
}

class ArticlePublication extends Publication{

    function printPublication()
    {
        echo __CLASS__."<br>";
        echo "Id = $this->id<br>";
        echo "Title = $this->title<br>";
        echo "Content = $this->content<br>";
        echo "Author Name = $this->authorName<br>";
        echo "Date = $this->date<br><br><hr>";
    }
}

class PhotoReportPublication extends Publication{

    function printPublication()
    {
        echo __CLASS__."<br>";
        echo "Id = $this->id<br>";
        echo "Title = $this->title<br>";
        echo "Content = $this->content<br>";
        echo "Author Name = $this->authorName<br>";
        echo "Date = $this->date<br><br><hr>";
    }
}


?>


