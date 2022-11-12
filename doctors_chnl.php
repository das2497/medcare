<?php

session_start();

require 'connection.php';


?>



<table class=" table table-responsive shadow stdn mt-4">
    <thead>
        <tr>
            <th scope="col">Student Username</th>
        </tr>
    </thead>
    <tbody>
        <?php

        $rs1 = Database::search("SELECT doctor.id, doctor.uname, doctor.name, doctor.specialty, specialies.speciality, doctor.password FROM doctor INNER JOIN specialies ON doctor.specialty=specialies.id WHERE doctor.specialty='".$_POST["specid"]."';");
        $sn = $rs1->num_rows;

        for ($i = 0; $i < $sn; $i++) {
            $sd = $rs1->fetch_assoc();

        ?>
            <td><?php echo $sd["name"]; ?></td>
            </tr>

        <?php

        }

        ?>

    </tbody>
</table>