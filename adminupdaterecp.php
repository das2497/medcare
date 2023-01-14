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
} else if ($_POST["gender"] == "x") {
    echo "Please select gender";
} else {


    Database::search("UPDATE uname='" . $_POST["uname"] . "', NAME='" . $_POST["name"] . "', nic='" . $_POST["nic"] . "', 
    contact='" . $_POST["contact"] . "' gender='" . $_POST["gender"] . "' WHERE res_id='" . $_POST["id"] . "';");

    echo "Successfully Updated";
}
