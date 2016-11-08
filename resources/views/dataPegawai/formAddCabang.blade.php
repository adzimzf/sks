<form id="form-simpan-cabang" action="simpanCabang" class="form-horizontal" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<div class="input-group">
      <input type="text" name="nama" class="form-control" id="nama-cabang-edit" required="">
      <div class="input-group-addon">
        <input type="submit" class="btn btn-primary btn-xs" value="save" name="" id="btn-save-cabang">
        <button type="button" id="btn-cancel-cabang" class="btn btn-xs">
        	<li class="fa fa-times"></li>
        </button>
      </div>
    </div>
</form>
