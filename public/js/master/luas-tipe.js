$(document).ready(function () {
    $("#luas-tipe-table").DataTable({
        responsive: true,
    });

    $(".edit-btn").click(function () {
        var tipe = $(this).data("tipe");
        var url = $(this).data("url");

        $("#edit_luas_tipe").val(tipe);
        $("#editLuasTipeForm").attr("action", url);
    });

    $(".delete-btn").click(function () {
        var url = $(this).data("url");
        $("#deleteLuasTipeForm").attr("action", url);
    });
});
