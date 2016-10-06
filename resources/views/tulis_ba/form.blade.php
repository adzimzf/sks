 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"></input>
<div class="row">
  <!--kolom pertama-->
  <div class="col-md-6">
    <!-- /input-group dan label nya -->
    <label>Nomer BA</label>
    <input type="text" class="form-control" value="{{$data->id}}" readonly="" disabled="disabled" placeholder="No BA">
    <label>Penyelia</label>
    <div class="input-group" style="width:100%;">
      <select class="select2" name="penyelia" style="width: 100%;">
        <option selected="selected" value="{{$data->penyelia}}">{{$data->penyelia}}</option>
        @foreach($penyelia as $penyelia)
          <option value="{{$penyelia->nama}}">{{$penyelia->nama}}</option>
        @endforeach
      </select>
    </div><!-- /input-group -->
    <label>Operator</label>
    <div class="input-group" style="width:100%;">
      <select class="select2" name="operator" style="width: 100%;">
        <option value="{{$data->operator}}" selected="" >{{$data->operator}}</option>
        @foreach($operator as $operator)
          <option value="{{$operator->nama}}">{{$operator->nama}}</option>
        @endforeach
      </select>
    </div><!-- /input-group -->
    <label>Cabang</label>
    <div class="input-group" style="width:100%;">
      <select class="select2" name="cabang" id="cabang" style="width: 100%;">
        @foreach($cabang as $cabang)
          <option value="{{$cabang->id}}">{{$cabang->nama}}</option>
        @endforeach
      </select>
    </div><!-- /input-group -->
    <label>Jam:</label>
    <div class="input-group ">
      <input type="text" name="jam" id="jam" value="{{$data->jam}}" class="form-control" data-mask>
      <div class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
      </div>
    </div><!-- /.input group -->
    <label>Temuan:</label>
    <select class="select2" id="temuan" name="temuan" onchange="temuan()" style="width: 100%;">
      <option value="{{$data->temuan}}" selected="">{{$data->temuan}}</option>
      <option value="kurang">Kurang</option>
      <option value="lebih">Lebih</option>
      <option value="palsu">Palsu</option>
      <option value="mutilasi">Mutilasi</option>
      <option value="beda-denom">Beda Denom</option>
    </select>
  </div><!--kolom pertama-->

  <!--kolom kedua-->
  <div class="col-md-6">
    <!-- /input-group dan label nya -->
    <label>Tanggal Ditemukan:</label>
    <div class="input-group date" data-date-format="yyyy-mm-dd" data-provide="datepicker">
      <input type="text" name="tanggal_ditemukan" value="{{$data->tanggal_ditemukan}}" class="form-control datepicker" id="datepicker">
      <div class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
      </div>
    </div><!-- /.input group -->
    <label>Manager</label>
      <select class="select2" name="manager" style="width: 100%;">
        <option value="{{$data->manajer}}" selected="">{{$data->manajer}}</option>
        @foreach($manajer as $manajer)
          <option value="{{$manajer->nama}}">{{$manajer->nama}}</option>
        @endforeach
      </select>
    <!-- /input-group dan label nya -->
    <label>Saksi</label>
    <select class="select2" name="saksi" style="width: 100%;">
      <option value="{{$data->saksi}}" selected="" >{{$data->saksi}}</option>
      @foreach($saksi as $saksi)
          <option value="{{$saksi->nama}}">{{$saksi->nama}}</option>
      @endforeach
    </select>
    <!-- /input-group dan label nya data diisi dari API -->
    <label>Teller</label>
    <select id="teler" style="width: 100%;" name="teler[]" required="" class="select2" multiple="multiple" data-placeholder="Pilih Teler" >
    </select>
    <!-- /input-group dan label nya -->
    <label>Tanggal Ban-banan:</label>
    <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd">
      <input type="date" name="tanggal_ban_banan" value="{{$data->tanggal_banbanan}}" class="form-control datepicker">
      <div class="input-group-addon">
        <span class="glyphicon glyphicon-calendar"></span>
      </div>
    </div><!-- /.input group -->
    <label>Denom:</label>
    <select id="denom" class="select2" name="denom" style="width: 100%;">
      <option value="100000">100.000,00</option>
      <option value="50000">50.000,00</option>
      <option value="20000">20.000,00</option>
      <option value="10000">10.000,00</option>
      <option value="5000">5.000,00</option>
      <option value="2000">2.000,00</option>
      <option value="1000">1.000,00</option>
    </select>
    <p id="tes">P :{{ (Request::is('lapran') ? 'class=active' : '')}}</p>
  </div><!--kolom kedua-->
