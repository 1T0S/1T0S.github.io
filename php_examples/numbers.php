<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numbers</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body style="color: white;">
<h1>Zadej, kolik čísel chceš vypočítat</h1>
<form action="primes.php" method="post">
    <label for="boundary">Počet čísel: </label>
    <input type="number" name="boundary" id="boundary"><br>
    <label for="primes">Primes</label>
    <input type="radio" name="vypocet" id="primes" value="primes" checked>
    <label for="fibonacci">Fibonacci</label>
    <input type="radio" name="vypocet" id="fibonacci" value="fibonacci">
    <input type="submit" value="Vypočítej!">
</form>
</body>
</html>