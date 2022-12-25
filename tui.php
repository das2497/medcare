<?php

session_start();

require "connection.php";

if (isset($_SESSION["PT"])) {

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>NAITA Main Account</title>
        <link rel="icon" href="assets/Untitled (800 × 800 px).svg">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
    </head>

    <body style="background-color: #24243e;">

        <div class="container-fluid">
            <div class="row">

                <div class="col-12">

                    <!-- header -->

                    <div class="row  border-bottom border-4 border-primary shadow-lg  d-block d-lg-none bg-dark">

                        <div class="col-12 col-lg-2 text-center text-lg-start ">
                            <img alt="NAITA logo" src="assets/Untitled (800 × 800 px).svg" width="60px" style="border-radius: 100%;">
                            <h4 class="d-block d-lg-inline mt-2 mt-lg-0 text-white">ADMIN | <?= $_SESSION["PT"]["name"]; ?></h4>
                        </div>

                        <div class="col-12 col-lg-3 offset-lg-7 pt-3 mb-4">

                            <nav class="navbar navbar-expand-lg navbar-light menu1 float-lg-end navbar-dark">
                                <div class="container-fluid">
                                    <!-- <a class="navbar-brand d-block d-lg-none text-white" href="#">Menu</a> -->
                                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        Menu<span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse text-end" id="navbarSupportedContent">
                                        <ul class="navbar-nav mb-2 mb-lg-0 text-center ">
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="dashmm();">Dashboard</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="Meetingsmm();">Meetings Shedule</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="studentsmm();">Students</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="univercitymm();">Univercities</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="assessorsmm();">Assessors</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="companymm();">Companies</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="reportsmm();">Reports</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold d-block d-lg-none" aria-current="page" href="#" onclick="monitoringmm();">Monitoring</a>
                                            </li>
                                            <hr class="border border-bottom border-4 mt-2">
                                            <li>
                                                <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">Help</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold" onclick="mainLogout();" href="#" tabindex="-1" aria-disabled="true">log out</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>

                        </div>

                    </div>

                    <!-- header -->

                    <!-- body -->

                    <div class="row ">
                        <div class="col-lg-2 col-12 border-end border-primary  border-4 shadow-lg position-fixed " style="background-color: #0e0e23;">

                            <div class="row d-none d-lg-block d-flex vh-100 px-2">
                                <div class="col-12 text-center mt-3">
                                    <img alt="NAITA logo" src="assets/Untitled (800 × 800 px).svg" width="60px" style="border-radius: 100%;">
                                    <h4 class="d-block  mt-2 mt-lg-0 text-white text-decoration-underline">PATIENT | <?= $_SESSION["PT"]["name"]; ?></h4>
                                </div>
                                <!-- <hr class="border-bottom border-white border-4"> -->
                                <div class="col-12 text-center g-4 my-4">
                                    <span class="fs-5 fw-normal text-white fw-bold">Main Account</span>
                                </div>
                                <hr class="border-bottom border-white border-4">
                                <hr>
                                <div class="col-12 text-center my-2 mm" onclick="dashmm();">
                                    <a href="#" class="nav-link fw-bold fs-5 text-white">Dashboard</a>
                                </div>
                                <div class="col-12 text-center my-2 mm" onclick="Meetingsmm();">
                                    <a href="#" class="nav-link fw-bold fs-5 text-white">Profile</a>
                                </div>
                                <div class="col-12 text-center my-2 mm" onclick="studentsmm();">
                                    <a href="#" class="nav-link fw-bold fs-5 text-white">Doctor Channel</a>
                                </div>
                                <div class="col-12 text-center my-2 mm" onclick="univercitymm()">
                                    <a href="#" class="nav-link fw-bold fs-5 text-white">Lab Reports</a>
                                </div>
                                <div class="col-12 text-center vh-100 " style="padding-top: 20%;">
                                    <div class="row">
                                        <div class="col-12 text-center mm">
                                            <a class="nav-link fw-bold text-warning" href="#">Help</a>
                                        </div>
                                        <div class="col-12 text-center mm">
                                            <a class="nav-link fw-bold text-warning" href="#">About Us</a>
                                        </div>
                                        <div class="col-12 text-center mm align-text-bottom">
                                            <a class="nav-link fw-bold  text-warning" onclick="mainLogout();" href="#">log out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" offset-lg-2 col-lg-10">
                            <div class="row p-4 d-flex vh-100">

                                <!-- Dashboard -->

                                <div class="col-12 col-lg-12 " id="dashmm">

                                    <h1 class="text-decoration-underline text-white text-center shadow  border border-2 border-primary p-2 rounded my-2 text-uppercase fw-bold">Dashboard</h1>

                                    <div class="row ">
                                        <div class="col-12 col-lg-6 shadow  py-2">


                                        </div>

                                        <div class="col-12 col-lg-5 offset-lg-1 shadow">
                                            <div class="row m-2">
                                                <div class="col-6 offset-6 d-grid">
                                                    <a href="addNewAdminAdmin.php" class="btn btn-outline-primary m-2 text-white fw-bold text-uppercase shadow" target="_blank">Add New Admin</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- Dashboard -->

                                <!-- Meetings Shedule -->

                                <div class="col-12 shadow-lg" id="meetsdmm" style="display: none;">

                                    <h1 class="text-decoration-underline text-white text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Meetings Shedule</h1>

                                    <div class="row ">
                                        <div class="col-12 col-lg-8 offset-lg-2 g-lg-2">
                                            <label class="form-label"><span class="text-danger">*</span>Coordinator</label>
                                            <small id="MunmSM" style="display: none;" class="small"></small>
                                            <input type="text" id="Meeshedl" class="form-control" placeholder="Pleace Enter Coordinator's Name">
                                        </div>
                                        <div class="col-12 col-lg-4 offset-lg-2  g-lg-2 d-grid">
                                            <label class="form-label"><span class="text-danger">*</span>Date</label>
                                            <small id="MunmSM" style="display: none;" class="small"></small>
                                            <input type="date" name="" class="form-control" id="MDate">
                                        </div>
                                        <div class="col-12 col-lg-4 g-lg-2 d-grid">
                                            <label class="form-label"><span class="text-danger">*</span>Time</label>
                                            <small id="MunmSM" style="display: none;" class="small"></small>
                                            <input type="time" name="" class="form-control" id="MTime">
                                        </div>
                                        <div class="col-12 col-lg-4 offset-lg-2 g-lg-2">
                                            <label class="form-label"><span class="text-danger">*</span>Name of meeting</label>
                                            <small id="MunmSM" style="display: none;" class="small"></small>
                                            <?php
                                            $rs2 = Database::search("SELECT * FROM meeting_name;");
                                            $n2 = $rs2->num_rows;
                                            ?>
                                            <select class="form-select bg-transparent text-white" id="MName">
                                                <option value="00" style="background-color: #454567;">Select Meeting Name</option>
                                                <?php
                                                for ($i = 0; $i < $n2; $i++) {
                                                    $meetname = $rs2->fetch_assoc();
                                                ?>
                                                    <option value="<?php echo $meetname["id"] ?>" style="background-color: #454567;"><?php echo $meetname["name"]; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-4 g-lg-2">
                                            <label class="form-label"><span class="text-danger">*</span>Type of meeting</label>
                                            <small id="MunmSM" style="display: none;" class="small"></small>
                                            <?php
                                            $rs1 = Database::search("SELECT * FROM meeting_type;");
                                            $n1 = $rs1->num_rows;
                                            ?>
                                            <select class="form-select bg-transparent text-white" id="MType">
                                                <option value="00" style="background-color: #454567;">Select Meeting Type</option>
                                                <?php
                                                for ($i = 0; $i < $n1; $i++) {
                                                    $asses = $rs1->fetch_assoc();
                                                ?>
                                                    <option value="<?php echo $asses["id"] ?>" style="background-color: #454567;"><?php echo $asses["meeting_type"]; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-12 col-lg-8 offset-lg-2 g-lg-2 d-grid">
                                            <label class="form-label"><span class="text-danger">*</span>Zoom Meeting Link</label>
                                            <small id="MunmSM" style="display: none;" class="small"></small>
                                            <input type="text" name="" class="form-control" id="MLink" placeholder="Paste the zoom link here...">
                                        </div>
                                        <div class="col-12 col-lg-8 offset-lg-2 g-lg-2 d-grid">
                                            <label class="form-label"><span class="text-danger">*</span>Location</label>
                                            <small id="MunmSM" style="display: none;" class="small"></small>
                                            <input type="text" name="" class="form-control" id="MLocation" placeholder="Enter Location.....">
                                        </div>
                                        <div class="col-12 col-lg-8 offset-lg-2 g-lg-2 d-grid">
                                            <label class="form-label"><span class="text-danger">*</span>Special Notes</label>
                                            <small id="MunmSM" style="display: none;" class="small"></small>
                                            <textarea class="form-control bg-transparent" id="" cols="30" rows="4" placeholder="Special Notes for Students"></textarea>
                                        </div>
                                        <div class="col-12 col-lg-6 offset-lg-3 d-grid g-2 mt-4 mb-4">
                                            <button class="btn btn-outline-primary text-white shadow fw-bold fs-4" onclick="meetingShedule();">Shedule Meeting</button>
                                        </div>
                                    </div>


                                    <div class="col-12 mt-4">
                                        <table class="table table-responsive shadow stdn">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Meeting Name</th>
                                                    <th scope="col">Assessor</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Time</th>
                                                    <th scope="col">Link</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Meeting Type</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                $rs3 = Database::search("SELECT meetings.meeting_id, meeting_name.name, assessor.first_name, assessor.last_name, meetings.date, meetings.time,meetings.link,meetings.location, meeting_type.meeting_type, meetings.status 
                                                FROM meetings 
                                                INNER JOIN assessor ON meetings.assessor_id=assessor.id 
                                                INNER JOIN meeting_type ON meetings.Meeting_type_id=meeting_type.id 
                                                INNER JOIN meeting_name ON meetings.Name=meeting_name.id 
                                                ORDER BY meetings.meeting_id DESC;");
                                                $n3 = $rs3->num_rows;

                                                for ($i = 0; $i < $n3; $i++) {
                                                    $tbdm = $rs3->fetch_assoc();


                                                ?>
                                                    <tr class="x <?php if ($tbdm["status"] == 1) {
                                                                    ?> alert-info <?php
                                                                                } else {
                                                                                    ?> alert-danger <?php
                                                                                                } ?> " onclick="changeStatus(<?php echo $tbd3['status']; ?>);">
                                                        <td><?php echo $tbdm["meeting_id"]; ?></td>
                                                        <td><?php echo $tbdm["name"]; ?></td>
                                                        <td><?php echo $tbdm["first_name"] . $tbdm["last_name"]; ?></td>
                                                        <td><?php echo $tbdm["date"]; ?></td>
                                                        <td><?php echo $tbdm["time"]; ?></td>
                                                        <td><?php echo $tbdm["link"]; ?></td>
                                                        <td><?php echo $tbdm["location"]; ?></td>
                                                        <td><?php echo $tbdm["meeting_type"]; ?></td>

                                                    </tr>

                                                <?php

                                                }

                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Meetings Shedule -->

                                <!-- Students -->

                                <div class="col-12" style="display: none;" id="stdntsmm">
                                    <h1 class="text-decoration-underline text-white text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Students</h1>
                                    <div class="row">
                                        <div class="col-10 offset-1 col-lg-2 offset-lg-0">
                                            <input class="d-none" type="file" accept="pdf/*" id="addcontract" />
                                            <label for="addcontract" onclick="selctcontract();" class="btn btn-outline-primary text-white fw-bold shadow m-2">Select Contract Form
                                                <small id="viewM" class="text-warning"></small>
                                            </label>
                                        </div>
                                        <div class="col-10 offset-1 col-lg-2 offset-lg-0">
                                            <button class="btn btn-outline-primary text-white fw-bold shadow m-2" onclick="upload_contract();">Upload Contract Form</button>
                                        </div>
                                        <div class="col-10 offset-1 col-lg-2 offset-lg-6 ">
                                            <a href="addNewStudentAdmin.php" class="btn btn-outline-primary text-white fw-bold shadow m-2" target="_blank">Add New Student</a>
                                        </div>
                                        <div class="col-12">

                                            <div id="degBody" class=" " style="display: none;"></div>
                                            <div id="stmBody" class=" " style="display: none;"></div>
                                            <div id="unimBody" class="">
                                                <table class="table table-responsive table-striped shadow ">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">University ID</th>
                                                            <th scope="col">University Type</th>
                                                            <th scope="col">Univercity Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $urs = Database::search("SELECT university.university_id, university_type.uni_type, university.university_name, university.address, university.email, university.contact_no_1, university.contact_no_2, district.district_name FROM university INNER JOIN university_type ON university.university_type=university_type.id INNER JOIN district ON university.District_id=district.id;");
                                                        $un = $urs->num_rows;

                                                        for ($i = 0; $i < $un; $i++) {
                                                            $ursr = $urs->fetch_assoc();
                                                        ?>

                                                            <tr class="x" style="background-color: aquamarine;" onclick="stmUni(<?php echo $ursr['university_id']; ?>);">
                                                                <td><?php echo $ursr["university_id"]; ?></td>
                                                                <td><?php echo $ursr["uni_type"]; ?></td>
                                                                <td><?php echo $ursr["university_name"]; ?></td>
                                                            </tr>
                                                        <?php

                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <!-- Students -->

                                <!-- Univercities -->

                                <div class="col-12 " style="display: none;" id="unimm">

                                    <div class="row">
                                        <div class="col-12">
                                            <h1 class="text-danger d-lg-none hland">Pleace turn mobile to landskape.</h1>
                                            <h1 class="text-decoration-underline text-white text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">All Univercities</h1>
                                            <div class="row">
                                                <div class="col-10 offset-1 col-lg-2 offset-lg-10 ">
                                                    <a href="addNewUniversityAdmin.php" class="btn btn-outline-primary text-white fw-bold shadow m-2" target="_blank">Add New Univercity / Institute</a>
                                                </div>
                                            </div>
                                            <table class="table table-responsive shadow stdn">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">University ID</th>
                                                        <th scope="col">University Type</th>
                                                        <th scope="col">Univercity Name</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Contact No 1</th>
                                                        <th scope="col">Contact No 2</th>
                                                        <th scope="col">District</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $urs = Database::search("SELECT university.university_id, university_type.uni_type, university.university_name, university.address, university.email, university.contact_no_1, university.contact_no_2, district.district_name FROM university INNER JOIN university_type ON university.university_type=university_type.id INNER JOIN district ON university.District_id=district.id;");
                                                    $un = $urs->num_rows;

                                                    for ($i = 0; $i < $un; $i++) {
                                                        $ursr = $urs->fetch_assoc();
                                                    ?>

                                                        <tr class="x" style="background-color: aquamarine;" onclick="indiUni(<?php echo $ursr['university_id']; ?>);">
                                                            <td><?php echo $ursr["university_id"]; ?></td>
                                                            <td><?php echo $ursr["uni_type"]; ?></td>
                                                            <td><?php echo $ursr["university_name"]; ?></td>
                                                            <td><?php echo $ursr["address"]; ?></td>
                                                            <td><?php echo $ursr["email"]; ?></td>
                                                            <td><?php echo $ursr["contact_no_1"]; ?></td>
                                                            <td><?php echo $ursr["contact_no_2"]; ?></td>
                                                            <td><?php echo $ursr["district_name"]; ?></td>
                                                        </tr>
                                                    <?php

                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                                <!-- Univercities -->

                                <!-- Assessors  -->

                                <div class="col-12" style="display: none;" id="Assesmm">

                                    <div class="row">
                                        <div class="col-12">
                                            <h1 class="text-danger d-lg-none hland">Pleace turn mobile to landskape.</h1>
                                            <h1 class="text-decoration-underline text-white text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">All Assessors</h1>
                                            <div class="row">
                                                <div class="col-10 offset-1 col-lg-2 offset-lg-10 ">
                                                    <a href="addNewAssessorAdmin.php" class="btn btn-outline-primary text-white fw-bold shadow m-2" target="_blank">Add New Assessor</a>
                                                </div>
                                            </div>
                                            <table class="table table-responsive shadow stdn">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No</th>
                                                        <th scope="col">Assessor ID</th>
                                                        <th scope="col">First Name</th>
                                                        <th scope="col">Last Name</th>
                                                        <th scope="col">N.I.C. No</th>
                                                        <th scope="col">Gender</th>
                                                        <th scope="col">Contact No 1</th>
                                                        <th scope="col">Contact No 2</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Country</th>
                                                        <th scope="col">Training Field</th>
                                                        <th scope="col">Univercity</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $ars = Database::search("SELECT assessor.id, assessor.assessor_id, assessor.first_name, assessor.last_name, assessor.address, assessor.NIC, assessor.mobile_no, assessor.land_line, assessor.email, gender.gender_type, country.country_name, `fields`.field_name, university.university_name FROM assessor INNER JOIN gender ON assessor.Gender_gender_id=gender.gender_id INNER JOIN country ON assessor.Country_country_id=country.country_id INNER JOIN `fields` ON assessor.Fields_field_id=`fields`.field_id INNER JOIN university ON assessor.University_id=university.university_id;");
                                                    $an = $ars->num_rows;

                                                    for ($i = 0; $i < $an; $i++) {
                                                        $arsr = $ars->fetch_assoc();
                                                    ?>
                                                        <tr class="x alert-warning" onclick="assesIndi('<?php echo $arsr['assessor_id'] ?>');">
                                                            <td><?php echo $arsr["id"]; ?></td>
                                                            <td><?php echo $arsr["assessor_id"]; ?></td>
                                                            <td><?php echo $arsr["first_name"]; ?></td>
                                                            <td><?php echo $arsr["last_name"]; ?></td>
                                                            <td><?php echo $arsr["NIC"]; ?></td>
                                                            <td><?php echo $arsr["gender_type"]; ?></td>
                                                            <td><?php echo $arsr["mobile_no"]; ?></td>
                                                            <td><?php echo $arsr["land_line"]; ?></td>
                                                            <td><?php echo $arsr["address"]; ?></td>
                                                            <td><?php echo $arsr["email"]; ?></td>
                                                            <td><?php echo $arsr["country_name"]; ?></td>
                                                            <td><?php echo $arsr["field_name"]; ?></td>
                                                            <td><?php echo $arsr["university_name"]; ?></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                                <!-- Assessors  -->

                                <!-- Companies -->

                                <div class="col-12" style="display: none;" id="ComProfmm">
                                    <h1 class="text-danger d-lg-none hland">Pleace turn mobile to landskape.</h1>
                                    <h1 class="text-decoration-underline text-white text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">All Companies</h1>
                                    <div class="row">
                                        <div class="col-10 offset-1 col-lg-2 offset-lg-10 ">
                                            <a href="addNewCompanyAdmin.php" class="btn btn-outline-primary text-white fw-bold shadow m-2" target="_blank">Add New Company</a>
                                        </div>
                                        <div class="col-12">

                                            <table class="table table-responsive shadow stdn">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Company Id</th>
                                                        <th scope="col">Company Name</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Contact No 1</th>
                                                        <th scope="col">Contact No 2</th>
                                                        <th scope="col">District</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $crs = Database::search("SELECT company.id, company.company_id, company.company_name, company.address, company.email, company.contact_1, company.contact_2, district.district_name FROM company INNER JOIN district ON company.District_id=district.id;");
                                                    $cn = $crs->num_rows;

                                                    for ($i = 0; $i < $cn; $i++) {
                                                        $crsr = $crs->fetch_assoc();
                                                    ?>
                                                        <tr class="x" style="background-color: aquamarine;" onclick="compnIndi('<?php echo $crsr['company_id']; ?>');">
                                                            <td><?php echo $crsr["id"]; ?></td>
                                                            <td><?php echo $crsr["company_id"]; ?></td>
                                                            <td><?php echo $crsr["company_name"]; ?></td>
                                                            <td><?php echo $crsr["address"]; ?></td>
                                                            <td><?php echo $crsr["email"]; ?></td>
                                                            <td><?php echo $crsr["contact_1"]; ?></td>
                                                            <td><?php echo $crsr["contact_2"]; ?></td>
                                                            <td><?php echo $crsr["district_name"]; ?></td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                                <!-- Companies -->

                                <!-- Reports -->

                                <div class="col-12 col-lg-12 " id="reprtmm" style="display: none;">

                                    <div class="row">
                                        <div class="col-12">
                                            <h1 class="text-decoration-underline text-white text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Reports</h1>
                                        </div>
                                        <div class="col-12 p-2 mt-2 ">
                                            <div class="row shadow">
                                                <form action="report_by_date_export.php" method="POST" class="col-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4 class="text-center my-2 text-decoration-underline">Students By Date</h4>
                                                        </div>
                                                        <div class="col-12 col-lg-2"><label>From</label>
                                                            <input type="date" name="repodtfrom" id="repodtfrom" onchange="searchbydaterepo();" class="form-control">
                                                        </div>
                                                        <div class="col-12 col-lg-2"><label>To</label>
                                                            <input type="date" name="repodtto" id="repodtto" onchange="searchbydaterepo();" class="form-control">
                                                        </div>
                                                        <div class="col-12 col-lg-2 offset-lg-5 d-grid">
                                                            <button type="submit" class="btn btn-outline-primary text-white fw-bold shadow m-2">Download Report</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="col-12 mt-2" id="repbydatetbl">
                                                    <table class="table table-responsive stdn">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">NAITA Id</th>
                                                                <th scope="col">Student Id</th>
                                                                <th scope="col">Student Full Name</th>
                                                                <th scope="col">N.I.C.</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="x" style="background-color: aquamarine;">
                                                                <td class="text-center fw-bold" colspan="5">Pleace Select Time Duration</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row shadow mt-4">
                                                <form action="report_by_date_export_monit.php" method="POST" class="col-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4 class="text-center my-2 text-decoration-underline">Monitoring Reports</h4>
                                                        </div>
                                                        <div class="col-12 col-lg-2"><label>From</label>
                                                            <input type="date" name="from" id="repomonitfrom" onchange="searchbydaterepomonit();" class="form-control">
                                                        </div>
                                                        <div class="col-12 col-lg-2"><label>To</label>
                                                            <input type="date" name="to" id="repomonitto" onchange="searchbydaterepomonit();" class="form-control">
                                                        </div>
                                                        <div class="col-12 col-lg-2"><label>inspector</label>
                                                            <select class="form-select" name="ins" id="repomonitins" onchange="searchbydaterepomonit();">
                                                                <option value="0">Select inspector</option>
                                                                <?php
                                                                $rsrpins = Database::search("SELECT * FROM inspector;");
                                                                $nrpins = $rsrpins->num_rows;
                                                                for ($i = 0; $i < $nrpins; $i++) {
                                                                    $drpind = $rsrpins->fetch_assoc();
                                                                ?>
                                                                    <option value="<?php echo $drpind["id"] ?>"><?php echo $drpind["name"] ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-lg-2"><label>Companies</label>
                                                            <select class="form-select" name="compn" id="repomonitcompn" onchange="searchbydaterepomonit();">
                                                                <option value="0">Select Company</option>
                                                                <?php
                                                                $rsrpins = Database::search("SELECT * FROM company;");
                                                                $nrpins = $rsrpins->num_rows;
                                                                for ($i = 0; $i < $nrpins; $i++) {
                                                                    $drpind = $rsrpins->fetch_assoc();
                                                                ?>
                                                                    <option value="<?php echo $drpind["id"] ?>"><?php echo $drpind["company_name"] ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-12 col-lg-2"><label>Monitored Type</label>
                                                            <select class="form-select" name="monitt" id="repomonitmonit" onchange="searchbydaterepomonit();">
                                                                <option value="0">Select Monitored Type</option>
                                                                <option value="1">Monitoring 1</option>
                                                                <option value="2">Monitoring 2</option>
                                                                <option value="3">Monitoring 3</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-12 col-lg-8"><label>Search</label>
                                                            <input type="text" id="repomonitsrch" name="srch" onkeyup="searchbydaterepomonit();" class="form-control">
                                                        </div>
                                                        <div class="col-12 col-lg-2 offset-lg-1 d-grid">
                                                            <button type="submit" class="btn btn-outline-primary text-white fw-bold shadow m-2">Download Report</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <div class="col-12 mt-2" id="repmonittbl">
                                                    <table class="table table-responsive shadow stdn">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">NAITA Id</th>
                                                                <th scope="col">Student Id</th>
                                                                <th scope="col">Student Full Name</th>
                                                                <th scope="col">N.I.C.</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr class="x" style="background-color: aquamarine;">
                                                                <td class="text-center fw-bold" colspan="5">Pleace Select Time Duration</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <!-- Reports -->

                                <!-- Monitoring -->

                                <div class="col-12 " id="monit" style="display: none;">

                                    <h1 class="text-decoration-underline text-white text-center border border-2 border-primary  p-2 rounded my-2 text-uppercase fw-bold">Monitoring</h1>

                                    <div class="row">

                                        <?php

                                        if ($_SESSION["Md"]["type"] == "super admin") {
                                        ?>

                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-12 col-lg-4 d-grid">
                                                        <select class="form-select bg-transparent text-white fw-bold" name="" id="addinsselct">
                                                            <option value="0">Select inspector</option>
                                                            <?php
                                                            $rsinsadd = Database::search("SELECT * FROM admin WHERE Admin_type_id='2';");
                                                            $ninsadd = $rsinsadd->num_rows;
                                                            for ($i = 0; $i < $ninsadd; $i++) {
                                                                $dinsadd = $rsinsadd->fetch_assoc();

                                                                $rsin = Database::search("SELECT * FROM inspector WHERE admin_id='" . $dinsadd["id"] . "';");
                                                                $tbnin = $rsin->num_rows;
                                                                if ($tbnin == 0) {
                                                            ?>
                                                                    <option value="<?php echo $dinsadd["id"] ?>"><?php echo $dinsadd["admin_name"] ?></option>
                                                            <?php

                                                                }
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-lg-4 d-grid">
                                                        <button class="btn btn-outline-primary text-white fw-bold shadow m-2" onclick="addinspectors();">Add To Inspectors</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-4">
                                                <h4>Inspectors</h4>

                                                <?php

                                                $rstb1 = Database::search("SELECT * FROM inspector;");
                                                $tbn1 = $rstb1->num_rows;
                                                ?>

                                                <table class=" table table-responsive table-striped shadow ">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Name</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

                                                        for ($i = 0; $i < $tbn1; $i++) {
                                                            $tbd2 = $rstb1->fetch_assoc();

                                                        ?>
                                                            <tr onclick="INSselctST('<?php echo $tbd2['id']; ?>');" id="<?php echo $tbd2['id']; ?>" class="x fw-bold text-white" style="background-color:  #bd68006e;">
                                                                <td><?php echo $tbd2["id"]; ?></td>
                                                                <td><?php echo $tbd2["name"]; ?></td>
                                                            </tr>

                                                        <?php

                                                        }

                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="col-12 col-lg-8">

                                                <div id="insst">

                                                </div>

                                            </div>


                                            <?php
                                        } elseif ($_SESSION["Md"]["type"] == "admin") {

                                            $insrs = Database::search("SELECT * FROM inspector WHERE admin_id='" . $_SESSION["Md"]["id"] . "';");
                                            $insn = $insrs->num_rows;

                                            // echo "SELECT * FROM inspector WHERE admin_id='" . $_SESSION["Md"]["id"] . "';";

                                            if ($insn == 1) {

                                                $insd =  $insrs->fetch_assoc();

                                            ?>

                                                <div class="row">

                                                    <form method="post" action="exsx.php" class="col-12 border p-2">

                                                        <div class="row">

                                                            <div class="col-4">
                                                                <input type="text" name="sb" class="form-control" onkeyup="searchmonitorInspect();" id="sb" placeholder="Search Available Training Students to Monitoring">
                                                            </div>
                                                            <div class="col-4">
                                                                <select name="sc" id="sc" onclick="searchmonitorInspect();" class="form-control">
                                                                    <option value="0">select company</option>

                                                                    <?php
                                                                    $c = Database::search("SELECT * FROM company;");
                                                                    $n = $c->num_rows;

                                                                    for ($i = 0; $i < $n; $i++) {
                                                                        $d = $c->fetch_assoc();

                                                                    ?>
                                                                        <option value="<?php echo $d["id"]; ?>"><?php echo $d["company_name"]; ?></option>
                                                                    <?php

                                                                    }

                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="col-4">
                                                                <input class="form-control" type="date" id="monitoring_date">
                                                            </div>

                                                        </div>

                                                    </form>

                                                    <div id="tb" class="col-12">
                                                        <h4 onclick="searchmonitorInspect('<?= $insd['id']; ?>');" style="height: 400px; padding-top: 180px; border-style: dashed; border-color: #0000004b;" class="text-center mt-4   justify-content-center">If the tables are not loaded, click here.</h4>
                                                    </div>

                                                </div>

                                            <?php

                                            } else {

                                            ?>

                                                <h4>Youre not an inspector</h4>

                                        <?php

                                            }
                                        }


                                        ?>



                                    </div>


                                </div>

                                <!-- Monitoring -->

                                <!-- individual student -->

                                <div class="col-12 " id="MindiSt" style="display: none;">
                                    <div class="overflow-scroll" style="height: 80%;" id="indistinnerr">

                                    </div>

                                </div>

                                <!-- individual student -->

                                <!-- individual University -->

                                <div class="col-12 " id="Mindiuni" style="display: none;">
                                    <div class="" id="indiuniinnerr">

                                    </div>
                                </div>

                                <!-- individual University -->

                                <!-- individual Assessor -->

                                <div class="col-12 " id="Mindiasses" style="display: none;">
                                    <div class="" id="indiassesinnerr">

                                    </div>
                                </div>

                                <!-- individual Assessor -->


                                <!-- individual Company -->

                                <div class="col-12 " id="MindiCom" style="display: none;">
                                    <div class="" id="indiCominnerr">

                                    </div>
                                </div>

                                <!-- individual Company -->



                            </div>

                        </div>



                    </div>
                </div>

            </div>

            <!-- body -->

        </div>

        </div>
        </div>


        <script src="script.js"></script>
        <script src="bootstrap.js"></script>
    </body>

    </html>

<?php

} else {
    //  echo " header('Location : MainAccountLogin.php');";

?>
    <script>
        window.location = "MainAccountLogin.php";
    </script>
<?php

}
