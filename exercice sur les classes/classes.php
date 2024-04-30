<?php
//Book Class
class Book {
    //Properties
    private $title;
    private $author;
    private $yearPublished;
    //Constructor that initilizes the properties
    public function __construct($title, $author, $yearPublished)
    {
        $this->title =$title ;
        $this->author =$author ;
        $this->yearPublished =$yearPublished;
    }
    //Methods setters and getters
    public function getTitle(){
        return $this->title;
    } 
    public function getAuthor(){
        return $this->author;
    }
    public function getYearPublished(){
        return $this->yearPublished;
    }
    public function getBookInfo(){
        return "the title is " . $this->title ." the author is " . $this->author . " this book was published during the year " . $this->yearPublished . "<br>";
    }
    
}

//library class
class library {
    //name of the library
    private $name;
    //array that will store the book instances
    private $books;
    //this constructor will initialize the name property of our library object
    //and it will initialize our books into an empty string 
    public function __construct($name)
    {
        $this->name = $name;
        $this->books = array();
    }
    //methods
    public function addBooks(Book $book){
        $this->books[] = $book ;

    }
    public function listBooks(){
        $output = "Books in " . $this->name . ":<br>";
        foreach ($this->books as $book ) {
            $output .= "-" . $book->getBookInfo();
            
        }
        return $output ;
    }

}

$Library1 = new library("oxfordLibrary");

//we created an instance of the book class 
$Book1 = new Book("love death and robots","aya","2023"  );
$Book2 = new Book("history of racism in america" , "unknown" , "1900");

$Library1->addBooks($Book1);
$Library1->addBooks($Book2);
echo $Library1->listBooks();



?>