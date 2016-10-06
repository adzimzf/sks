<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"></input>
<div class="input-group date" data-date-format="yyyy-mm-dd" data-provide="datepicker">
  <input type="text" name="tanggal" value="" class="form-control datepicker" id="datepicker">
  <div class="input-group-addon">
    <span class="glyphicon glyphicon-calendar"></span>
  </div>
</div><!-- /.input group -->

<label>Jam</label>
  <div class="input-group bootstrap-timepicker timepicker">
		<input type="text" name="jam" id="timepicker1" value="" class="form-control" required="">
	  <div class="input-group-addon">
	    <span class="glyphicon glyphicon-time"></span>
		</div>
	</div><!-- /.input group -->
<label>Denom</label>
<select id="denom" class="select2" name="denom" style="width: 100%;" required="">
		<option value="100000">100.000,00</option>
		<option value="50000">50.000,00</option>
		<option value="20000">20.000,00</option>
		<option value="10000">10.000,00</option>
		<option value="5000">5.000,00</option>
		<option value="2000">2.000,00</option>
		<option value="1000">1.000,00</option>
</select>
<label>Jumlah</label>
<input type="number" name="jumlah" class="form-control" required="">
<br>
<button type="submit" class="btn btn-default btn-block btn-flat">Input</button>