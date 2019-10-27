<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IfStatements2</title>
</head>
<body>
<?php 

function getMax($num1, $num2){
    if($num1 > $num2){
        echo $num1;
        return $num1 ;
    } elseif($num1 < $num2){
        echo $num2;
        return $num2;
    } else{
        echo "numbers are equal ! ";
    }

}

getMax(100, 100.1);

?>
    
</body>
</html>