<?php

require 'connection.php';

$rs = Database::search("SELECT * FROM d_chanel_time
INNER JOIN doctor ON d_chanel_time.doc_id=doctor.id
WHERE doctor.id='" . $_POST["did"] . "';");

$d = $rs->fetch_assoc();

?>

<link rel="stylesheet" href="bootstrap.css">

<div class="col-12">
    <label for="" class="form-label shadow p-4 rounded fw-bold"><?php echo $d["name"] ?></label>
    <table class="table table-responsive table-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Time</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-primary">
                <td><?php echo $d["name"] ?></td>
                <td><?php echo $d["name"] ?></td>
                <td><button class="btn btn-primary">Make Appoinment</button></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="col-10 offset-1 col-lg-4 offset-lg-8 d-grid">
    <button class="btn btn-danger">Go Back</button>
</div>