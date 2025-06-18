$(document).ready(function () {
    $("#tower-table").DataTable({
        responsive: true,
    });

    $(".edit-btn").click(function () {
        var tower = $(this).data("tower");
        var url = $(this).data("url");

        $("#edit_tower").val(tower);
        $("#editTowerForm").attr("action", url);
    });

    $(".delete-btn").click(function () {
        var url = $(this).data("url");
        $("#deleteTowerForm").attr("action", url);
    });
});
