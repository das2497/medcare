<?php
session_start();
require 'connection.php';

$rs = Database::search("SELECT * FROM d_chanel_time
INNER JOIN doctor ON d_chanel_time.doc_id=doctor.id
WHERE doctor.id='" . $_POST["did"] . "' AND stat='1' AND DATE(d_chanel_time.date_time) > CURDATE();");

echo "SELECT * FROM d_chanel_time
INNER JOIN doctor ON d_chanel_time.doc_id=doctor.id
WHERE doctor.id='" . $_POST["did"] . "' AND stat='1' AND DATE(d_chanel_time.date_time) > CURDATE();";


if ($rs->num_rows > 0) {

?>

    <div class="col-12">
        <label for="" class="form-label shadow p-4 rounded fw-bold"><?php echo $_POST["dname"] ?></label>
        <table class="table table-responsive table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Time</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

                <?php
                date_default_timezone_set("Asia/Colombo");
                $currentTime = date("h:i a");
                $currentDate = date("n.j.Y");
                for ($i = 0; $i < $rs->num_rows; $i++) {

                    $d = $rs->fetch_assoc();

                    $time = new DateTime($d["date_time"]);
                    $date = $time->format('n.j.Y');
                    $day = date('l', strtotime($d["date_time"]));
                    $time = $time->format('h:i a');

                    if ($currentDate > $date) {
                        Database::iud("UPDATE d_chanel_time SET stat='0' WHERE chnl_id='" . $d['chnl_id'] . "'");
                    }

                ?>

                    <tr class="table-primary">
                        <td><?php echo $day . " " . $date; ?></td>
                        <td><?php echo $time; ?></td>
                        <td><button onclick="make_appointment('<?php echo $d['chnl_id']; ?>','<?php echo $_SESSION['PT']['id']; ?>');" class="btn btn-primary">Make Appoinment</button></td>
                    </tr>

                <?php
                }
                ?>

            </tbody>
        </table>
    </div>

<?php

} else {

?>

    <div class="col-12">
        <h4 class="alert-warning text-center py-2 mb-2">Channelings Not Sheduled</h4>
    </div>

<?php


}

?>

<div class="col-10 offset-1 col-lg-2 offset-lg-5 d-grid">
    <button onclick="d_chnl_back();" class="btn btn-outline-danger fw-bold">Go Back</button>
</div>