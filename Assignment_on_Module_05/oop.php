<?php 
class Book{
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies){
        $this->title = $title;
        $this->availableCopies = $availableCopies;
  
    }

    public function getTitle(){
        return $this->title;
    }

    public function getAvailableCopies(){
        return $this->availableCopies;
    }

    public function borrowBook(){
        if($this->availableCopies >0){
            $this->availableCopies--;
            return true;
        }
        return false;
    }

    public function returnBook(){
        $this->availableCopies++;
    }

        
} 

class Member {

    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function borrowBook($book){
        if($book->borrowBook()){
            echo "{$this->name} borrowed '{$book->getTitle()}' .\n";
        }else {
            echo "sorry, '{$book->getTitle()}' is not available.\n";
        }
    }

    public function returnBook($book) {
        $book->returnBook();
        echo "{$this->name} returned '{$book->getTitle()}'.\n";
    }

}


$book1 = new Book("The Great Gatsby", 4);
$book2 = new Book("To Kill a Mockingbird", 2);

$member1 = new Member("john doe");
$member2 = new Member("Jane smith");

echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}<br>";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}<br>";




?>