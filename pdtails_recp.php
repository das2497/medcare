<?php
session_start();
require 'connection.php';

$prs = Database::search("SELECT *
FROM patient
INNER JOIN gender ON patient.gender=gender.id
INNER JOIN responsible ON patient.responsible=responsible.responsible_id;");

$pn = $prs->num_rows;
?>
<table class="table table-responsive table-striped ">
    <thead>
        <th>Registration No</th>
        <th>patient Name</th>
        <th>Details</th>
    </thead>
    <tbody>
        <?php
        for ($i = 0; $i < $pn; $i++) {
            $pd = $prs->fetch_assoc();
        ?>
            <tr class="table-info">
                <td><?= $pd["preg_no"] ?></td>
                <td><?= $pd["name"] ?></td>
                <td><button onclick="recp_patient_dtails('<?= $pd['preg_no'] ?>');" class="btn btn-outline-primary fw-bold">View Details</button></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>