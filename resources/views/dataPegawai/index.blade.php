@extends('layouts.master')
@section('js')
<script src="{{('js/page/dataPegawai.js')}}"></script>
@endsection
@section('container')
@include("dataPegawai.modal")
@include("dataPegawai.modalEdit")
<div class="row mydiv">
	<div class="col-md-4">
		<div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title text-blue">Manager</h3>
	        	<div class="box-tools pull-right">
		          	<button class="btn btn-box-tool" data-widget="collapse">
		          		<i class="fa fa-minus"></i>
		          	</button>
		          	<button class="btn btn-box-tool" data-widget="remove">
		          		<i class="fa fa-remove"></i>
		          	</button>
		          	<a class="btn btn-primary pull-left btn-xs" data-toggle="modal" href='#modal-add-manajer'>ADD</a>
	        	</div>
	        </div>
	        <div class="box-body">
	        	@include("dataPegawai.tabelManajer")
	        </div>
		</div>
	</div>
	{{-- And of col --}}
	<div class="col-md-4">
		<div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title text-blue">Penyelia</h3>
	        	<div class="box-tools pull-right">
		          	<button class="btn btn-box-tool" data-widget="collapse">
		          		<i class="fa fa-minus"></i>
		          	</button>
		          	<button class="btn btn-box-tool" data-widget="remove">
		          		<i class="fa fa-remove"></i>
		          	</button>
		          	<a class="btn btn-primary pull-left btn-xs" data-toggle="modal" href='#modal-add-penyelia'>ADD</a>
	        	</div>
	        </div>
	        <div class="box-body">
	        	@include("dataPegawai.tabelPenyelia")
	        </div>
		</div>
	</div>
	{{-- end of coll --}}
	<div class="col-md-4">
		<div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title text-blue">Operator</h3>
	        	<div class="box-tools pull-right">
		          	<button class="btn btn-box-tool" data-widget="collapse">
		          		<i class="fa fa-minus"></i>
		          	</button>
		          	<button class="btn btn-box-tool" data-widget="remove">
		          		<i class="fa fa-remove"></i>
		          	</button>
		          	<a class="btn btn-primary pull-left btn-xs" data-toggle="modal" href='#modal-add-operator' id="add-operator">ADD</a>
	        	</div>
	        </div>
	        <div class="box-body">
	        	@include("dataPegawai.tabelOperator")
	        </div>
		</div>
	</div>
</div>
{{-- end of my div --}}
<div class="row mydiv">
	<div class="col-md-4">
		<div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title text-blue">Cabang</h3>
	        	<div class="box-tools pull-right" id="box-btn">
		          	<button class="btn btn-box-tool" data-widget="collapse">
		          		<i class="fa fa-minus"></i>
		          	</button>
		          	<button class="btn btn-box-tool" data-widget="remove">
		          		<i class="fa fa-remove"></i>
		          	</button>
		          	<a class="btn btn-primary pull-left btn-xs" data-toggle="modal" href='#modal-add-cabang' id="add-cabang">ADD</a>

	        	</div>
	        	<div class="box-tools" id="box-save" style="display: none;">
	        		@include("dataPegawai.formAddCabang")
	        	</div>
	        </div>
	        <div class="box-body">
	        	@include("dataPegawai.tabelCabang")
	        </div>
		</div>
	</div>
	{{-- And of col --}}
	<div class="col-md-4">
		<div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title text-blue">Teler</h3>
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
	        	@include("dataPegawai.tabelTeler")
	        </div>
		</div>
	</div>
	{{-- end of coll --}}
	<div class="col-md-4">
		<div class="box box-success">
	        <div class="box-header">
	          <h3 class="box-title text-blue">Operator</h3>
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
	        	@include("dataPegawai.tabelOperator")
	        </div>
		</div>
	</div>
</div>
@endsection