$(document).ready(function () {
    $("#keterangan-table").DataTable({
        responsive: true,
    });

    $(".edit-btn").click(function () {
        var keterangan = $(this).data("keterangan");
        var url = $(this).data("url");

        $("#edit_keterangan").val(keterangan);
        $("#editKeteranganForm").attr("action", url);
    });

    $(".delete-btn").click(function () {
        var url = $(this).data("url");

        $("#deleteKeteranganForm").attr("action", url);
    });
});
