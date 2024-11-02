<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <?php 
        $index = 1;

        while($index <=5){
            echo "$index<br>";
            $index++;
        }
    ?>
    <hr><br>

    <?php  
        $i = 1;

        do{
            echo "$i<br>";
            $i++;
        }while($i <= 5);
    ?>

    <hr><br>

    <?php 

        for($i = 0; $i <= 5; $i++){
            echo "$i<br>";
        }
    ?>

    <br>

    <?php 
        $numbers = array(4,3,2,1,2);

        for($i = 0; $i < count($numbers); $i++)
            echo "$numbers[$i]<br>"; 
    ?>
   
</body>

</html>