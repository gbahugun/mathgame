<?php session_start(); ?>
<?php include("header.php"); ?>
<?php
    $answer = $_POST["answer"];
    $_SESSION["ques"];
    if(!isset( $_SESSION["total"])) {
        $_SESSION["total"] = 0;
    }
    if(!isset($_SESSION["score"])) {
        $_SESSION["score"] = 0;
    }
    if(!isset($_SESSION["message"])) {
        $_SESSION["message"] = null;
    }
    
    if(!isset($_SESSION["right"])) {
        $_SESSION["right"] = null;
    }
    $_SESSION["ans"] = $_SESSION["var1"] + $_SESSION["mult"] * $_SESSION["var2"];
    
     if ($_SESSION["ans"] == $_POST["answer"]) {
            $_SESSION["total"]++;
            $_SESSION["score"]++;
            $_SESSION["message"] = null;
            $_SESSION["right"] = "You got it right!";
            header("Location: index.php"); 
            die();
        }
    else {
        $_SESSION["total"]++;
        $_SESSION["right"] = null;
        $_SESSION["message"] = "You got it wrong! The answer is ".$_SESSION["ans"];
        header("Location: index.php"); 
        die();
    }
?>