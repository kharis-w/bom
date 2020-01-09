<?php
include '../config/config.php';
session_start();
if (empty($_SESSION[username]) AND empty($_SESSION[password])) {
    header('location:  login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'dist/head.php' ?>
  <title>Data Item</title>
</head>

<body id="page-top">
  <?php include 'dist/content/dataitem.php' ?>

  <?php include 'dist/js.all.php'; ?>

  <!-- Only This Page -->
  <!-- DataTable -->
  <script src="../src/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../src/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="../dist/js/demo/datatables-demo.js"></script>

  <script type="text/javascript" src="dist/js/dataitem.js"></script>

</body>

</html>