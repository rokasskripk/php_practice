<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    
</head>
<body>
    <h6>1uzduotis</h6>
    <?php
        $country = 'Lietuva';
        $city = 'Vilnius';
        $population = 574221;
    ?>
    <ul>
        <li><?php echo $country; ?></li>
        <li><?php echo $city; ?></li>
        <li><?php echo $population; ?></li>
    </ul>
    <h6>2uzduotis</h6>
    <p><?php echo $city . ' - Lietuvos sostine'; ?></p>
    <p><?php echo "$city ir $country sparciai auga."; ?></p>

    <h6>3uzduotis</h6>
    <?php
        $x = 10;
        $y = 7;
        $a = "=";

    ?>
        <?php
        echo "10 + 7 $a" . $x + $y . "</br>";
        echo "10 - 7 $a" . $x - $y . "</br>";
        echo "10 * 7 $a" . $x * $y . "</br>";
        echo "10 / 7 $a" . $x / $y . "</br>";
        echo "10 % 7 $a" . $x % $y . "</br>";
        ?>
    

        
        
</body>

</html>
