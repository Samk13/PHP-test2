<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>

    <form action="Calculator.php" method="post" />
    first Num: <input type="number" name="num1" /> <br>
    OP: <input type="text" name="op" /> <br>
    second Num: <input type="number" name="num2" /> <br>
    <input type="submit" />

    </form>
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

    
    function calc($num1, $num2, $op){
        if($op == "+"){
            echo $num1 + $num2;
        } elseif($op == "/"){
            echo $num1 / $num2;
        }elseif($op == "-"){
            echo $num1 - $num2;
        }elseif($op == "*"){
            echo $num1 * $num2;
        }else {
            echo "somthing went wrong, check  input";
        }
    }

    calc($num1, $num2, $op);
    ?>
</body>
</html>