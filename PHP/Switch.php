<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>

<body>

    <form action="Switch.php" method="post">
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php 
        $grades = $_POST["grade"];

        switch($grades){
            case "A":
                echo "Great";
                break;
            case "B":
                echo "Good";
                break;
            case "C":
                echo "Well";
                break;
            default:
            echo "Invalid";
        }
    ?>
   
</body>

</html>