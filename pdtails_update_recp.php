<?php

session_start();

require 'connection.php';

// preg_no
// rpuname
// rpname
// rpgender_type
// rpnic
// rpdob
// rpaddress
// rpcontact
// rpperson
// rpnotes
// rppass
if (empty($_POST["rpuname"])) {
    echo "please don't empty username field";
} elseif (empty($_POST["rpname"])) {
    echo "please don't empty name field";
} elseif ($_POST["rpgender_type"] == '0') {
    echo "please select gender";
} elseif (empty($_POST["rpnic"])) {
    echo "please don't empty NIC field";
} elseif (empty($_POST["rpdob"])) {
    echo "please don't empty date of birth field";
} elseif (empty($_POST["rpaddress"])) {
    echo "please don't empty address field";
} elseif (empty($_POST["rpcontact"])) {
    echo "please don't empty contact field";
} elseif ($_POST["rpperson"] == '0') {
    echo "please don't empty responsible person field";
} elseif (empty($_POST["rpnotes"])) {
    echo "please don't empty Special Notes field";
} elseif (empty($_POST["rppass"])) {
    echo "please don't empty Password field";
} else {

    Database::iud("UPDATE patient SET uname='" . $_POST["rpuname"] . "', `name`='" . $_POST["rpname"] . "', gender='" . $_POST["rpgender_type"] . "', 
    nic='" . $_POST["rpnic"] . "', dob='" . $_POST["rpdob"] . "', `address`='" . $_POST["rpaddress"] . "', contact='" . $_POST["rpcontact"] . "', 
    notes='" . $_POST["rpnotes"] . "', responsible='" . $_POST["rpperson"] . "', pass='" . $_POST["rppass"] . "' WHERE preg_no='" . $_POST["rppreg_no"] . "';");

    echo "Successfully Updated";
}
