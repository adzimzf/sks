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
});
function unformat(str){
  return str.replace(/[^0-9\.]+/g,"");
}
