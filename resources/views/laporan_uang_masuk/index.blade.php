@extends('layouts.master')
@section('container')
<div class="row">
	<div class="col-md-6">
		<div class="box box-solid">
           <div class="box-header">
             <h3 class="box-title text-blue">Uang Masuk</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
            	<form action="isiUangMasuk" method="post">
            	@include('laporan_uang_masuk.form')
            	</form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
		</div>
	<div class="col-md-6" >
		<div class="box box-solid">
       <div class="box box-solid">
           <div class="box-header">
             <h3 class="box-title text-blue">Uang Keluar</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body text-center">
               <form action="isiUangKeluar" method="post">
            	@include('laporan_uang_masuk.form_keluar')
            	</form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
	</div>
</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary" style="width:98%; margin:10px;">
			<div class="box-header">
				<label>Data Uang Masuk dan Keluar</label>
			</div>
			<div class="box" style="width:49%; display:inline-block;">
			@include('laporan_uang_masuk.tabel_masuk')
			<!-- /.box -->
			</div>
			<div class="box" style="width:49%; display:inline-block; float:right;">
				@include('laporan_uang_masuk.tabel_keluar')
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
//membuat tanggal
	var d = new Date();
	var years = d.getFullYear();
	var month = d.getMonth()+1;
  	var date = d.getDate();
  	var tgl = years+"-"+addNoll(month)+"-"+addNoll(date);
  	$("#datepicker, #datepicker2").val(tgl);
//Initialize Select2 Elements
  $(".select2").select2();
	//Timepicker
  $("#timepicker1").timepicker({
    showMeridian: false,
    defaultTime: true
  });
  $("#timepicker2").timepicker({
    showMeridian: false,
    defaultTime: true
  });
  //membuat fungsi
  function addNoll(st) {
  	if (st <= 9) {
  		return "0"+st;
  	}else{
  		return st;
  	}
  }
</script>
<script type="text/javascript" charset="utf-8" async defer>


</script>
@stop