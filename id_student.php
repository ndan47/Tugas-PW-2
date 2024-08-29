<?php
require_once "koneksi.php";

class IDstudent extends Guidance {
    public function tampilData() {
        $data = $this->conn->query("SELECT * FROM ");
        return $data;
    }
}
$idguidance = new IDguidance();
echo $idguidance->tampilData();
?>

    </table> 
       <h2>Data Guidance</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Problem</th>
            <th>Solution</th>
        </tr>
        <?php $j = 1; foreach($data_guidance as $data) : ?>
        <tr>
            <td><?= $j++ ?></td>
            <td><?= $data['problem'] ?></td>
            <td><?= $data['solution'] ?></td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>

