<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Statements</title>
</head>
<body>
<?php 

$isMale = false;
$isTall = false;
$isHansome = false;

if($isMale && $isTall || $isHansome){
    echo "you are male, tall and handsome 👦😎 <br>";
} elseif ($isMale && !$isTall) {
    echo "you are male but not tall 🙄 <br>";
}

elseif(!$isMale && !$isTall) {
    echo "you are not my type! 🤔<br>";
}

?>
    
</body>
</html>