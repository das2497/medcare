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
    INNER JOIN responsible ON patient.responsible=responsible.responsible_id
     WHERE patient.uname='" . $Munm . "' AND patient.pass='" . $Mpswd . "';");

    $rs2 = Database::search("SELECT * FROM admin 
    WHERE username='" . $Munm . "' AND PASSWORD='" . $Mpswd . "';");

    $rs3 = Database::search("SELECT * FROM doctor 
    INNER JOIN specialies ON doctor.specialty=specialies.id 
    WHERE doctor.uname='" . $Munm . "' AND doctor.password='" . $Mpswd . "';");

    $rs4 = Database::search("SELECT * FROM receptionist
    INNER JOIN gender ON receptionist.gender=gender.id
    WHERE receptionist.uname='" . $Munm . "' AND receptionist.pass='" . $Mpswd . "';");

    $rs5 = Database::search("SELECT *
    FROM nurse
    WHERE uname='" . $Munm . "' AND passwrd='" . $Mpswd . "';");

    $rs6 = Database::search("SELECT *
    FROM pharmcist
    WHERE uname='" . $Munm . "' AND passs='" . $Mpswd . "';");

    // echo "SELECT *
    // FROM `med`.`nurse`
    // WHERE uname='" . $Munm . "' AND passwrd='" . $Mpswd . "';";

    if (!empty($rs1) && $rs1->num_rows > 0) {

        $_SESSION["PT"] = $rs1->fetch_assoc();

        if ($Mrm == "true") {
            setcookie("mun", $Munm, time() + (60 * 60 * 24 * 365));
            setcookie("mpswd", $Mpswd, time() + (60 * 60 * 24 * 365));
        }

        echo "1";
    } elseif (!empty($rs2) && $rs2->num_rows > 0) {

        $_SESSION["AD"] = $rs2->fetch_assoc();

        if ($Mrm == "true") {
            setcookie("mun", $Munm, time() + (60 * 60 * 24 * 365));
            setcookie("mpswd", $Mpswd, time() + (60 * 60 * 24 * 365));
        }

        echo "2";
    } elseif (!empty($rs3) && $rs3->num_rows > 0) {

        $_SESSION["DT"] = $rs3->fetch_assoc();

        if ($Mrm == "true") {
            setcookie("mun", $Munm, time() + (60 * 60 * 24 * 365));
            setcookie("mpswd", $Mpswd, time() + (60 * 60 * 24 * 365));
        }

        echo "3";
    } elseif (!empty($rs4) && $rs4->num_rows > 0) {

        $_SESSION["RP"] = $rs4->fetch_assoc();

        if ($Mrm == "true") {
            setcookie("mun", $Munm, time() + (60 * 60 * 24 * 365));
            setcookie("mpswd", $Mpswd, time() + (60 * 60 * 24 * 365));
        }

        echo "4";
    } elseif (!empty($rs5) && $rs5->num_rows > 0) {

        $_SESSION["NR"] = $rs5->fetch_assoc();

        if ($Mrm == "true") {
            setcookie("mun", $Munm, time() + (60 * 60 * 24 * 365));
            setcookie("mpswd", $Mpswd, time() + (60 * 60 * 24 * 365));
        }

        echo "5";
    } elseif (!empty($rs6) && $rs6->num_rows > 0) {

        $_SESSION["PH"] = $rs6->fetch_assoc();

        if ($Mrm == "true") {
            setcookie("mun", $Munm, time() + (60 * 60 * 24 * 365));
            setcookie("mpswd", $Mpswd, time() + (60 * 60 * 24 * 365));
        }

        echo "6";
    } else {
        echo "Invalid User Details";
    }
}
