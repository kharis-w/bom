function logout() {
    swal({
        title: "Apakah anda yakin ?",
        icon: "warning",
        buttons: ["Batal", "Keluar"],
        dangerMode: true,
    }).then((isConfirm) => {
        if (isConfirm) {
            swal("Logout berhasil !", "", "success").then(function() {
                window.location.replace("modul/logout.php");
            });
        }
    });
}