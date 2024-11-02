<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <form action="Post.php" method="post">
        Password: <input type="password" name="password"><br>
        <input type="submit">
    </form>

    <?php echo $_POST["password"] ?>

</body>

</html>