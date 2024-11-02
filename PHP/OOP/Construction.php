<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>
    <?php 
        // class Book{
        //     var $title;
        //     var $author;
        //     var $pages;

        //     function __construct($name)
        //     {
        //         echo $name;
        //         echo "<br>";
        //     }
        // }

        // $book1 = new Book("Rowling");
        // $book1->title = "Harry potter<br>";
        // $book1->author = "J.k Rowling";
        // $book1->pages = 400;

        // echo $book1->author;

        // $book2 = new Book("Mike");
        // $book2->title = "Harry";
        // $book2->author = "Allen poe";
        // $book2->pages = 400;

        // echo $book1->author;
    ?>
</body>
 
<body>
    <?php 
        class Book{
            var $title;
            var $author;
            var $pages;

            function __construct($title,$author,$pages)
            {
                $this->title = $title;
                $this->author = $author;
                $this->pages = $pages;
            }
        }

        $book1 = new Book("Harry","Rowling",400);
        echo $book1->title;
    ?>

</body>

</html>