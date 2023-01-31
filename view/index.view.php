<?php

use TRANSPORT\Base;
use TRANSPORT\Car;
use TRANSPORT\Motorcycle;
use TRANSPORT\Bike;

?>

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
        $productOne = new Bike(1, 'Dviratis', '599 eur', '20kg ', '12 begiu', 'kalnu');
        Bike::generateItemList($productOne->getItem());

        $productTwo = new Car(19, 'Toyota', '29790 eur', '1250kg ', 'Avensis', 'melyna', 1.6, 'hybrid');
        Car::generateItemList($productTwo->getItem());
    ?>
</body>
</html>