@extends('layouts.master')
@section('js')
@endsection
@section('container')
<div class="row mydiv">
	<div class="col-md-6">
		<div class="box box-solid">
        <div class="box-header">
          <h3 class="box-title text-blue">Input Laporan Sortasi</h3>
          <div class="box-tools pull-right">
          	<button class="btn btn-box-tool" data-widget="collapse">
          		<i class="fa fa-minus"></i>
          	</button>
          	<button class="btn btn-box-tool" data-widget="remove">
          		<i class="fa fa-remove"></i>
          	</button>
          </div>
				</div>
        <!-- /.box-header -->
      <div class="box-body text-center">
        <form action="laporanSortasi/simpan" method="post" class="form-horizontal">
        	@include('laporanSortasi.form')
        </form>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
	</div>
</div>
<div class="row mydiv">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
        <label for="tanggal" class="box-title text-blue col-md-2 control-label">Hasil Sortasi Tanggal</label>
        <div class="col-md-2">
          <input type="text" name="tanggal" value="" class="form-control tanggal" id="tanggal" data-date-format="yyyy-mm-dd" data-provide="datepicker">
        </div>
        <div class="box-tools pull-right">
         	<button class="btn btn-box-tool" data-widget="collapse">
         		<i class="fa fa-minus"></i>
         	</button>
         	<button class="btn btn-box-tool" data-widget="remove">
         		<i class="fa fa-remove"></i>
         	</button>
         </div>
			</div>
			<div class="box-body">
				@include('laporanSortasi.tabel')
			</div>
		</div>
	</div>
</div>
<script src="{{url('js/page/laporanSortasi.js')}}" type="text/javascript"></script>
@endsection