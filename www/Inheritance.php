<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inheritance</title>
</head>
<body>
    
    <h1 style="text-align: center; color: red">Inheritance</h1>
    <div style="text-align: center; font-size: 3rem">
    <?php 
    class Chef{
        function makeChicken(){
            echo "the chef is making chicken <br>";
        }
        function makeSalad(){
            echo "the chef is making sald<br>";
        }
        function makeSpecialDish(){
            echo "the chef is making a special dish <br>";
        }
    }
    
    class ItalianChef extends Chef{
        function makePasta(){
            echo "the chef is making Pasta";
        }
        function makeSpecialDish() {
            echo "override the special dish to italian";
        }
    }

    $chef= new Chef();
    $chef-> makeSpecialDish();

    $chef2= new ItalianChef();
    $chef2-> makeSpecialDish();
    
    
    ?>
    </div>
</body>
</html>