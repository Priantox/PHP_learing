<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <?php 
        function sayHi($name){
            echo "Hello $name<br>";
        }

        sayHi("Mike");
    ?>

    <?php 
        function cube($num){
            return $num * $num * $num;
        }

        $result = cube(4);
        echo $result;
    ?>
   
</body>

</html>