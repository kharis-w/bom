 var shortcut = document.bookform;

 function login() {
     var username = $('#username').val();
     var pass = $('#pass').val();

     if (shortcut.username.value == '') {
         shortcut.username.style.borderColor = '#ff3333';
        shortcut.username.style.borderWidth = "medium";
        shortcut.username.focus();
         return false;
     }
     if (shortcut.pass.value ='') {
        shortcut.pass.style.borderColor = '#ff3333';
        shortcut.pass.style.borderWidth = "medium";
        shortcut.pass.focus();
        return false;
    }

     $.post("modul/login.php", {
         act: 'login_user',
         username: username,
         pass: pass
     }, function(data, status) {
         if (status == 'success') {
             //$('#demo-modal-wo-anim').modal('show');
             if (data == 1) {
                 // alert("Login berhasil.");
                 window.location.replace("index.php");
             } else if (data == 2) {
                 swal("Error !", "Username / Password Salah !", "error").then(function() {
                     window.location.replace("login.php");
                 });
             } else if (data == 0) {
                 swal("Error !", "User Tidak Ditemukan !", "error").then(function() {
                     window.location.replace("login.php");
                 });
             }
         }
     });
 }