$(document).ready(function () {
    $("#status-pm-periode").DataTable({
        responsive: true,
    });

    $(".edit-btn").click(function () {
        var url = $(this).data("url");
        var status_pm = $(this).data("status_pm");

        $("#editStatusPenerimaManfaatForm").attr("action", url);
        $("#edit_status_pm").val(status_pm);
    });

    $(".delete-btn").click(function () {
        var url = $(this).data("url");
        $("#deleteStatusPenerimaManfaatForm").attr("action", url);
    });
});
