$(document).ready(function () {
  $("#tempat-tinggal-table").DataTable({
    responsive:true
  });

  $(".edit-btn").click(function () {
    var tempat_tinggal = $(this).data("tempat_tinggal");
    var url = $(this).data("url");
    
    $("#edit_tempat_tinggal").val(tempat_tinggal);
    $("#editTempatTinggalForm").attr("action", url);
  })

  $(".delete-btn").click(function () {
    var url = $(this).data("url");

    $("#deleteTempatTinggalForm").attr("action", url);
  });
});