<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <form action="Mad_Libs_Game.php">
        Color: <input type="text" name="color"><br>
        Noun: <input type="text" name="noun"><br>
        Celebrity: <input type="text" name="cele"><br>
        <input type="submit">
    </form>

    <?php 
        $color = $_GET["color"];
        $noun = $_GET["noun"];
        $cele = $_GET["cele"];

        echo "Roses are $color<br>";
        echo "Violence are $noun<br>";
        echo "I like $cele";
    ?>

</body>

</html>