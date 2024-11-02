<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <form action="Mini_array_website.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

    <?php  $grades = array("Jim" => "A+", "Mark" => "B+", "Anna" => "C-"); ?>
    <?php
        echo $grades[$_POST["student"]];
    ?>

</body>

</html>