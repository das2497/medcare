<?php

require 'connection.php';
session_start();

if (empty($_POST["uname"])) {
    echo "Please enter username";
} else if (empty($_POST["name"])) {
    echo "Please enter name";
} else if (empty($_POST["nic"])) {
    echo "Please enter NIC";
} else if (empty($_POST["contact"])) {
    echo "Please enter contact no";
} else if ($_POST["gndr"] == "x") {
    echo "Please select gender";
} else if (empty($_POST["pass"])) {
    echo "Please enter password";
} else {

    $rs = Database::search("SELECT * FROM receptionist WHERE uname='" . $_POST["uname"] . "' OR nic='" . $_POST["nic"] . "';");

    if ($rs->num_rows > 0) {
        echo "Already Registered";
    } else {

        Database::iud("INSERT INTO (uname,NAME,nic,contact,pass,gender) 
        VALUES ('".$_POST["uname"]."','".$_POST["name"]."','".$_POST["nic"]."','".$_POST["contact"]."','".$_POST["gndr"]."','".$_POST["pass"]."');");

        echo "Successfully Added";

    }

}
