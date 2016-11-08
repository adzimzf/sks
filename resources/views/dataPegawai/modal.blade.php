<div class="modal fade" id="modal-add-manajer">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="simpanManager" method="post" accept-charset="utf-8">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Tambah Manager</h4>
				</div>
				<div class="modal-body">
					<label for="nama" class="col-md-2">Nama</label>
					<div class="form-group col-md-10">
						<input type="text" id="nama" name="nama" class="	form-control" foc>
					</div>
					<label for="" class="col-md-2">NPP</label>
					<div class="form-group col-md-10">
						<input type="text" id="" name="npp" class="	form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
{{-- modal add penyelia --}}
<div class="modal fade" id="modal-add-penyelia">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="add-manajer" action="simpanPenyelia" method="post" accept-charset="utf-8">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Tambah penyelia</h4>
				</div>
				<div class="modal-body">
					<label for="nama" class="col-md-2">Nama</label>
					<div class="form-group col-md-10">
						<input type="text" id="nama" name="nama" class="	form-control" foc>
					</div>
					<label for="" class="col-md-2">NPP</label>
					<div class="form-group col-md-10">
						<input type="text" id="" name="npp" class="	form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
{{-- modal add operator --}}
<div class="modal fade" id="modal-add-operator">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="add-manajer" action="simpanOperator" method="post" accept-charset="utf-8">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Tambah Operator</h4>
				</div>
				<div class="modal-body">
					<label for="nama" class="col-md-2">Nama</label>
					<div class="form-group col-md-10">
						<input type="text" id="nama" name="nama" class="	form-control" foc>
					</div>
					<label for="" class="col-md-2">NPP</label>
					<div class="form-group col-md-10">
						<input type="text" id="" name="npp" class="	form-control">
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>