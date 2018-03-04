<!DOCTYPE html>
<html lang="en">
<head>
    <title>Week 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    echo "<h1>7.1.1 BMI</h1>";
    //Vraag1
    function vraag1($gewicht, $lengte){
        return $gewicht / ($lengte * $lengte);
    }

    echo "<p>1. Wat is de BMI van een persoon die 90 kg weegt en 180 cm lang is?</p>";
    echo vraag1(90,1.80);

    //Vraag2
    function vraag2($gewicht, $bmi){
        return sqrt($gewicht / $bmi);
    }
    echo "<p>2. Hoe lang zou een persoon van 60 kg moeten zijn met een BMI van 18?</p>";
    echo vraag2(60,18);

    //Vraag3
    function vraag3($lengte, $bmi){
        return $bmi * ($lengte * $lengte);
    }
    echo "<p>3. Wat is het gewicht van een persoon met een BMI van 35 en 200 hoog?</p>";
    echo vraag3(2.00, 35);

    //Vraag4
    echo "<p>4. Wat is je eigen BMI?</p>";
    echo vraag1(99, 1.90);

    echo "<h1>7.1.2 Gemiddelde</h1>";
    //Vraag5
    function vraag5(){
        $array = array();
        for ($i = 0; $i < 20; ++$i) {
            $array[] = rand(18,88);
        }
        $adder = 0;
        foreach ($array as $x){
            $adder += $x;
            echo $x."<br>";
        }
        return "Antwoord:" .$adder / 20;
    }
    echo vraag5();

    echo "<h1>7.1.3 Collatz</h1>";
    //vraag6
    function vraag6($n){
        $highest = $count = 0;
        while ($n != 1) {
            if ($n > $highest) {
                $highest = $n;
            }

            if ($n % 2 == 0) {
                $n /= 2;
            } else {
                $n = (3 * $n) + 1;
            }
            $count++;
        }
        return "Stappen = " . $count . " Hoogste nummer = " . $highest;
    }
    echo vraag6(81)."<br>";
    echo vraag6(965)."<br>";
    echo vraag6(451);
    ?>
</body>