<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<div class="form-group">
  	<label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
    <div class="col-sm-10 ">
      <input type="text" name="tanggal" value="" class="form-control tanggal" id="datepicker" data-date-format="yyyy-mm-dd" data-provide="datepicker">
    </div>
</div><!-- /.input group -->
<div class="form-group">
  <label for="nama" class="col-sm-2 control-label">Nama</label>
  <div class="col-sm-10">
    {{-- get from table operator --}}
    <select id="operator" class="select2" name="operator" style="width: 100%;" required="">
    <option value=""> - </option>
    <option value="Imah">Imah</option>
    <option value="Mono">Mono</option>
    <option value="Mintul">Mintul</option>
    <option value="Janah">Janah</option>
  </select>
  </div>
</div>
<div class="form-group">
  <label for="denom" class="col-sm-2 control-label">Denom</label>
  <div class="col-sm-10">
  @include("laporanSortasi.denom")
  </div>
</div>
<div class="form-group">
  <label for="jumlah" class="col-sm-2 control-label">Jumlah</label>
  <div class="col-sm-10">
    <input type="text" class="form-control autoNumeric" name="jumlah" id="jumlah" placeholder="" required="" data-an-default="123.456">
  </div>
</div>
<button type="submit" class="btn btn-primary btn-block btn-flat">Input</button>