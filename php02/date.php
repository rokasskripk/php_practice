<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pirmoji uzduotis"
    <title></title>
    
</head>
<body>
    <?php
    $data1 = new DateTime();
    $data2 = new DateTime();

    $paris = new DateTimeZone('Europe/Paris');
    $manila = new DateTimeZone('Asia/Manila');
    
    $data1 -> setTimezone ($paris);
    $data2 -> setTimezone ($manila);

    echo 'Laikas Paryziuje: ' . $data1 -> format('g:ia, l, F j, Y') . '<br>';
    echo 'Laikas Maniloje: ' . $data2 -> format('g:ia, l, F j, Y') . '<br>';
    ?>