</div><!--row-->
<!--div untuk menangani temuan kurang, lebih, palsu, mutilasi-->
<div class="row" id="div-temuan">
  <div class="col-md-4">
    <label>Jumlah:</label>
    <input type="text" name="jumlah" id="jumlah-temuan" required="" class="form-control" placeholder="Jumlah lembar" value="">
  </div>
  <div class="col-md-4">
    <label>Total:</label>
    <input type="text" name="total" id="total-temuan" readonly="" class="form-control" placeholder="Total lebih/kurang">
  </div>
  <div class="col-md-4">
    <label>No seri:</label>
    <input type="text" name="no_seri" required="" id="nomer-seri" class="form-control"  data-mask value="">

  </div>
</div>

<!--div untuk menangani beda denom-->
<div class="row" id="div-temuan-bedadenom" style="display:none;">
  <div class="col-md-4">
    <label>Jumlah lembar beda :</label>
    <input type="text" class="form-control" id="jumlah-beda-denom" placeholder="Jumlah lembar yang beda">
    <label>Total Kurang:</label>
    <input type="text" class="form-control numformat" id="total-beda" disabled="disabled" placeholder="Total otomatis muncul">
  </div>
  <div class="col-md-8">
    <div class="row" id="denom-beda-1">
      <div class="col-md-6">
        <label>Denom berbeda 1:</label>
        <select class="select2" id="denom-beda1" style="width: 100%;">
          <option value="100000">100.000,00</option>
          <option value="50000">50.000,00</option>
          <option value="20000">20.000,00</option>
          <option value="10000">10.000,00</option>
          <option value="5000">5.000,00</option>
          <option value="2000">2.000,00</option>
          <option value="1000">1.000,00</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Nomer Seri:</label>
      <input type="text" class="form-control" placeholder="Nomer Seri Denom Beda">
      </div>
    </div>
    <div class="row" id="denom-beda-2" style="display:none;">
      <div class="col-md-6">
        <label>Denom berbeda 2:</label>
        <select  class="select2" id="denom-beda2" style="width: 100%;">
          <option value="100000">100.000,00</option>
          <option value="50000">50.000,00</option>
          <option value="20000">20.000,00</option>
          <option value="10000">10.000,00</option>
          <option value="5000">5.000,00</option>
          <option value="2000">2.000,00</option>
          <option value="1000">1.000,00</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Nomer Seri:</label>
      <input type="text" class="form-control" placeholder="Nomer Seri Denom Beda">
      </div>
    </div>
    <div class="row" id="denom-beda-3"  style="display:none;">
      <div class="col-md-6">
        <label>Denom berbeda 3:</label>
        <select  class="select2" id="denom-beda3" style="width: 100%;">
          <option value="100000">100.000,00</option>
          <option value="50000">50.000,00</option>
          <option value="20000">20.000,00</option>
          <option value="10000">10.000,00</option>
          <option value="5000">5.000,00</option>
          <option value="2000">2.000,00</option>
          <option value="1000">1.000,00</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Nomer Seri:</label>
      <input type="text" class="form-control" placeholder="Nomer Seri Denom Beda">
      </div>
    </div>
    <div class="row" id="denom-beda-4" style="display:none;">
      <div class="col-md-6">
        <label>Denom berbeda 4:</label>
        <select  class="select2" id="denom-beda4" style="width: 100%;">
          <option value="100000">100.000,00</option>
          <option value="50000">50.000,00</option>
          <option value="20000">20.000,00</option>
          <option value="10000">10.000,00</option>
          <option value="5000">5.000,00</option>
          <option value="2000">2.000,00</option>
          <option value="1000">1.000,00</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Nomer Seri:</label>
      <input type="text" class="form-control" placeholder="Nomer Seri Denom Beda">
      </div>
    </div>
    <div class="row" id="denom-beda-5" style="display:none;">
      <div class="col-md-6">
        <label>Denom berbeda 5:</label>
        <select  class="select2" id="denom-beda5" style="width: 100%;">
          <option value="100000">100.000,00</option>
          <option value="50000">50.000,00</option>
          <option value="20000">20.000,00</option>
          <option value="10000">10.000,00</option>
          <option value="5000">5.000,00</option>
          <option value="2000">2.000,00</option>
          <option value="1000">1.000,00</option>
        </select>
      </div>
      <div class="col-md-6">
        <label>Nomer Seri:</label>
      <input type="text" class="form-control" placeholder="Nomer Seri Denom Beda">
      </div>
    </div>
  </div>
</div>