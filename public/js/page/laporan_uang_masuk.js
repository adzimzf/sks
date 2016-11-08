  $(function() {
    //ajax untuk modal
      $(document).on('click', 'a', function() {
          var url = ($(this).attr('href'));
          var ket = ($(this).attr('class'));
          url = url.replace("#", "");
          if (ket == 'keluar') {
              console.log(url + '/simpanKeluar');
              $("#modalForm").attr('action', url + '/simpanKeluar');
              url = url + '/keluar';
          } else if (ket == 'masuk') {
              console.log(url + '/simpanMasuk');
              $("#modalForm").attr('action', url + '/simpanMasuk');
              url = url + '/masuk';
          }
          $.ajax({
              type: "GET",
              url: url,
              dataType: "json",
              success: function(results) {
                  var jam = '';
                  var denom = '';
                  var jumlah = '';
                  $.each(results, function(k, v) {
                      jam += v.jam;
                      jumlah += v.jumlah;
                      denom += v.denom;
                  });
                  $("#modalJam").val(jam);
                  $("#modalJumlah").val(jumlah);
                  $("#modalDenom").val(denom);
                  $("#modalDenom option[value=" + denom + "]").attr('selected', 'selected');
                  $("#modalDenom").select2("val", denom);
                  console.log(ket);

              }
          });
      });

      //ajax untuk pertama kali diload 
      $(window).load(function() {
          isiDataAPIMasuk();
          isiDataAPIKeluar();
      });

      //fungsi untuk ajax isiDataAPI uang masuk
      function isiDataAPIKeluar() {
          $.ajax({
              type: "GET",
              url: "laporan_uang_masuk/isiTabelUangKeluarAjax",
              dataType: "json",
              success: function(results) {
                  var data = 0;
                  var jum = "";
                  $.each(results, function(k, v) {
                      jum = v.jumlah;
                      data += Number(jum.replace(/[^0-9\.]+/g, ""));
                  });
                  console.log(data);
                  $("#totalKeluar").text(data.format(2));

              }
          });
      }
      // fungsi ajax untuk isi data api uang keluar
      function isiDataAPIMasuk() {
          $.ajax({
              type: "GET",
              url: "laporan_uang_masuk/isiTabelUangMasukAjax",
              dataType: "json",
              success: function(results) {
                  var data = 0;
                  var jum = "";
                  $.each(results, function(k, v) {
                      jum = v.jumlah;
                      data += Number(jum.replace(/[^0-9\.]+/g, ""));
                  });
                  $("#totalMasuk").text(data.format(2));

              }
          });
      }

      $("#uangMasuk").DataTable({
          "paging": false,
          "lengthChange": false,
          "searching": false,
          "ordering": false,
          "info": true,
          "aoColumnDefs": [
              { "sClass": "text-right", "aTargets": [2] }
          ],
          "autoWidth": false,
          ajax: {
              url: "laporan_uang_masuk/isiTabelUangMasukAjax",
              dataSrc: ''
          },
          columns: [
              { data: 'jam' },
              { data: 'denom' },
              { data: 'jumlah' },
              { data: 'aksi' }
          ]
      });
      $("#uangKeluar").DataTable({
          "paging": false,
          "lengthChange": false,
          "searching": false,
          "ordering": false,
          "info": true,
          "aoColumnDefs": [
              { "sClass": "text-right", "aTargets": [2] }
          ],
          "autoWidth": false,
          ajax: {
              url: "laporan_uang_masuk/isiTabelUangKeluarAjax",
              dataSrc: ''
          },
          columns: [
              { data: 'jam' },
              { data: 'denom' },
              { data: 'jumlah' },
              { data: 'aksi' }
          ]
      });

      //membuat tanggal sekarang
      var d = new Date();
      var years = d.getFullYear();
      var month = d.getMonth() + 1;
      var date = d.getDate();
      var tgl = years + "-" + addNoll(month) + "-" + addNoll(date);
      $(".tanggal").val(tgl);
  });
  //Initialize Select2 Elements
  $(".select2").select2();



  //membuat fungsi
  function addNoll(st) {
      if (st <= 9) {
          return "0" + st;
      } else {
          return st;
      }
  }
