<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <form action="Input.php" method="get">
        Name: <br>
        <input type="text" name="username">
        <br><br>
        Age: <br>
        <input type="number" name="age">
        <br>
        <input type="submit">
    </form>

    Your name is <?php echo $_GET["username"] ?> <br>
    Your age is <?php echo $_GET["age"] ?>
</body>

</html>