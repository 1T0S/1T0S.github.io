<head>
    <meta charset="UTF-8">
    <title>Session test</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
<?php
session_start();
echo("<p>Uživatel: " . $_SESSION["name"] . "<br></p>") ;
echo("<p>Věk: " . $_SESSION["age"] . "<br></p>");
echo("<p>Email: " . $_SESSION["email"] . "<br></p>");
echo("<p>Počet návštěv: " . $_SESSION["counter"] . "<br></p>");
?>
</body>