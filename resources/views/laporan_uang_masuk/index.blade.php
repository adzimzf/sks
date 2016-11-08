@extends('layouts.master')
@section('container')
@include('laporan_uang_masuk.modal_edit')
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
<script src="{{url('js/page/laporan_uang_masuk.js')}}" type="text/javascript"></script>
@stop