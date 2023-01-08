<?php

session_start();

require 'connection.php';

?>

<table class="w-100 table-responsive table-striped">
    <thead>
        <tr>
            <th class="text-center">Username</th>
            <th class="text-center">Name</th>
            <th class="text-center">Speciality</th>
            <th class="text-center">Update</th>
            <th class="text-center">Delete</th>
        </tr>
    </thead>
    <tbody class="alert-info table-hover">
        <?php
        $rsdoc = Database::search("SELECT doctor.id, doctor.uname, doctor.name, doctor.specialty, doctor.password, specialies.speciality
                                                            FROM doctor
                                                            INNER JOIN specialies ON doctor.specialty=specialies.id ORDER BY doctor.id ASC;");

        $ndoc = $rsdoc->num_rows;

        for ($i = 0; $i < $ndoc; $i++) {
            $rddoc = $rsdoc->fetch_assoc();
        ?>
            <tr>
                <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rddoc["uname"]; ?>" id="<?= $rddoc['id']; ?>1"></td>
                <td class="text-center p-1"><input class="form-control" type="text" value="<?= $rddoc["name"]; ?>" id="<?= $rddoc['id']; ?>2"></td>
                <td class="text-center p-1">
                    <select class="form-control" id="<?= $rddoc['id']; ?>3">
                        <option value="0">Select Speciality</option>
                        <?php
                        $rsdocslct = Database::search("SELECT * FROM specialies;");
                        for ($j = 0; $j < $rsdocslct->num_rows; $j++) {
                            $docslctd = $rsdocslct->fetch_assoc();

                            // echo $docslctd["speciality"];

                            if ($docslctd["id"] == $rddoc["specialty"]) {
                        ?>
                                <option value="<?= $docslctd["id"]; ?>" selected><?= $docslctd["speciality"]; ?></option>
                            <?php
                            } else {
                            ?>
                                <option value="<?= $docslctd["id"]; ?>"><?= $docslctd["speciality"]; ?></option>
                        <?php
                            }
                        }
                        ?>
                    </select>
                </td>
                <td class="text-center p-1"><button class="btn btn-outline-primary w-100 fw-bold " onclick="admin_update_doc('<?= $rddoc['id']; ?>');">Update</button></td>
                <td class="text-center p-1"><button class="btn btn-outline-danger w-100 fw-bold ">Delete</button></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>