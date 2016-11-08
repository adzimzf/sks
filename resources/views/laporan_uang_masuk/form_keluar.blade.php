<div class="input-group" >
  <input type="text" name="tanggal_keluar" value="" class="form-control tanggal datepicker" id="datepicker2" data-date-format="yyyy-mm-dd" data-provide="datepicker">
  <div class="input-group-addon">
    <span class="glyphicon glyphicon-calendar"></span>
  </div>
</div><!-- /.input group -->
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"></input>
<label>Jam</label>
  <div class="input-group">
		<input type="text" name="jam_keluar" value="" class="form-control jamMask" data-mask required="required">
	  <div class="input-group-addon">
	    <span class="glyphicon glyphicon-time"></span>
		</div>
	</div><!-- /.input group -->
<label>Denom</label>
@include("laporan_uang_masuk.denomKeluar")
{{-- <select id="denom" class="select2" name="denom_keluar" style="width: 100%;" required="">
		<option value="100000">100.000,00</option>
		<option value="50000">50.000,00</option>
		<option value="20000">20.000,00</option>
		<option value="10000">10.000,00</option>
		<option value="5000">5.000,00</option>
		<option value="2000">2.000,00</option>
		<option value="1000">1.000,00</option>
</select> --}}
<label>Jumlah</label>
<input type="text" name="jumlah_keluar" class="form-control autoNumeric" required="" data-an-default="123.456">
<br>
<button type="submit" class="btn btn-default btn-block btn-flat">Input</button>