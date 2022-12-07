<?php

session_start();

require 'connection.php';

$rs = Database::search("SELECT * FROM patient
INNER JOIN gender ON patient.gender=gender.id
INNER JOIN responsible ON patient.responsible=responsible.responsible_id
WHERE preg_no='" . $_POST["preg"] . "';");

$d = $rs->fetch_assoc();

?>

<div class="row pt-4 shadow">
    <div class="col-12 col-lg-6 offset-lg-3"><label class="labels">Registration Number</label>
        <input type="text" class="form-control" placeholder="Username" value="<?php echo $d["preg_no"]; ?>" id="rppreg_no" readonly>
    </div>
    <div class="col-12 col-lg-6"><label class="labels">Username</label>
        <input type="text" class="form-control" placeholder="Username" value="<?php echo $d["uname"]; ?>" id="rpuname">
    </div>
    <div class="col-12 col-lg-6"><label class="labels">Full Name</label>
        <input type="text" class="form-control" placeholder="Name" value="<?php echo $d["name"]; ?>" id="rpname">
    </div>
    <div class="col-md-12 col-lg-6"><label class="labels">Gender</label>
        <select id="rpgender_type" class="form-control">
            <option value="0">Select Gender</option>
            <?php
            $grs = Database::search("SELECT * FROM gender;");
            $gn = $grs->num_rows;
            for ($i = 0; $i < $gn; $i++) {
                $gd = $grs->fetch_assoc();
                if ($gd["id"] == $d["id"]) {
            ?>
                    <option value="<?php echo $gd["id"]; ?>" selected><?php echo $gd["gender_type"]; ?></option>
                <?php
                } else {
                ?>
                    <option value="<?php echo $gd["id"]; ?>"><?php echo $gd["gender_type"]; ?></option>
            <?php
                }
            }
            ?>
        </select>
    </div>
    <div class="col-md-12 col-lg-6"><label class="labels">N.I.C.</label>
        <input type="text" class="form-control" placeholder="Email" value="<?php echo $d["nic"]; ?>" id="rpnic">
    </div>
    <div class="col-12 col-md-6"><label class="labels">Birthday</label>
        <input type="text" class="form-control" placeholder="Grade" value="<?php echo $d["dob"]; ?>" id="rpdob">
    </div>
    <div class="col-12 col-md-6"><label class="labels">Address</label>
        <input type="text" class="form-control" placeholder="Subject" value="<?php echo $d["address"]; ?>" id="rpaddress">
    </div>
    <div class="col-12 col-md-6"><label class="labels">Contact</label>
        <input type="text" class="form-control" placeholder="Subject" value="<?php echo $d["contact"]; ?>" id="rpcontact">
    </div>
    <div class="col-12 col-md-6"><label class="labels">Responsible</label>
        <select id="rpperson" class="form-control">
            <option value="0">Select Responsible Person</option>
            <?php
            $resrs = Database::search("SELECT * FROM responsible;");
            $resn = $resrs->num_rows;
            for ($i = 0; $i < $resn; $i++) {
                $resd = $resrs->fetch_assoc();
                if ($resd["responsible_id"] == $resd["responsible_id"]) {
            ?>
                    <option value="<?php echo $resd["responsible_id"]; ?>" selected><?php echo $resd["person"]; ?></option>
                <?php
                } else {
                ?>
                    <option value="<?php echo $resd["responsible_id"]; ?>"><?php echo $resd["person"]; ?></option>
            <?php
                }
            }
            ?>
        </select>
    </div>
    <div class="col-12 col-md-6"><label class="labels">special Notes</label>
        <textarea class="form-control" cols="auto" rows="auto" id="rpnotes"><?php echo $d["notes"]; ?></textarea>
    </div>
    <div class="col-md-12 col-lg-6"><label class="labels">Password</label>
        <input type="text" class="form-control" placeholder="Password" value="<?php echo $d["pass"]; ?>" id="rppass">
    </div>

    <div class="col-10 offset-1 col-lg-4 offset-lg-1 d-grid my-4">
        <button class="btn btn-primary profile-button" type="button" onclick="pdtails_update('<?php echo $d['preg_no']; ?>');">Update Profile</button>
    </div>
    <div class="col-10 offset-1 col-lg-4 offset-lg-1 d-grid my-4">
        <button class="btn btn-danger profile-button" type="button" onclick="pdtails_back();">Go Back</button>
    </div>
</div>