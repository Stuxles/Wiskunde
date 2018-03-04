<!DOCTYPE html>
<html lang="en">
<head>
    <title>Week 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<h1>7.1.1 BMI</h1>
<form method="post" action="">
    Gewicht in kg:<br>
    <input type="number" name="gewicht">
    <br>
    Lengte in cm:<br>
    <input type="number" name="lengte">
    <br><br>
    <input type="submit" Name = "Submit1" value="Submit">
</form>
<br>

<?php
if (isset($_POST['Submit1'])) {
    $lengte = $_POST["lengte"] / 100;
    $gewicht = $_POST["gewicht"];
    $bmi = $gewicht / ($lengte * $lengte);
    echo "BMI =" . $bmi;
}
?>

<h1>7.1.2 Gemiddelde</h1>
<?php
$array = array();
for ($i = 0; $i < 20; ++$i) {
    $array[] = rand(18,88);
}
$adder = 0;
foreach ($array as $x){
    $adder += $x;
    echo $x."<br>";
}
echo "Gemiddelde = ". $adder / 20;
?>

<h1>7.1.3 Collatz</h1>
<form method="post" action="">
    Nummer:<br>
    <input type="number" name="nummer">
    <br><br>
    <input type="submit" Name = "Submit2" value="Submit">
</form>
<?php
if (isset($_POST['Submit2'])) {
    $n = $_POST["nummer"];
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
    echo "Stappen = " . $count . " Hoogste nummer = " . $highest;
}
?>

</body>
</html>
