
<?php
require 'connection.php';
Database::iud("DELETE FROM receptionist WHERE uname='" . $_POST["uname"] . "' AND nic='" . $_POST["nic"] . "';");
echo "Success";
