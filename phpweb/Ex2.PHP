<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $t = date ("H");
    echo "<p?> The hour (of the server is" .$t;
    echo ",and will give the following message: </p>";
    if ($t < "10"){
        echo "Have a good morning !";
    }elseif($t < "20"){
        echo "have a good day !";
    }else{
        echo "have a good night!";

    }


    ?>
</body>
</html>