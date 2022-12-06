<?php

require 'connection.php';

$rs = Database::search("SELECT * FROM d_chanel_time
INNER JOIN doctor ON d_chanel_time.doc_id=doctor.id
WHERE doctor.id='" . $_POST["did"] . "';");



?>

<link rel="stylesheet" href="bootstrap.css">

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
            for ($i = 0; $i < $rs->num_rows; $i++) {

                $d = $rs->fetch_assoc();

                $time = new DateTime($d["date_time"]);
                $date = $time->format('n.j.Y');
                $day = date('l', strtotime($d["date_time"]));
                $time = $time->format('H:i');

            ?>

                <tr class="table-primary">
                    <td><?php echo $day . " " . $date; ?></td>
                    <td><?php echo $time; ?></td>
                    <td><button onclick="make_appointment('<?php echo $d['chnl_id']; ?>');" class="btn btn-primary">Make Appoinment</button></td>
                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
</div>

<div class="col-10 offset-1 col-lg-4 offset-lg-8 d-grid">
    <button onclick="d_chnl_back();" class="btn btn-danger">Go Back</button>
</div>