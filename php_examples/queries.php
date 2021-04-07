<head>
    <meta charset="UTF-8">
    <title>ALE FAJNY BOBER</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<h1>Operační systémy:</h1>
<?php
    // Connection info
    $server = "localhost";
    $name = "root";
    $password = "root";
    $dbName = "dbdocs";

    try{
        // Connect to db
        $connection = new PDO("mysql:host=$server;dbname=$dbName", $name, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Create prepared statement
        $statement = $connection->prepare("SELECT name, age FROM os WHERE age > :age;");
        $statement->bindParam(":age", $age);

        // Get systems older than $age years
        $age = 15;
        echo("<h1>Systémy starší než $age let:</h1>");
        $statement->execute();
        $data = $statement->fetchAll();
        foreach($data as $row){
            echo("<p>Systém: " . $row["name"] . ", doba vývoje: " . $row["age"] . " let.</p>");
        }

        // Older than 19 years
        $age = 19;
        echo("<h1>Systémy starší než $age let:</h1>");
        $statement->execute();
        $result = $statement->fetchAll();
        foreach($result as $row){
            echo("<p>Systém: " . $row["name"] . ", doba vývoje: " . $row["age"] . " let.</p>");
        }


    } catch(PDOException $e){
        echo $e->getMessage();
    }
?>
</body>

