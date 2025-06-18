$(document).ready(function () {
    $("#lokasi-table").DataTable({
        responsive: true,
    });

    $(".edit-btn").click(function () {
        var lokasi = $(this).data("lokasi");
        var url = $(this).data("url");

        $("#edit_lokasi").val(lokasi);
        $("#editLokasiForm").attr("action", url);
    });

    $(".delete-btn").click(function () {
        var url = $(this).data("url");
        $("#deleteLokasiForm").attr("action", url);
    });
});
