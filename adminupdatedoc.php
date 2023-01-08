<?php

require 'connection.php';
session_start();

if (empty($_POST["uname"])) {
    echo "Please enter username";
} else if (empty($_POST["name"])) {
    echo "Please enter name";
} else if (empty($_POST["specilt"])) {
    echo "Please select speciality";
} else {

    // echo $_POST["uname"] . $_POST["name"] . $_POST["specilt"];

    Database::search("UPDATE doctor SET uname='".$_POST["uname"]."', NAME='".$_POST["name"]."', specialty='".$_POST["specilt"]."' WHERE id='".$_POST["id"]."';");

    echo "Successfully Updated";
}
