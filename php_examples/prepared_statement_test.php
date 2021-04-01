<?php
$server = "localhost";
$user = "root";
$password = "root";
$db = "dbdocs";

try{
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $statement = $conn->prepare("INSERT INTO os(name, age) VALUES(:name, :age);");
    $statement->bindParam(":name", $name);
    $statement->bindParam(":age", $age);

    $os = ["Debian", "Raspbian", "Damian", "Manjaro", "PureOS", "Unix", "Pop!_os"];
    foreach($os as $system){
        $name = $system;
        $age = rand(0, 20);
        $statement->execute();
    }
} catch(PDOException $e){
    echo $e->getMessage();
}