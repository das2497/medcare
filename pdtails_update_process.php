<?php

session_start();

require 'connection.php';

if (empty($_POST["puname"])) {
    echo "please don't empty username field";
} elseif (empty($_POST["pfullname"])) {
    echo "please don't empty name field";
} elseif ($_POST["pgender"] == '0') {
    echo "please select gender";
} elseif (empty($_POST["pnic"])) {
    echo "please don't empty NIC field";
} elseif (empty($_POST["pdob"])) {
    echo "please don't empty date of birth field";
} elseif (empty($_POST["paddress"])) {
    echo "please don't empty address field";
} elseif (empty($_POST["pcontact"])) {
    echo "please don't empty contact field";
} elseif ($_POST["presponsible"] == '0') {
    echo "please don't empty responsible person field";
} elseif (empty($_POST["pspecialnotes"])) {
    echo "please don't empty Special Notes field";
} elseif (empty($_POST["ppass"])) {
    echo "please don't empty Password field";
} else {

    Database::iud("UPDATE patient SET uname='" . $_POST["puname"] . "', `name`='" . $_POST["pfullname"] . "', gender='" . $_POST["pgender"] . "', 
    nic='" . $_POST["pnic"] . "', dob='" . $_POST["pdob"] . "', `address`='" . $_POST["paddress"] . "', contact='" . $_POST["pcontact"] . "', 
    notes='" . $_POST["pspecialnotes"] . "', responsible='" . $_POST["presponsible"] . "', pass='" . $_POST["ppass"] . "' WHERE preg_no='" . $_POST["ppreg_no"] . "';");

    echo "Successfully Updated";
}
