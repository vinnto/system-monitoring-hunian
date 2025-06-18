$(document).ready(function () {
    $("#periode-table").DataTable({
        responsive: true,
    });

    $(".edit-btn").click(function () {
        var url = $(this).data("url");

        $("#editPeriodeForm").attr("action", url);
    });

    function initYearPicker(selector) {
        $(selector + " input").datepicker({
            format: "yyyy",
            minViewMode: 2,
            autoclose: true,
        });
    }

    $(document).ready(function () {
        initYearPicker("#yearAdd");
        initYearPicker("#yearEdit");
    });

    $(".delete-btn").click(function () {
        var url = $(this).data("url");
        $("#deletePeriodeForm").attr("action", url);
    });
});
