<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "dbdocs";
// Vaše ubuntu bylo napadeno

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE os(
            id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
            name VARCHAR(30) NOT NULL,
            age INT NOT NULL
        )";
    $conn->exec($sql);
    echo("Tabulka byla vytvořena<br>");

    $sql = "INSERT INTO os(name, age) VALUES
            (\"Gentoo\", 20),
            (\"TempleOS\", 9),
            (\"Arch Linux\", 23);";
    $conn->exec($sql);
    echo("Přidány záznamy<br>");

    $statement = $conn->prepare("INSERT INTO os(name, age) VALUES (:name, :age);");
    $statement->bindParam(":name", $name);
    $statement->bindParam(":age", $age);

    $name = "Linux Mint";
    $age = 11;
    $statement->execute();

    $name = "Ubuntu";
    $age = 17;
    $statement->execute();

    echo("Dva záznamy přidány<br>");

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
