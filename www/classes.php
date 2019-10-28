<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>classes</title>
</head>
<body>
    <?php 
    class Book{
        public $title;
        public $author;
        public $pages;

        function __construct($atitle, $aAuthor, $aPages){
            $this->title = $atitle;
            $this->author = $author;
            $this->pages = $aPages;
            echo "$atitle book has been created. <br>";
        }
    }

    class Student{
        private $name;
        private $major;
        private $gpa;
        function __construct($name, $major, $gpa){
            $this->setName($name);
            $this-> major = $major;
            $this-> gpa = $gpa;
            echo "$name has been created <br>";
        }
        function hasHonors(){
            if($this-> gpa > 10){
                return "true <br>"; 
            }
            return "false <br>";
        }
        function getName(){
            return $this-> name;
        }
        function setName($name){
            return $name;

        }
    }

     $student1 = new Student("sam","Engeneer","1541");

     echo $student1-> hasHonors();


    $book1 = new book("sam's book", "me", 400);

    $book2 = new book("Lord of the rings","tolkin","40012");

    echo $book1->author;
    
    ?>
</body>
</html>