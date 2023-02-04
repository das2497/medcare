<?php

require 'connection.php';
session_start();

if (empty($_POST["uname"])) {
    echo "Please enter username";
} else if (empty($_POST["name"])) {
    echo "Please enter name";
} else if (empty($_POST["nic"])) {
    echo "Please enter NIC";
} else if (empty($_POST["pass"])) {
    echo "Please enter password";
} else {

    $rs = Database::search("SELECT * FROM nurse WHERE uname='" . $_POST["uname"] . "' AND nic='" . $_POST["nic"] . "';");

    if ($rs->num_rows > 0) {
        echo "Already Registered";
    } else {

        Database::iud("INSERT INTO nurse(uname,NAME,passwrd,nic) VALUES ('" . $_POST["uname"] . "','" . $_POST["name"] . "','" . $_POST["pass"] . "','" . $_POST["nic"] . "');");

        echo "Successfully Added";
    }
}
