
<?php

require 'connection.php';

//  echo "DELETE doctor WHERE id='" . $_POST["id"] . "' AND uname='" . $_POST["uname"] . "';";

$rs = Database::search("SELECT *
FROM doctor
WHERE id='" . $_POST["id"] . "' AND uname='" . $_POST["uname"] . "';");

if ($rs->num_rows > 0) {

    Database::iud("DELETE FROM doctor WHERE id='" . $_POST["id"] . "' AND uname='" . $_POST["uname"] . "';");

    echo "Success";
} else {
    echo "Please Update Doctor Details First";
}
