@extends('layouts.master')
@section('container')
<!--box header-->
<div class="box-header with-border">
  <h3 class="box-title">Data-data BA Cabang</h3>
  <button class="btn btn-success pull-right"><i class="fa fa-plus"></i>   Teler</button>
</div><!--/box header-->
<!--box body--> 
<div class="box-body">
	<!--bikin form--> 
	<form>
		@include('tulis_ba.form')
		<div class="row">
      <!--kolom-->
      <div class="col-md-12" style="margin-top: 20px;">
        <div class="btn btn-group" style="width: 100%;">
        <center>
          <button class="btn btn-danger" style="width: 49%;">PDF</button>
          <button class="btn btn-primary" style="width: 49%">Cetak</button>
        </center>
        </div>
      </div><!--/kolom-->
    </div><!--/row untuk button-->
	</form>
</div><!--/box body-->
<!--scrpit for element-->
<script type="text/javascript">
	//Initialize Select2 Elements
  $(".select2").select2();
</script>
@endsection