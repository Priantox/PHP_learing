<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <?php 
        class Book{
            var $title;
            var $author;
            var $pages;
        }

        $book1 = new Book;
        $book1->title = "Harry potter";
        $book1->author = "J.k Rowling";
        $book1->pages = 400;

        echo $book1->author;
    ?>
   
</body>

</html>