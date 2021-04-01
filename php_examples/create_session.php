<?php
session_start();
if(isset($_SESSION["name"]) && isset($_SESSION["email"])){
    $_SESSION["counter"] += 1;
    header("Location: session_output.php");
} else{
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["age"] = $_POST["age"];
    $_SESSION["counter"] = 1;
    header("Location: session_output.php");

}