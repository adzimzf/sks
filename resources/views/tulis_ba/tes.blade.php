@extends('layouts.master')
@section('container')
@include('tulis_ba.modal')
<!--box default-->
<div class="box box-default">
<!--box header-->
<div class="box-header with-border">
  <h3 class="box-title">Data-data BA Cabang</h3>
  <button class="btn btn-success pull-right"  data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i>   Teler</button>
</div><!--/box header-->
<!--box body-->
<div class="box-body">
  <!--bikin form-->
  <form action="cetak" method="post">
    @include('tulis_ba.form')
    <div class="row">
      <!--kolom-->
      <div class="col-md-12" style="margin-top: 20px;">
        <div class="btn btn-group" style="width: 100%;">
        <center>
          <button name="btn" type="submit" class="btn btn-danger" value="pdf" style="width: 49%;">PDF</button>
          <button name="btn" type="submit" class="btn btn-primary" value="print" style="width: 49%">Cetak</button>
        </center>
        </div>
      </div><!--/kolom-->
    </div><!--/row untuk button-->
  </form>

</div><!--/box body-->
</div>
<!--scrpit for element-->
<script type="text/javascript">
  $(function () {
    $("#total-temuan").autoNumeric('init');
    $("#jam").inputmask("99:99");
    $("#temuan").change(function(){
      var tes = $(this).val();
      if(tes=='lebih' || tes=='kurang' || tes=='palsu' || tes=='mutilasi'){
        if (tes=='mutilasi') {
          $("#nomer-seri").inputmask("aaa-999-999 / aaa-999-999");
          $("#nomer-seri").attr('placeholder', 'abc-123-456 / abc-123-456');
        }else{
          $("#nomer-seri").inputmask("aaa-999-999");
          $("#nomer-seri").attr('placeholder', 'abc-123-456');
        }
        $("#tes").text(tes+" muncul div");
        $("#div-temuan-bedadenom").hide();
        $("#div-temuan").show();
      }else{
        $("#tes").text("yang lain nya");
        $("#div-temuan").hide();
        $("#div-temuan-bedadenom").show();
      }

    });
    $("#jumlah-beda-denom").keyup(function(){
      var jumlah = $(this).val();
      var denom = parseInt($("#denom").val());
      var denom_1 = parseInt($("#denom-beda1").val());
      var denom_2 = parseInt($("#denom-beda2").val());
      var denom_3 = parseInt($("#denom-beda3").val());
      var denom_4 = parseInt($("#denom-beda4").val());
      var denom_5 = parseInt($("#denom-beda5").val());
      if (jumlah == '2') {
        $("#denom-beda-2").show();
        $("#denom-beda-3").hide();
        $("#denom-beda-4").hide();
        $("#denom-beda-5").hide();
        var total = denom-(denom_1+denom_2);
      }else if (jumlah == '3') {
        $("#denom-beda-2").show();
        $("#denom-beda-3").show();
        $("#denom-beda-4").hide();
        $("#denom-beda-5").hide();
        var total = denom-(denom_1+denom_2+denom_3);
      }else if (jumlah == '4') {
        $("#denom-beda-2").show();
        $("#denom-beda-3").show();
        $("#denom-beda-4").show();
        $("#denom-beda-5").hide();
        var total = denom-(denom_1+denom_2+denom_3+denom_4);
      }else if (jumlah == '5') {
        $("#denom-beda-2").show();
        $("#denom-beda-3").show();
        $("#denom-beda-4").show();
        $("#denom-beda-5").show();
        var total = denom-(denom_1+denom_2+denom_3+denom_4+denom_5);
      }else{
        $("#denom-beda-2").hide();
        $("#denom-beda-3").hide();
        $("#denom-beda-4").hide();
        $("#denom-beda-5").hide();
        var total = denom-denom_1;
      }
      total = total.format(2);
      $("#total-beda").val(total);
    });
    $("#jumlah-temuan").keyup(function(){
      var jumlah = parseInt($(this).val());
      var denom = parseInt($("#denom").val());
      var total = jumlah*denom;
      $("#total-temuan").val(total);
    });
    $("#div-temuan-bedadenom").keyup(function(){
      var jumlah = $(this).val();

    });
    //input mask
    $("[data-mask]").inputmask();
    //Number formating
    //cara menggunakan angka.format(2)
    Number.prototype.format = function(n, x) {
      var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
      return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
    };
  });//end of jQuery function

  //Initialize Select2 Elements
  $(".select2").select2();
  //Timepicker
  $("#timepicker").timepicker({
    showMeridian: false,
    defaultTime: true
  });
  //Date picker
  $('.datepicker').datepicker({
    dateFormat:'yy-mm-dd'
  });
  //Initialize timepicker Elements
  $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

</script>
@endsection