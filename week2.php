<!DOCTYPE html>
<html lang="en">
<head>
    <title>Week 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    echo "<h1>7.2.1 Parkeerplaatsen</h1>";
    //Vraag1
    function vraag1($autos, $bussen){
        return ($autos * 3) + ($bussen * 10) . " Euro";
    }
    echo "<p>1. Wat is de opbrengst als er 40 personenauto’s en 5 autobussen komen?</p>";
    echo vraag1(40,5);

    //Vraag2
    function vraag2($bedrag, $bussen){
        return ($bedrag - ($bussen *10)) / 3 . " auto's";
    }
    echo "<p>2. Er zijn 10 bussen en de opbrengst was 300 euro, hoeveel personenauto’s waren er die dag?</p>";
    echo vraag2(300,10);

    //Vraag3
    function vraag3($autos, $bussen){
        $plekken = 75;
        $maxbusplekken = 10;
        $totaalplek = $autos + ($bussen * 3);
        if($totaalplek > $plekken){
            $antwoord = "teveel voertuigen";
        }elseif ($bussen > $maxbusplekken){
            $antwoord = "teveel bussen";
        }elseif ($autos > ($bussen * 8)){
            $antwoord = "teveel auto's";
        }elseif ($autos < ($bussen * 3)){
            $antwoord = "te weinig auto's";
        }else{
            $antwoord = "Aantal auto's = $autos, Aantal bussen = $bussen, Opbrengst = ". vraag1($autos,$bussen);
        }
         return $antwoord;
    }
    echo "<p>3. Bij welke aantallen parkeerplaatsen voor personenauto’s en autobussen is de opbrengst maximaal? Hoe groot is die opbrengst?</p>";
    echo vraag3(45,10);

//    75 autoplekken beschikbaar
//    10 van deze plekken beschikbaar voor bussen
//    auto = 1 plek
//    bus = 3 plekken
//    auto = 3 euro
//    bus = 10 euro
//    max 10 plekken voor bussen (zijn  dit extra plekken?, hoe groot zijn deze plekken, zijn dit 30 of 10 plekken)
//    autoplekken max 8x en min 3x zoveel als busplekken
    ?>
</body>