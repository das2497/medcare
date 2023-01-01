<?php

require 'connection.php';

?>


<div class="col-10 offset-1 col-lg-8 offset-lg-0 shadow m-2">
    <?php
    $dcrs = Database::search("SELECT *
                                    FROM patient_channels
                                    INNER JOIN patient ON patient_channels.patient_id=patient.id
                                    INNER JOIN d_chanel_time ON patient_channels.chnl_id=d_chanel_time.chnl_id
                                    WHERE d_chanel_time.doc_id='1' AND 
                                    DAY(d_chanel_time.date_time) < CURDATE() AND 
                                    patient_channels.paid='1' AND 
                                    patient_channels.`status`='1';");

    $dcn = $dcrs->num_rows;

    ?>
    <h4 class="text-center">Today My Appoinments</h4>
    <table class="table table-responsive table-striped">
        <thead>
            <tr>
                <th>Patient Registration No</th>
                <th>Patient Name</th>
                <th>Open</th>
            </tr>
        </thead>
        <tbody>
            <?php

            for ($i = 0; $i < $dcn; $i++) {
                $dcd = $dcrs->fetch_assoc();
            ?>
                <tr class="table-info">
                    <td><?= $dcd["preg_no"]; ?></td>
                    <td><?= $dcd["name"]; ?></td>
                    <td>
                        <button id="pchecked" class="btn btn-outline-primary fw-bold" onclick="checkedPatient('<?= $dcd['preg_no']; ?>');">Open Appoinment</button>
                    </td>
                </tr>
            <?php
            }

            ?>
        </tbody>
    </table>
</div>