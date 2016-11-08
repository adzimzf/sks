$(function () {
	 //jQuery fungction
   $("td a").click(function(event) {
     var data = $(this).attr('title');
     $.ajax({
       url: "dataPegawai/"+data,
       type: 'GET',
       dataType: 'json',
       success: function(results){
          $("#editNama").val(results.nama);
          $("#editNpp").val(results.npp);
          $("#modalEditForm").attr('action', "dataPegawai/"+data+"/update");
       }
     });
   });

   //box save btn
   $("#add-cabang").click(function(event) {
     $("#box-btn").css('display', 'none');
     $("#box-save").css('display', 'block');
     $("#form-simpan-cabang").attr('action', 'simpanCabang');
     $("#btn-save-cabang").val("save");
   });
   $("#btn-cancel-cabang").click(function(event) {
     $("#box-save").css('display', 'none');
     $("#box-btn").css('display', 'block');
     $("#form-simpan-cabang").attr('action', '#');
   });
   //a cabang on click
   $("#a-update-cabang").click(function(event) {
      $("#box-btn").css('display', 'none');
      $("#box-save").css('display', 'block');
      var url = $("#a-update-cabang").attr('title');
      $("#form-simpan-cabang").attr('action', url);
      $("#btn-save-cabang").val("update");

      //replace /update from url
      var url = url.replace('dataPegawai/', '');
      var url = url.replace('/update', '');
      $.ajax({
       url: "dataPegawai/"+url,
       type: 'GET',
       dataType: 'json',
       success: function(results){
          $("#nama-cabang-edit").val(results.nama);
        }
     });
   });

});