<?php session_start(); ?>
<?php
    $_SESSION["inv"] = "";
    if(isset($_POST["submit"])){
    if (empty($_POST["email"]) || empty($_POST["pass"]) || $_POST["email"] != "a@a.a" || $_POST["pass"] != "aaa") {
        $_SESSION["inv"] = "Invalid email and/or password";
        header("Location: login.php"); 
        die();
        
    }
    else {
        header("Location: index.php"); 
        die();
    }
    }
?>