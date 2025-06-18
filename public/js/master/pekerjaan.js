$(document).ready(function () {
  $("#pekerjaan-table").DataTable({
    responsive: true,
  });

  $(".edit-btn").click(function () {
    var pekerjaan = $(this).data("pekerjaan");
    var url = $(this).data("url");

    $("#edit_pekerjaan").val(pekerjaan);
    $("#editPekerjaanForm").attr("action", url);
  });

  $(".delete-btn").click(function () {
    var url = $(this).data("url");
    $("#deletePekerjaanForm").attr("action", url);
  })
});
