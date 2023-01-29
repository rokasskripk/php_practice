<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pirmoji uzduotis" <title>1 uzd</title>

</head>

<body>
    <?php
    $cities = array('Berlin', 'Rome', 'London');
    print_r($cities);

    $cities[] = "Tokyo";
    print_r($cities);

    $cities2 = array(
        "Tokyo" => 13.6,
        "Washington" => 0.6,
        "Moscow" => 11.5
    );
    $cities2["London"] = 8.6;
    print_r($cities2);

    ?>
    <ul>
        <li> <?php echo $cities[1]; ?> </li>
    </ul>

    <ul>
        <?php
        foreach ($cities2 as $city => $population) {
            echo "<li>$city: Population: $population million.</li>";
        }
        ?>
    </ul>

    </ul>

    <h3>5uzduotis</h3>
    <?php
    $cities3 = array(
        "Tokyo" => array(13.6, 1868, "Japan"),
        "Washington" => array(0.6, 1790, "USA"),
        "Moscow" => array(11.5, 1147, "Russia")
    );
    $cities3["Londonas"] = array(8.6, 43, "Anglija");
    print_r($cities3);
    ?>
    <ul>
        <li>Gyventoju skaicius: <?php echo $cities3["Londonas"][0]; ?> milijonai</li>
        <li>Ikurtas: <?php echo $cities3["Londonas"][1] . " m."; ?></li>
        <li>Salis: <?php echo $cities3["Londonas"][2]; ?></li>
    </ul>

</body>

<h3>6uzduotis</h3>
<?php
$metai = 1774;
$cities3 = array(
    "Vasingtonas" => array(
        "sostine",
        1790
    )
);

if ($metai >= $cities3['Vasingtonas'][1]) {
    echo "Vašingtonas yra JAV sostinė.";
} elseif ($metai == 1774) {
    echo "JAV sostinė vis dar Filadelfijoje.";
} else {
    $metaiIkiSostines = $cities3['Vasingtonas'][1] - $metai;
    echo "Liko $metaiIkiSostines metai (-ų) iki Vašingtono įkūrimo.";
}
?>
<h3>7uzduotis</h3>
<?php

$cities4 = array("Tokijas", "Vašingtonas", "Maskva", "Londonas");
echo "<ul>";
for ($i = 0; $i < count($cities4); $i++) {
    echo "<li>$cities4[$i]</li>";
}
echo "</ul>";

echo "<ul>";
foreach ($cities4 as $city) {
    echo "<li>$city</li>";
}
echo "</ul>";

?>

<h3>8uzduotis</h3>
<?php

$temp = array(4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21);

$sum = 0;
foreach ($temp as $t) {
    $sum += $t;
}
$avg = round($sum / count($temp));
echo "Vidutinė balandžio mėnesio temperatūra: $avg <br>";

rsort($temp);
$hottest = array_slice($temp, 0, 5);
echo "Penkios šilčiausios temperatūros: " . implode(", ", $hottest) . "<br>";

sort($temp);
$coldest = array_slice($temp, 0, 5);
echo "Penkios šalčiausios temperatūros: " . implode(", ", $coldest);

?>

<h3>9uzduotis</h3>
<?php
$ceu = array(
    "Italija" => "Roma",
    "Liuksemburgas" => "Liuksemburgas",
    "Belgija" => "Briuselis",
    "Danija" => "Kopenhaga",
    "Suomija" => "Helsinkis",
    "Prancūzija" =>
    "Paryžius",
    "Slovakija" => "Bratislava",
    "Slovenija" => "Liublijana",
    "Vokietija" => "Berlynas",
    "Graikija"
    => "Atėnai",
    "Airija" => "Dublinas",
    "Nyderlandai" => "Amsterdamas",
    "Portugalija" => "Lisabona",
    "Ispanija" => "Madridas",
    "Švedija" => "Stokholmas",
    "Didžioji
    Britanija" => "Londonas",
    "Kipras" => "Nikosija",
    "Lietuva" => "Vilnius",
    "Čekija" => "Praha",
    "Estija" => "Talinas",
    "Vengrija" => "Budapeštas",
    "Latvija" => "Ryga",
    "Malta" => "Valeta",
    "Austrija" => "Viena",
    "Bulgarija" =>
    "Sofija",
    "Rumunija" => "Bukareštas",
    "Lenkija" => "Varšuva"
);

asort($ceu);
foreach ($ceu as $country => $capital) {
    echo "$country - $capital <br>";
}

?>

</html>