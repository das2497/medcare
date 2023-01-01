<?php


require 'connection.php';

$rs = Database::search("SELECT * FROM patient WHERE preg_no='" . $_POST["pid"] . "';");

if ($rs->num_rows > 0) {

    if (isset($_FILES["file"])) {

        $file = $_FILES["file"];

        $allowed_image_extensions = array("application/pdf");

        if (in_array($file["type"], $allowed_image_extensions)) {

            $file_name = "lab_reports/" . uniqid() . $file["name"];
            move_uploaded_file($file["tmp_name"], $file_name);

            date_default_timezone_set('Asia/Colombo');
            $date = date('Y-m-d');

            Database::iud("INSERT INTO lab_reports(petiont_id,path,DATE) VALUES('" . $_POST["pid"] . "','" . $file_name . "','" . $date . "');");
            echo "Successfull";
        } else {
            echo "Invalid file type </br> Please Try Again";
        }
    }
} else {
    echo "Invalid Patient ID";
}
