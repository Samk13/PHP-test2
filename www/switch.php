<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>switch</title>
</head>
<body>
    <form action="switch.php" method="post" />
    <h3> what's your grade ?</h3>
     <input type="text"  name="grade" /> <br>
    <input type="submit" />
    </form>
    <?php
    $grade = $_POST["grade"];
    
    switch($grade){
        case "A":
            echo "You did great!";
            break;
        case"B":
            echo "you did good!";
            break;
        case"C":
            echo "you can do better!";
            break;
        case"D":
            echo "you should study more!";
            break;
        default:
        echo "invalid input";
    }

    ?>
</body>
</html>