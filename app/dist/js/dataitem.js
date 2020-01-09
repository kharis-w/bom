var shortcut = document.dataitem;

jQuery(document).ready(function() {
    // hide panelForm
    jQuery('#panelForm').hide();
    // add button
    jQuery('#btn-add-item').click(function() {
        jQuery('#bookform_input')[0].reset();
        jQuery('#panelForm').show(500);
        jQuery('#panelForm2').hide(500);
        jQuery('#act').val('adddataitem');
        $('#id_item').prop('readonly', false);
    });
    jQuery('#btn-edit-item').click(function() {
        jQuery('#bookform_input')[0].reset();
        jQuery('#panelForm').show(500);
        jQuery('#panelForm2').hide(500);
        jQuery('#act').val('editdataitem');
        $('#id_item').prop('readonly', false);
    });
    // cancel button
    jQuery('#btn-cancel').click(function() {
        jQuery('#bookform_input')[0].reset();
        jQuery('#panelForm').hide(500);
        jQuery('#panelForm2').show(500);
        jQuery('#act').val('');
        jQuery('#next-form').val('');
    });
});

var shortcut = document.bookform_input;

// Tambah data item
function adddataitem() {
    var form            = $('#bookform_input')[0];
    var formData        = new FormData(form);
    var id_item         = $('#id_item').val();
    var kd_item         = $('#kd_item').val();
    var ket_item        = $('#ket_item').val();
    var jmlh_item       = $('#jmlh_item').val();
    var sat_item        = $('#sat_item').val();
    var category_item   = $('#category_item').val();
    var created_by      = $('#created_by').val();
    var edited_by       = $('#edited_by').val();
    var created_on      = $('#created_on').val();
    var edited_on       = $('#edited_on').val();
    var act             = $('#act').val();
    var id              = $('#id').val();


    if (shortcut.kd_item.value == "") {
        shortcut.kd_item.style.borderColor = '#ff3333';
        shortcut.kd_item.style.borderWidth = "medium";
        shortcut.kd_item.focus();
        return false;
    } else shortcut.kd_item.style.borderColor = '#33ff33';
    shortcut.kd_item.style.borderWidth = "medium";

    if (shortcut.ket_item.value == "") {
        shortcut.ket_item.style.borderColor = '#ff3333';
        shortcut.ket_item.style.borderWidth = "medium";
        shortcut.ket_item.focus();
        return false;
    } else shortcut.ket_item.style.borderColor = '#33ff33';
    shortcut.ket_item.style.borderWidth = "medium";

    if (shortcut.jmlh_item.value == "") {
        shortcut.jmlh_item.style.borderColor = '#ff3333';
        shortcut.jmlh_item.style.borderWidth = "medium";
        shortcut.jmlh_item.focus();
        return false;
    } else shortcut.jmlh_item.style.borderColor = '#33ff33';
    shortcut.jmlh_item.style.borderWidth = "medium";

    if (shortcut.sat_item.value == "") {
        shortcut.sat_item.style.borderColor = '#ff3333';
        shortcut.sat_item.style.borderWidth = "medium";
        shortcut.sat_item.focus();
        return false;
    } else shortcut.sat_item.style.borderColor = '#33ff33';
    shortcut.sat_item.style.borderWidth = "medium";

    if (shortcut.category_item.value == "") {
        shortcut.category_item.style.borderColor = '#ff3333';
        shortcut.category_item.style.borderWidth = "medium";
        shortcut.category_item.focus();
        return false;
    } else shortcut.category_item.style.borderColor = '#33ff33';

    $.post("modul/dataitem.php", {
        act             : act,
        id              : id,
        id_item         : id_item,
        kd_item         : kd_item,
        ket_item        : ket_item,
        jmlh_item       : jmlh_item,
        sat_item        : sat_item,
        category_item   : category_item,
        created_by      : created_by,
        edited_by       : edited_by,
        created_on      : created_on,
        edited_on       : edited_on
    }, function(data, status) {
        if (data == '1') {
            location.reload();
        } else {swal("Mohon Periksa Kembali Data Yang Anda Masukkan !", {
                        icon: "error",
                    })
    }
    });
}

// Edit dataitem
function editData(id) {
    $.post("modul/dataitem.php", {
        id  : id,
        act : 'dataitem'
    }, function(data, status) {
        if (status == 'success') {
            var temp = data.split('#');
            jQuery('#panelForm').show(500);
            jQuery('#act').val('editdataitem');
            jQuery('#id').val(temp[0]);
            $('#id_item').val(temp[0]);
            $('#kd_item').val(temp[1]);
            $('#ket_item').val(temp[2]);
            $('#jmlh_item').val(temp[3]);
            $('#sat_item').val(temp[4]);
            $('#category_item').val(temp[5]);
            $('#created_by').val(temp[6]);
            $('#edited_by').val(temp[7]);
            $('#created_on').val(temp[8]);
            $('#edited_on').val(temp[9]);
            $('#id_item').prop('readonly', true);
        }
    });
}

// Hapus dataitem
function delData(id, no) {
    swal({
        title       : "Apakah anda yakin ?",
        text        : "File yang dihapus tidak dapat dikembalikan !",
        icon        : "warning",
        buttons     : ["Batal", "Hapus"],
        dangerMode  : true,
    }).then((isConfirm) => {
        if (isConfirm) {
            $.post("modul/dataitem.php", {
                act: 'deldataitem',
                id: id
            }, function(data, status) {
                if (status == 'success') {
                    swal("Data berhasil dihapus!", {
                        icon: "success",
                    }).then(function() {
                        location.reload();
                    });
                    $('#row' + no).remove();
                }
            });
        }
    });
}