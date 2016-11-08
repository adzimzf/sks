$(function () {
	 //jQuery fungction

   //tabel
   function isiDataAPI(tanggal){
      $.ajax ({
        type: "GET",
        url: 'laporanSortasi/isiDataAPI/'+tanggal,
        dataType: "json",
        success: function(results) {
            var data = '';
            var j100 = 0;
            var j50 = 0;
            var j20 = 0;
            var j10 = 0;
            var j5 = 0;
            var j2 = 0;
            var j1 = 0;
            var j =0;
            $.each(results, function(k, v){
                data += "<tr>"+
                          "<td>"+v.operator+"</td>"+
                          "<td class='text-right'>"+v.d100+"</td>"+
                          "<td class='text-right'>"+v.d50+"</td>"+
                          "<td class='text-right'>"+v.d20+"</td>"+
                          "<td class='text-right'>"+v.d10+"</td>"+
                          "<td class='text-right'>"+v.d5+"</td>"+
                          "<td class='text-right'>"+v.d2+"</td>"+
                          "<td class='text-right'>"+v.d1+"</td>"+
                          "<td>"+v.aksi+"</td>"+
                        "</tr>";
                j100 += Number(unformat(v.d100));
                j50 += Number(unformat(v.d50));
                j20 += Number(unformat(v.d20));
                j10 += Number(unformat(v.d10));
                j5 += Number(unformat(v.d5));
                j2 += Number(unformat(v.d2));
                j1 += Number(unformat(v.d1));
           });
           $("#tableBody").html(data);
           var j = j100+j50+j20+j10+j5+j2+j1;
           var foot = "<tr class='text-bold bg-danger'>"+
                        "<td>Total</td>"+
                        "<td class='text-right'>"+j100.format(2)+"</td>"+
                        "<td class='text-right'>"+j50.format(2)+"</td>"+
                        "<td class='text-right'>"+j20.format(2)+"</td>"+
                        "<td class='text-right'>"+j10.format(2)+"</td>"+
                        "<td class='text-right'>"+j5.format(2)+"</td>"+
                        "<td class='text-right'>"+j2.format(2)+"</td>"+
                        "<td class='text-right'>"+j1.format(2)+"</td>"+
                        "<td class='text-right bg-info'>"+j.format(2)+"</td>"+
                      "</tr>";
            $("#tableFoot").html(foot);

        }
      });
   }
   $('.tanggal').datepicker().on('changeDate', function (ev) {
      isiDataAPI($("#tanggal").val());
   });
   $( window ).load(function() {
      isiDataAPI($("#datepicker").val());
   });
});


//membuat tanggal
var d = new Date();
var years = d.getFullYear();
var month = d.getMonth()+1;
var date = d.getDate();
var tgl = years+"-"+addNoll(month)+"-"+addNoll(date);
$(".tanggal").val(tgl);
$(".tanggal").text(tgl);

//Initialize Select2 Elements
$(".select2").select2();

//membuat fungsi
function addNoll(st) {
	if (st <= 9) {
		return "0"+st;
	}else{
		return st;
	}
}