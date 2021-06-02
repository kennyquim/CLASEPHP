<?php

    if (isset($_POST["name"]) && isset($_POST["lastName"]) && isset($_POST["email"])){
       if ($_POST["name"] !== "" && $_POST["lastName"] !== "" && $_POST["email"] !== ""){
           $value = 1;
        } else {
           $value = 0;
        }
    }

    echo $lastName."value";

    header("location: ./index2.php?confirm=".$value)
?>