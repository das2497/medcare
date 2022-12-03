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

    $rs1 = Database::search("SELECT * FROM patient
    INNER JOIN gender ON patient.gender=gender.id
    INNER JOIN responsible ON patient.responsible=responsible.id
     WHERE uname='" . $Munm . "' AND pass='" . $Mpswd . "';");

    $rs2 = Database::search("SELECT * FROM admin WHERE username='" . $Munm . "' AND PASSWORD='" . $Mpswd . "';");

    $rs3 = Database::search("SELECT * FROM doctor INNER JOIN specialies ON doctor.specialty=specialies.id WHERE doctor.uname='" . $Munm . "' AND doctor.password='" . $Mpswd . "';");

    // echo $rs->num_rows;

    if ($rs1->num_rows > 0) {

        $_SESSION["PT"] = $rs1->fetch_assoc();

        if ($Mrm == "true") {
            setcookie("mun", $Munm, time() + (60 * 60 * 24 * 365));
            setcookie("mpswd", $Mpswd, time() + (60 * 60 * 24 * 365));
        }

        echo "1";
    }elseif ($rs2->num_rows > 0) {

        $_SESSION["AD"] = $rs2->fetch_assoc();

        if ($Mrm == "true") {
            setcookie("mun", $Munm, time() + (60 * 60 * 24 * 365));
            setcookie("mpswd", $Mpswd, time() + (60 * 60 * 24 * 365));
        }

        echo "2";
    }elseif ($rs3->num_rows > 0) {

        $_SESSION["DT"] = $rs3->fetch_assoc();

        if ($Mrm == "true") {
            setcookie("mun", $Munm, time() + (60 * 60 * 24 * 365));
            setcookie("mpswd", $Mpswd, time() + (60 * 60 * 24 * 365));
        }

        echo "3";
    } else {
        echo "Invalid User Details";
    }
}
