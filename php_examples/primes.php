<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Numbers</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<h1>Zadej, kolik prime čísel chceš vypočítat</h1>
</body>
</html>

<?php
$boundary = $_POST["boundary"];
$type = $_POST["vypocet"];

if(!isset($boundary)){
    $boundary = 100;
}

if($type == "primes"){
    $count = 0;
    for($i = 2; ; $i++){
        $prime = true;
        if($count >= $boundary)
            break;
        for($j = 2; $j < $i; $j++){
            if($i % $j == 0){
                $prime = false;
                break;
            }
        }
        if($prime){
            $count++;
            echo "<p>#$count. -> Číslo $i je prime</p><br>";
        }
    }
} else if($type == "fibonacci"){
    $count = 0;
    $a = 1;
    $b = 0;
    while($count != $boundary){
        echo("<p>#$count. -> $b</p><br>");
        $count++;
        $a = $a + $b;
        $b = $a - $b;
    }
}