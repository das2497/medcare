<?php
require 'connection.php';

if (isset($_POST["pid"])) {

    if (!empty($_POST["pid"])) {
        $rs = Database::search("SELECT *
        FROM prescription
        INNER JOIN patient ON prescription.pat_id=patient.id
        WHERE patient.preg_no='" . $_POST["pid"] . "';");

        if ($rs->num_rows > 0) {
            
?>
            <p class="text-center " style="height: 2%;">Report Count <?= $rs->num_rows; ?></p>

            <?php
            for ($i = 0; $i < $rs->num_rows; $i++) {
                $d = $rs->fetch_assoc();

            ?>
                <div class="col-12 col-lg-8 offset-lg-2 shadow my-2 p-2 rounded" >
                    <div class="row">
                        <div class="col-10 offset-1 d-grid mt-2"><label class="form-label">Drugs And Doses</label>
                            <textarea class="form-control" id="" cols="30" rows="10" readonly><?= $d["drugs_doses"]; ?></textarea>
                        </div>
                        <div class="col-10 offset-1 d-grid mt-2"><label class="form-label">Aditional Notes</label>
                            <textarea class="form-control" id="" cols="30" rows="10" readonly><?= $d["notes"]; ?></textarea>
                        </div>
                    </div>
                </div>
            <?php
            }
        } else {
            ?>
            <p class="text-danger text-center">Invalid Patient Id</p>
        <?php
        }
    } else {
        ?>
        <p class="text-danger text-center">Please Enter Patient Id</p>

<?php
    }
}
