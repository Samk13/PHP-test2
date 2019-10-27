<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Return Statements</title>
</head>
<body>
<?php
function cubNum($num){
    return $num * $num * $num;
}
$cubResult = cubNum(4);
echo $cubResult;

?>
    
</body>
</html>