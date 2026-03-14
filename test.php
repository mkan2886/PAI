

<?php
function rataKredytu($kwota, $oprocentowanieRoczne, $lata) {
    $r = $oprocentowanieRoczne / 12 / 100; 
    $n = $lata * 12; 

    if ($r == 0) {
        return $kwota / $n;
    }

    return ($kwota * $r * pow(1 + $r, $n)) / (pow(1 + $r, $n) - 1);
}

$kwota = floatval($_POST['kwota'] ?? 0);
$oprocentowanie = floatval($_POST['oprocentowanie'] ?? 0);
$lata = floatval($_POST['lata'] ?? 0);

$rata = rataKredytu($kwota, $oprocentowanie, $lata);

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wynik kalkulatora</title>

</head>
<body>
<div class="box">
    <h2>Wynik</h2>

    <div class="wynik">
        Miesięczna rata: <b><?php echo number_format($rata, 2, ',', ' '); ?> PLN</b>
    </div>

    <a href="test.html">Powrót</a>
</div>
</body>
</html>
