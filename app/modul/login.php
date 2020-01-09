<?php
require_once '../../config/config.php';

session_start();
$act = $_POST['act'];
$id  = $_POST['id'];

// ////////User//////////

$id_user    = $_POST['id_user'];
$username   = $_POST['username'];
$pass       = $_POST['pass'];
$category   = $_POST['category'];

// ////////////////////////////////////////////////Login//////////////////////////////////////////////////

if ($act == "login_user") {
    $log_id = mysqli_query($conn, "SELECT * FROM user WHERE username='$username'");
    $result = mysqli_num_rows($log_id);
    if ($result > 0) {
        $user = mysqli_fetch_array($log_id);
        if ($pass == base64_decode(base64_decode ($user['password']))) {
            session_start();
            $_SESSION['id_user']    = $user['id_user'];
            $_SESSION['username']   = $user['username'];
            $_SESSION['password']   = $user['password'];
            $_SESSION['category']   = $user['category'];
            $status                 = '1'; //Berhasil
        } else {
            $status = '2'; //Password salah
        }
    } else {
        $status = '0'; //Tidak ditemukan
    }
}

echo $status;
?>