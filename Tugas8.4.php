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
    $tinggi=180;
    //kondisi else
    if ($tinggi>=180){
        echo "Tinggi ";
    }
    else if ($tinggi >=150) {
        echo "Normal ";
    }
    else{
        echo "Pendek ";
    }
    ?>
</body>
</html>