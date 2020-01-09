$(document).ready(function() {
    $("table[id^='TABLE']").DataTable({
        "scrollCollapse": true,
        "searching": true,
        "paging": true
    });
});