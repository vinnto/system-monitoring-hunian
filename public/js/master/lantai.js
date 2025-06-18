$(document).ready(function () {
    $("#lantai-table").DataTable({
        responsive: true,
    });

    $(".edit-btn").click(function () {
        var lantai = $(this).data("lantai");
        var url = $(this).data("url");

        $("#edit_lantai").val(lantai);
        $("#editLantaiForm").attr("action", url);
    });

    $(".delete-btn").click(function () {
        var url = $(this).data("url");
        $("#deleteLantaiForm").attr("action", url);
    });
});
