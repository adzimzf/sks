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
            	@include('laporan_uang_masuk.form')
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
			<div class="">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Jam</th>
							<th>Denom</th>
							<th>Jumlah</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>12:30</td>
							<td>100.000</td>
							<td>3.000.000</td>
							<td>delete edit</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="2">Total :</td>
							<td>12929929</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
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
</script>
@stop