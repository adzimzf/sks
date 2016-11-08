<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<div class="input-group">
  <input type="text" name="tanggal" value="" class="form-control tanggal" data-date-format="yyyy-mm-dd" data-provide="datepicker">
  <div class="input-group-addon">
    <span class="glyphicon glyphicon-calendar"></span>
  </div>
</div><!-- /.input group -->

<label>Jam</label>
  <div class="input-group">
		<input type="text" name="jam" value="" class="form-control jamMask" required="" data-mask autofocus="">
	  <div class="input-group-addon">
	    <span class="glyphicon glyphicon-time"></span>
		</div>
	</div><!-- /.input group -->
<label>Denom</label>
@include("laporanSortasi.denom")
{{-- <select id="denom" class="select2" name="denom" style="width: 100%;" required="">
		<option value="100000">100.000,00</option>
		<option value="50000">50.000,00</option>
		<option value="20000">20.000,00</option>
		<option value="10000">10.000,00</option>
		<option value="5000">5.000,00</option>
		<option value="2000">2.000,00</option>
		<option value="1000">1.000,00</option>
</select> --}}
<label>Jumlah</label>
<input type="text" name="jumlah" class="form-control autoNumeric" required="" data-an-default="123.456">
<br>
<button type="submit" class="btn btn-default btn-block btn-flat">Input</button>