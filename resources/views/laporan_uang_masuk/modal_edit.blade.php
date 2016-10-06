<form action="" method="post" id="modalForm" accept-charset="utf-8">
<div class="modal fade" id="modal_edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<div class="input-group date" data-date-format="yyyy-mm-dd" data-provide="datepicker">
				  <input type="text" name="tanggal_keluar" value="" class="form-control datepicker" id="datepicker2">
				  <div class="input-group-addon">
				    <span class="glyphicon glyphicon-calendar"></span>
				  </div>
				</div><!-- /.input group -->
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"></input>
				<label>Jam</label>
				  <div class="input-group bootstrap-timepicker timepicker">
						<input type="text" name="modalJam" id="modalJam" value="" class="form-control" required="">
					  <div class="input-group-addon">
					    <span class="glyphicon glyphicon-time"></span>
						</div>
					</div><!-- /.input group -->
				<label>Denom</label>
				<select id="modalDenom" class="select2" name="modalDenom" style="width: 100%;" required="">
						<option value="100000">100.000,00</option>
						<option value="50000">50.000,00</option>
						<option value="20000">20.000,00</option>
						<option value="10000">10.000,00</option>
						<option value="5000">5.000,00</option>
						<option value="2000">2.000,00</option>
						<option value="1000">1.000,00</option>
				</select>
				<label>Jumlah</label>
				<input type="number" id="modalJumlah" name="modalJumlah" class="form-control" required="">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" id="simp" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
</form>