@extends('layouts.master')
@section('container')
@include('tulis_ba.modal')
@include('tulis_ba.modalPrint')
<!--box default-->
<div class="box box-default">
<!--box header-->
<div class="box-header with-border">
  <h3 class="box-title">Data-data BA Cabang</h3>
  <button class="btn btn-success pull-right"  data-toggle="modal" href='#modal-id'><i class="fa fa-plus"></i>   Teler</button>
</div><!--/box header-->
<!--box body-->
<div class="box-body">
  <!--bikin form-->
  <form action="cetak" method="post" id="formBa">
    @include('tulis_ba.form')
    <div class="row">
      <!--kolom-->
      <div class="col-md-12" style="margin-top: 20px;">
        <div class="btn btn-group" style="width: 100%;">
        <center>
          <button name="btn" type="btn" class="btn btn-danger" value="pdf" style="width: 49%;">PDF</button>
          <button id="print" name="btn" type="button" class="btn btn-primary" value="print" style="width: 49%" data-toggle="modal" href='#modalKonfirmasiPrint'>Cetak</button>
        </center>
        </div>
      </div><!--/kolom-->
    </div><!--/row untuk button-->
    <input type="hidden" name="printah" value="" id="printah">
  </form>

</div><!--/box body-->
</div>
<!--scrpit for element-->
<script type="text/javascript" src="{{asset('js/page/tulisba.js')}}">
</script>
@endsection