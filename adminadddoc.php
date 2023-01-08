<?php

require 'connection.php';

// echo $_POST["uname"] . $_POST["name"] . $_POST["speslt"];

if (empty($_POST["uname"])) {
    echo "1";
} else if (empty($_POST["name"])) {
    echo "2";
} else if (empty($_POST["speslt"])) {
    echo "3";
} else if (empty($_POST["pass"])) {
    echo "4";
} else {

    $rs1 = Database::search("SELECT * FROM doctor 
    WHERE uname='" . $_POST["uname"] . "' OR NAME='" . $_POST["name"] . "';");

    // echo "SELECT * FROM doctor 
    // WHERE uname='" . $_POST["uname"] . "' OR NAME='" . $_POST["name"] . "';";

    if ($rs1->num_rows > 0) {
        echo "This Doctor Name Or Username Already Used";
    } else {

        Database::iud("INSERT INTO doctor(uname,NAME,specialty,PASSWORD) 
        VALUES('" . $_POST["uname"] . "','" . $_POST["name"] . "','" . $_POST["speslt"] . "','" . $_POST["pass"] . "');");

        echo "Success";
    }
}
