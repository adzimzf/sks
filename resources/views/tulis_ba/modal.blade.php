<form action="tambah_teler" method="post" accept-charset="utf-8">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"></input>
<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Teller</h4>
			</div>
			<div class="modal-body">
				<label>Cabang</label>
			    <div class="input-group" style="width:100%;">
			      <select class="select2" name="cabang" style="width: 100%;">
			        @foreach($cabang as $cabang)
			          <option value="{{$cabang->id}}">{{$cabang->nama}}</option>
			        @endforeach
			      </select>
			    </div><!-- /input-group -->
			    <label>Nama Teler</label>
			    <div class="input-group col-md-12">
			      <input type="text" name="nama" placeholder="Nama Teller / Npp Teller" class="form-control ">
			    </div><!-- /.input group -->
			    <label>NPP Teller:</label>
			    <div class="input-group col-md-12">
			      <input type="text" name="npp" placeholder="NPP Teller" class="form-control ">
			    </div><!-- /.input group -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary">Tambah</button>
			</div>
		</div>
	</div>
</div>
</form>
