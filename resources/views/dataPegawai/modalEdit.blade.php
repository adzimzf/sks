<div class="modal fade" id="modalEdit">
	<div class="modal-dialog">
		<div class="modal-content">
			<form id="modalEditForm" action="simpanManager" method="post" accept-charset="utf-8">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Edit Data</h4>
				</div>
				<div class="modal-body">
					<label for="nama" class="col-md-2">Nama</label>
					<div class="form-group col-md-10">
						<input type="text" id="editNama" name="nama" class="	form-control" foc>
					</div>
					<label for="" class="col-md-2">NPP</label>
					<div class="form-group col-md-10">
						<input type="text" id="editNpp" name="npp" class="	form-control">
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