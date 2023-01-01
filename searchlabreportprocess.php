<?php
require 'connection.php';

if (isset($_POST["pid"])) {

    if (!empty($_POST["pid"])) {
        $rs = Database::search("SELECT * FROM lab_reports WHERE petiont_id='" . $_POST["pid"] . "';");

        if ($rs->num_rows > 0) {

?>
            <p class="text-center ">Report Count <?= $rs->num_rows; ?></p>

            <?php
            for ($i = 0; $i < $rs->num_rows; $i++) {
                $d = $rs->fetch_assoc();
            ?>

                <iframe src="<?= $d["path"]; ?>" frameborder="1" width="100%" class="my-2"></iframe>

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
