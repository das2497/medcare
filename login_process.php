<?php

session_start();

require "connection.php";

$Munm = $_POST["Munm"];
$Mpswd = $_POST["Mpswd"];
$Mrm = $_POST["Mrm"];

if (empty($Munm)) {
    echo "Please Enter Your Username";
} elseif (empty($Mpswd)) {
    echo "Please Enter Your Password";
} else {

    $rs1 = Database::search("SELECT * FROM admin WHERE username='" . $Munm . "' AND password='" . $Mpswd . "';");

    // echo $rs->num_rows;

    if ($rs1->num_rows > 0) {

        $_SESSION["AD"] = $rs1->fetch_assoc();

        if ($Mrm == "true") {
            setcookie("mun", $Munm, time() + (60 * 60 * 24 * 365));
            setcookie("mpswd", $Mpswd, time() + (60 * 60 * 24 * 365));
        }

        echo "success";
    } else {
        echo "Invalid User Details";
    }
 }
