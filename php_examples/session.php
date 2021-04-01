<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Session test</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body style="color: white;">
<h1>Vytvoření sessiony</h1>
<form action="create_session.php" method="post">
    <label for="name">Name: </label>
    <input type="text" name="name" id="name"><br>
    <label for="age">Age: </label>
    <input type="text" name="age" id="age"><br>
    <label for="email">Email: </label>
    <input type="text" name="email" id="email"><br>
    <input type="submit" name="Vytvoř session!">
</form>
</body>
</html>

<?php
