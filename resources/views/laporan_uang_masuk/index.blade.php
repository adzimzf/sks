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
               <label>Jam</label>
               <div class="input-group bootstrap-timepicker timepicker">
					      <input type="text" name="jam" id="timepicker1" value="" class="form-control">
					      <div class="input-group-addon">
					        <span class="glyphicon glyphicon-time"></span>
					      </div>
					    </div><!-- /.input group -->
					    <label>Denom</label>
					    <select id="denom" class="select2" name="denom" style="width: 100%;">
					      <option value="100000">100.000,00</option>
					      <option value="50000">50.000,00</option>
					      <option value="20000">20.000,00</option>
					      <option value="10000">10.000,00</option>
					      <option value="5000">5.000,00</option>
					      <option value="2000">2.000,00</option>
					      <option value="1000">1.000,00</option>
					    </select>
					    <label>Jumlah</label>
					    <input type="number" name="" class="form-control">
					    <br>
					    <button type="button" class="btn btn-default btn-block btn-flat">Input</button>
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
               <label>Jam</label>
               <div class="input-group bootstrap-timepicker timepicker">
					      <input type="text" name="jam" id="timepicker2" value="" class="form-control">
					      <div class="input-group-addon">
					        <span class="glyphicon glyphicon-time"></span>
					      </div>
					    </div><!-- /.input group -->
					    <label>Denom</label>
					    <select id="denom" class="select2" name="denom" style="width: 100%;">
					      <option value="100000">100.000,00</option>
					      <option value="50000">50.000,00</option>
					      <option value="20000">20.000,00</option>
					      <option value="10000">10.000,00</option>
					      <option value="5000">5.000,00</option>
					      <option value="2000">2.000,00</option>
					      <option value="1000">1.000,00</option>
					    </select>
					    <label>Jumlah</label>
					    <input type="number" name="" class="form-control">
					    <br>
					    <button type="button" class="btn btn-default btn-block btn-flat">Input</button>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
	</div>
</div>
</div>
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<label>Data Uang Masuk dan Keluar</label>
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