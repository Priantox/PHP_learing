<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>
 
<body>
    <?php 
        class Movie{
            public $title;
            private $rating;

            function __construct($title,$rating){
                $this->title = $title;
                //$this->rating = $rating;
                $this->setRating($rating);
            }

            function getRating(){
                return $this->rating;
            }

            // function setRating($rating){
            //     $this->rating = $rating;
            // }

            function setRating($rating){
                if($rating == "G" || $rating == "PG-13")
                    $this->rating = $rating;
                else{
                    $this->rating ="NR";
                }
            }
        }

        $avengers = new Movie("Avengers","Dog");
        echo $avengers->getRating();
        echo "<br>";
        echo $avengers->setRating("G");
        echo $avengers->getRating();
    ?>

</body>

</html>