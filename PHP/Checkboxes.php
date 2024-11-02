<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <form action="Checkboxes.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
        <input type="submit"><br>
    </form>

    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[0];
    ?>
    
   
</body>

</html>