<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <form action="Basic_Calculator.php" , method="get">
        <input type="number" name="num1"><br>
        <input type="number" name="num2"><br>
        <input type="submit"><br>
    </form>
    <br>
    Answer: <?php echo $_GET["num1"] + $_GET["num2"] ?>

</body>

</html>