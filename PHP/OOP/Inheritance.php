<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

</head>
 
<body>
    <?php 
        class Chef{
            function makeChicken(){
                echo "The chef makes chicken<br>";
            }

            function makeSalad(){
                echo "The chef makes salad<br>";
            }

            function makeSpecialDish(){
                echo "The chef makes special dish";
            }
        }

        class ItalianChef extends Chef{
            function makePasta(){
                echo "Chef make pasta";
            }

            function makeChicken()
            {
                echo "make something<br>";
            }
        }

        $chef = new Chef;
        $chef->makeSalad();
        $chef->makeChicken();

        $ItalianChef = new ItalianChef;
        $ItalianChef->makeChicken();
        $ItalianChef->makePasta();
        
    ?>

</body>

</html>