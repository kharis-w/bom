<?php
require_once '../../config/config.php';

session_start();
$act    = $_POST['act'];
$id     = $_POST['id'];

date_default_timezone_set("Asia/Jakarta");

// ////////user//////////

$id_user   = $_POST['id_user'];
$username  = $_POST['username'];
$category_user  = $_POST['category_user'];
$password  = base64_encode(base64_encode ($_POST['password']));
$pass      = $_POST['pass'];

// ////////////////////////////////////////////////user//////////////////////////////////////////////////

if ($act == "usermanage") {
    $sql = "SELECT concat(id_user,'#',username,'#',category_user,'#',password) as name FROM user WHERE id_user = '" . $id . "' limit 1";
    $row = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($row);
    echo $data['name'];
}
elseif ($act == "addusermanage") {
    $log_id = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user'");
    $result = mysqli_num_rows($log_id);
    if ($result == 0) {
        $log = "INSERT INTO user (id_user, username, password, category_user) VALUES ('" . $id_user . "','" . $username . "','" . $password . "','" . $category_user . "')";
        if ($conn->query($log) == true) {
            $status = '1'; //Berhasil
        }
    }
    else {
        $status = '2'; //Gagal
    }
}
elseif ($act == "editusermanage") {
    $log = "UPDATE user SET username = '" . $username . "', password = '" . $password . "', category_user = '" . $category_user . "' WHERE id_user = '" . $id . "'";
    if ($conn->query($log) == true) {
        $status = '1'; //Berhasil
    }
    else {
        echo "error";
    }
}
elseif ($act == "delusermanage") {
    $log = "DELETE FROM `user` WHERE id_user = '" . $id . "'";
    if ($conn->query($log) == true) {
        $status = '1'; //Berhasil
    }
    else {
        echo "error";
    }
}

echo $status;
?>
