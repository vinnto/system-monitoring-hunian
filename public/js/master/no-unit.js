$(document).ready(function () {
    $("#no-unit-table").DataTable({
        responsive: true,
    });

    $(".edit-btn").click(function () {
        var no = $(this).data("no");
        var url = $(this).data("url");

        $("#edit_no_unit").val(no);
        $("#editNoUnitForm").attr("action", url);
    });

    $(".delete-btn").click(function () {
        var url = $(this).data("url");
        $("#deleteNoUnitForm").attr("action", url);
    });
});
