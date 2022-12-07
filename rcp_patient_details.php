<?php

session_start();

require 'connection.php';

$rs = Database::search("SELECT * FROM patient
INNER JOIN gender ON patient.gender=gender.id
INNER JOIN responsible ON patient.responsible=responsible.id
WHERE preg_no='" . $_POST["preg"] . "';");

$d = $rs->fetch_assoc();

?>

<div class="row pt-4 shadow">
    <div class="col-12 col-lg-6 offset-lg-6"><label class="labels">Registration Number</label>
        <input type="text" class="form-control" placeholder="Username" value="<?php echo $d["preg_no"]; ?>" id="THpreg_no">
    </div>
    <div class="col-12 col-lg-6"><label class="labels">Username</label>
        <input type="text" class="form-control" placeholder="Username" value="<?php echo $d["uname"]; ?>" id="THuname">
    </div>
    <div class="col-12 col-lg-6"><label class="labels">Full Name</label>
        <input type="text" class="form-control" placeholder="Name" value="<?php echo $d["name"]; ?>" id="THfulnm">
    </div>
    <div class="col-md-12 col-lg-6"><label class="labels">Gender</label>
        <input type="text" class="form-control" placeholder="Email" value="<?php echo $d["gender_type"]; ?>" id="THemail">
    </div>
    <div class="col-md-12 col-lg-6"><label class="labels">N.I.C.</label>
        <input type="text" class="form-control" placeholder="Email" value="<?php echo $d["nic"]; ?>" id="THemail">
    </div>
    <div class="col-12 col-md-6"><label class="labels">Birthday</label>
        <input type="text" class="form-control" placeholder="Grade" value="<?php echo $d["dob"]; ?>">
    </div>
    <div class="col-12 col-md-6"><label class="labels">Address</label>
        <input type="text" class="form-control" placeholder="Subject" value="<?php echo $d["address"]; ?>">
    </div>
    <div class="col-12 col-md-6"><label class="labels">Contact</label>
        <input type="text" class="form-control" placeholder="Subject" value="<?php echo $d["contact"]; ?>">
    </div>
    <div class="col-12 col-md-6"><label class="labels">Responsible</label>
        <input type="text" class="form-control" placeholder="Subject" value="<?php echo $d["person"]; ?>">
    </div>
    <div class="col-12 col-md-6"><label class="labels">special Notes</label>
        <textarea class="form-control" id="" cols="auto" rows="auto"><?php echo $d["notes"]; ?></textarea>
    </div>
    <div class="col-md-12 col-lg-6"><label class="labels">Password</label>
        <input type="text" class="form-control" placeholder="Password" value="<?php echo $d["pass"]; ?>" id="THpass">
    </div>

    <div class="col-10 offset-1 col-lg-4 offset-lg-1 d-grid my-4">
        <button class="btn btn-primary profile-button" type="button" onclick="pdtails_update('<?php echo $d['preg_no']; ?>');">Update Profile</button>
    </div>
    <div class="col-10 offset-1 col-lg-4 offset-lg-1 d-grid my-4">
        <button class="btn btn-danger profile-button" type="button" onclick="pdtails_back();">Go Back</button>
    </div>
</div>