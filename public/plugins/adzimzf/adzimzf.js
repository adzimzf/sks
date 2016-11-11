$(function () {
	 //jQuery fungction
   $('.autoNumeric').autoNumeric('init'); 

   //autoclose date picker
   $('.tanggal').datepicker({
     autoclose: true
   });
   //nambahin koma, cara menggunakan angka.format(2)
   Number.prototype.format = function(n, x) {
      var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
      return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
    };
  
    //inputmask for jam
    $(".jamMask").inputmask("99:99");

    //numpang buat caret login
    $("#caret").click(function(event) {
      var data = $("#caret-data").attr('data');
      if (data == "hidden") {
        $("#caret-data").removeClass('hide');
        $("#caret-data").attr('data', 'show');
      }else{
        $("#caret-data").addClass('hide');
        $("#caret-data").attr('data', 'hidden');
      }
    });
});
function unformat(str){
  return str.replace(/[^0-9\.]+/g,"");
}
