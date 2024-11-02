<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <?php
        $friends = array("kiran", "mega", "Moonlight");
        echo $friends[0];

        $friends[0] = "john";
        echo $friends[0];
        echo count($friends);
    ?>

    <hr><br>

    <!--Associative array-->
    <?php
    $grades = array("Jim" => "A+", "Mark" => "B+", "Anna" => "C-");
    $grades["Jim"] = "F";
    echo $grades["Mark"];
    ?>
    <br>
    <?php echo $grades["Jim"]; ?><br>
    <?php echo count($grades); ?>

    <br>
    <hr> 

    <!--Mini website-->
    <form action="Arrays.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php
        $grades = array("Jim" => "A+", "Mark" => "B+", "Anna" => "C-");
        echo $grades[$_POST["students"]];
    ?>

</body>

</html>