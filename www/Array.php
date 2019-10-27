<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="Array.php" method="post">

    <input type="text" name="student" >
    <input type="submit">
</form>

<?php 
    $grades = array("jim" =>"A+", "Osama"=>"A+", "Oscar"=>"C+");
    echo $grades[$_POST["student"]];
?>
    
</body>
</html>