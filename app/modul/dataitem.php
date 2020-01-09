<?php
require_once '../../config/config.php';

session_start();
$act    = $_POST['act'];
$id     = $_POST['id'];

date_default_timezone_set("Asia/Jakarta");

// ////////m_siswa//////////

$id_item        = $_POST['id_item'];
$kd_item        = $_POST['kd_item'];
$ket_item       = $_POST['ket_item'];
$jmlh_item      = $_POST['jmlh_item'];
$sat_item       = $_POST['sat_item'];
$category_item  = $_POST['category_item'];
$created_by     = $_POST['created_by'];
$edited_by      = $_SESSION['username'];
$created_on     = $_POST['created_on'];
$edited_on      = date('D d-m-yy | h:m:s');

// ////////////////////////////////////////////////m_siswa//////////////////////////////////////////////////

if ($act == "dataitem") {
    $sql = "SELECT concat(id_item,'#',kd_item,'#',ket_item,'#',jmlh_item,'#',sat_item,'#',category_item,'#',created_by,'#',edited_by,'#',created_on,'#',edited_on) as name FROM data_item WHERE id_item = '" . $id . "' limit 1";
    $row = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($row);
    echo $data['name'];
}
elseif ($act == "adddataitem") {
    $log_id = mysqli_query($conn, "SELECT * FROM data_item WHERE id_item='$id_item'");
    $result = mysqli_num_rows($log_id);
    if ($result == 0) {
        $log = "INSERT INTO data_item (id_item, kd_item, ket_item, jmlh_item, sat_item, category_item, created_by, edited_by, created_on, edited_on) VALUES ('" . $id_item . "','" . $kd_item . "','" . $ket_item . "','" . $jmlh_item . "','" . $sat_item . "','" . $category_item . "','" . $created_by . "','" . $edited_by . "','" . $created_on . "','" . $edited_on . "')";
        if ($conn->query($log) == true) {
            $status = '1'; //Berhasil
        }
    }
    else {
        $status = '2'; //Gagal
    }
}
elseif ($act == "editdataitem") {
    $log1 = "UPDATE data_item SET kd_item = '" . $kd_item . "', ket_item = '" . $ket_item . "', jmlh_item = '" . $jmlh_item . "', sat_item = '" . $sat_item . "', category_item = '" . $category_item . "', edited_by = '".$edited_by."', edited_on = '" . $edited_on . "' WHERE id_item = '" . $id . "'";
            if ($conn->query($log1) == true) {
            $status = '1'; //Berhasil
    }
    else {
        echo "error";
    }
}
elseif ($act == "deldataitem") {
    $log1 = "DELETE FROM `data_item` WHERE id_item = '" . $id . "'";
    if ($conn->query($log1) == true) {
        $status = '1'; //Berhasil
    }
    else {
        echo "error";
    }
}

echo $status;
?>