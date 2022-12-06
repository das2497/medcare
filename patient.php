<?php

session_start();

require 'connection.php';

if (isset($_SESSION["PT"])) {


?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PATIENT <?= $_SESSION["PT"]["name"]; ?></title>
        <link rel="icon" href="assets/Untitled (800 × 800 px).svg">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="bootstrap.css">
    </head>

    <body>

        <div class="container-fluid">
            <div class="row ">

                <div class="col-12">

                    <!-- header -->

                    <div class="row  border-bottom border-4 border-primary shadow-lg bg-dark">

                        <div class="col-12 col-lg-4  text-center text-lg-start mt-3">
                            <div class="row align-content-center">
                                <div class="col-12 col-lg-1">
                                    <img alt="logo" src="assets/Untitled (800 × 800 px).svg" width="60px">
                                </div>
                                <div class="col-12 col-lg-11">
                                    <h4 class=" mt-2 mt-lg-3 ms-lg-4 text-white">PATIENT <?= $_SESSION["PT"]["name"]; ?></h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 offset-lg-5  pt-3 mb-4">

                            <nav class="navbar navbar-expand-lg navbar-light menu1 float-lg-end">
                                <div class="container-fluid ">
                                    <!-- <a class="navbar-brand d-block d-lg-none text-white" href="#">Menu</a> -->
                                    <button class="navbar-toggler text-white " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon "></span>
                                    </button>
                                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                                        <ul class="navbar-nav mb-2 mb-lg-0 text-end  ">
                                            <li class="nav-item" onclick="THdash();">
                                                <a class="nav-link fw-bold d-block d-lg-none text-white" aria-current="page" href="#">Dashboard</a>
                                            </li>
                                            <li class="nav-item" onclick="THprofile();">
                                                <a class="nav-link fw-bold d-block d-lg-none text-white" aria-current="page" href="#">Profile</a>
                                            </li>
                                            <li class="nav-item" onclick="THChannel();">
                                                <a class="nav-link fw-bold d-block d-lg-none text-white" aria-current="page" href="#">Doctor Channel</a>
                                            </li>
                                            <li class="nav-item" onclick="THReports();">
                                                <a class="nav-link fw-bold d-block d-lg-none text-white" aria-current="page" href="#">Lab Reports</a>
                                            </li>
                                            <hr class="my-1 text-white border border-bottom ">
                                            <li>
                                                <a class="nav-link fw-bold text-white" href="#" tabindex="-1" aria-disabled="true">Our Policies</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold text-white" href="#" tabindex="-1" aria-disabled="true">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link fw-bold text-white" onclick="patient_logout();" href="#" tabindex="-1" aria-disabled="true">log out</a>
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
                        <div class="col-2">

                            <!-- sidebar -->

                            <div class="row d-none d-lg-flex vh-100">
                                <div class="col-12 d-none d-lg-block px-sm-2 px-0 bg-dark">
                                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white ">
                                        <h4 class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white">Menu</h4>
                                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                                            <li onclick="THdash();">
                                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white">Dashboard</span> </a>
                                            </li>
                                            <li onclick="THprofile();">
                                                <a href="#" class="nav-link px-0 align-middle">
                                                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline text-white">Profile</span></a>
                                            </li>
                                            <li onclick="THChannel();">
                                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-white">Doctor Channel</span></a>
                                            </li>
                                            <li onclick="THReports();">
                                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline text-white">Lab Reports</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- sidebar -->

                        </div>

                        <!-- Dashboard -->

                        <div class="col-12 col-lg-10 ">

                            <div class="row ">

                                <!-- ==========dashboard=============================================================================================                         -->
                                <div class="col-12" id="THdash" style="display: block; ">
                                    <h1>Dashboard</h1>

                                    <div class="row">
                                        <div class="col-8 shadow">
                                            <h4 class="text-center">My Channelings</h4>
                                            <table class="table table-responsive table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Doctor's Name</th>
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $pchnlsrs = Database::search("SELECT * FROM patient_channels
                                                    INNER JOIN patient ON patient_channels.patient_id=patient.id
                                                    INNER JOIN d_chanel_time ON patient_channels.chnl_id=d_chanel_time.chnl_id
                                                    INNER JOIN doctor ON d_chanel_time.doc_id=doctor.id
                                                        WHERE patient.preg_no='" . $_SESSION['PT']['preg_no'] . "'
                                                        AND patient_channels.`status`='1';");

                                                    $pchnlsn = $pchnlsrs->num_rows;

                                                    date_default_timezone_set("Asia/Colombo");
                                                    $currentTime = date("h:i a");
                                                    $currentDate = date("n.j.Y");

                                                    for ($i = 0; $i < $pchnlsn; $i++) {

                                                        $pchnlsd = $pchnlsrs->fetch_assoc();

                                                        $time = new DateTime($pchnlsd["date_time"]);
                                                        $date = $time->format('n.j.Y');
                                                        $day = date('l', strtotime($pchnlsd["date_time"]));
                                                        $time = $time->format('h:i a');

                                                        if ($currentTime > $time || $currentDate > $date) {
                                                            //  echo "yes";
                                                            Database::iud("UPDATE patient_channels SET `status`='0' WHERE p_chnl_id='" . $pchnlsd['p_chnl_id'] . "';");
                                                        } else {
                                                            //  echo "no";
                                                        }

                                                        if ($pchnlsd["status"] == 1) {

                                                    ?>
                                                            <tr class="table-info">
                                                                <td><?php echo $pchnlsd["name"]; ?></td>
                                                                <td><?php echo $date; ?></td>
                                                                <td><?php echo $time; ?></td>
                                                            </tr>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <!-- ==========dashboard================================================================================== -->

                                <!-- ==========profile============================================================================================= -->
                                <div class="col-12" id="THprofile" style="display: none;">
                                    <h1>Profile</h1>

                                    <div class="row pt-4 shadow">
                                        <div class="col-12 col-lg-6"><label class="labels">Username</label>
                                            <input type="text" class="form-control" placeholder="Username" value="<?php echo $_SESSION["PT"]["uname"]; ?>" id="THuname">
                                        </div>
                                        <div class="col-12 col-lg-6"><label class="labels">Full Name</label>
                                            <input type="text" class="form-control" placeholder="Name" value="<?php echo $_SESSION["PT"]["name"]; ?>" id="THfulnm">
                                        </div>
                                        <div class="col-md-12 col-lg-6"><label class="labels">Gender</label>
                                            <input type="text" class="form-control" placeholder="Email" value="<?php echo $_SESSION["PT"]["gender_type"]; ?>" id="THemail">
                                        </div>
                                        <div class="col-md-12 col-lg-6"><label class="labels">N.I.C.</label>
                                            <input type="text" class="form-control" placeholder="Email" value="<?php echo $_SESSION["PT"]["nic"]; ?>" id="THemail">
                                        </div>
                                        <div class="col-12 col-md-6"><label class="labels">Birthday</label>
                                            <input type="text" class="form-control" placeholder="Grade" value="<?php echo $_SESSION["PT"]["dob"]; ?>">
                                        </div>
                                        <div class="col-12 col-md-6"><label class="labels">Address</label>
                                            <input type="text" class="form-control" placeholder="Subject" value="<?php echo $_SESSION["PT"]["address"]; ?>">
                                        </div>
                                        <div class="col-12 col-md-6"><label class="labels">Contact</label>
                                            <input type="text" class="form-control" placeholder="Subject" value="<?php echo $_SESSION["PT"]["contact"]; ?>">
                                        </div>
                                        <div class="col-12 col-md-6"><label class="labels">Responsible</label>
                                            <input type="text" class="form-control" placeholder="Subject" value="<?php echo $_SESSION["PT"]["person"]; ?>">
                                        </div>
                                        <div class="col-12 col-md-6"><label class="labels">special Notes</label>
                                            <textarea class="form-control" id="" cols="auto" rows="auto"><?php echo $_SESSION["PT"]["notes"]; ?></textarea>
                                        </div>
                                        <div class="col-md-12 col-lg-6"><label class="labels">Password</label>
                                            <input type="text" class="form-control" placeholder="Password" value="<?php echo $_SESSION["PT"]["pass"]; ?>" id="THpass">
                                        </div>

                                        <div class="col-10 offset-1 col-lg-4 offset-lg-4 d-grid mt-5">
                                            <button class="btn btn-primary profile-button" type="button" onclick="">Update Profile</button>
                                        </div>
                                    </div>

                                </div>
                                <!-- ==========profile================================================================================== -->

                                <!-- ==========lessons============================================================================================= -->
                                <div class="col-12" id="THlessons" style="display: none;">
                                    <h1>Doctor Channel</h1>

                                    <div class="row" id="docdtails">
                                        <?php
                                        $rsub2 = Database::search("SELECT * FROM specialies;");
                                        ?>
                                        <div class="col-6 offset-3">
                                            <select class="form-select" id="dchnlspecility" onchange="d_ch_slct();">
                                                <option value="x">Select Speciality</option>
                                                <?php
                                                $rsub2 = Database::search("SELECT * FROM specialies;");
                                                while ($row2 = mysqli_fetch_assoc($rsub2)) {
                                                ?>
                                                    <option value="<?php echo $row2["id"]; ?>"><?php echo $row2["speciality"]; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="col-12 overflow-scroll " id="docchnl">

                                            <table class=" table table-responsive table-striped shadow table-hover mt-4">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Doctor's Name</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php

                                                    $rs1 = Database::search("SELECT doctor.id, doctor.uname, doctor.name, doctor.specialty, specialies.speciality, doctor.password FROM doctor INNER JOIN specialies ON doctor.specialty=specialies.id;");
                                                    $sn = $rs1->num_rows;

                                                    for ($i = 0; $i < $sn; $i++) {
                                                        $sd = $rs1->fetch_assoc();

                                                    ?>
                                                        <tr class="alert-info">
                                                            <td><?php echo $sd["name"]; ?></td>
                                                            <td><button onclick="doctorDetails('<?php echo $sd['id']; ?>','<?php echo $sd['name']; ?>');" class="btn btn-primary">View Details</button></td>
                                                        </tr>

                                                    <?php

                                                    }

                                                    ?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <!-- ==========lessons================================================================================== -->

                                <!-- ==========assignments============================================================================================= -->
                                <div class="col-12" id="THassignments" style="display: none;">
                                    <h1>Lab Reports</h1>


                                </div>
                                <!-- ==========assignments================================================================================== -->

                            </div>

                        </div>

                        <!-- Dashboard -->

                    </div>


                    <!-- body -->

                </div>

            </div>



            <!-- footer -->

            <footer class="row bg-warning fixed-bottom">
                <div class="col-12 col-lg-4 offset-lg-4   text-center">
                    <img src="assets/Untitled (800 × 800 px).svg" alt="logo" width="100">
                    <h4 class="text-center text-white fs-5">MEDCARE MEDICAL CENTER</h4>
                    <p class="text-white text-center">BETER HEALTH | BETER LIFE</p>
                </div>
            </footer>

            <!-- footer -->

        </div>

        </div>
        </div>


        <script src="script.js"></script>
        <script src="bootstrap.js"></script>
    </body>

    </html>

<?php

} else {
    header("Location: index.php");
}
