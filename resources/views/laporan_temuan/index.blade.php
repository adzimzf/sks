@extends('layouts.master')
@section('container')
<div class="box-body">
<table id="laporan_temuan" class="table table-hover table-bordered">
	<thead>
		<td style="width:5%;">id</td>
		<td style="width:8%;">no_ba</td>
		<td style="width:10%;">tanggal ditemukan</td>
		<td style="width:10%;">Penyelia</td>
		<td style="width:10%;">Manager</td>
		<td style="width:10%;">Operator</td>
		<td style="width:10%;">Saksi</td>
		<td style="width:5%;">Cabang</td>
		<td style="width:10%;">teler</td>
		<td style="width:5%;">Jam</td>
		<td style="width:13%;">Tanggal Ban-banan</td>
		<td style="width:13%;">Temuan</td>
		<td style="width:10%;">Denom</td>
		<td style="width:10%;">Jumlah</td>
		<td style="width:10%;">No Seri</td>
		<td style="width:10%;">Total</td>
	</thead>
	<tbody>
		
	</tbody>
</table>	
</div>

<script type="text/javascript">
	$(function () {
    $("#laporan_temuan").DataTable({
        "aLengthMenu":[[5,15,30,-1],[5,15,30,"All"]],
        "pageLength":5,
        scrollY:500,
        scrollX:true,
        columnDef:[{
            targets:[0],
            orderData:[0,1]
        },{
            targets:[1],
            orderData:[1,0]
        },{
            targets:[4],
            orderData:[4,0]
        }
        ],
    	ajax:{
    		url: "{{url('laporantemuanajax')}}",
    		dataSrc:''
    	},columns:[
    		{data:'id'},
    		{data:'no_ba'},
    		{data:'tanggal_ditemukan'},
    		{data:'penyelia'},
    		{data:'manajer'},
    		{data:'operator'},
    		{data:'saksi'},
    		{data:'cabang'},
    		{data:'teler'},
    		{data:'jam'},
    		{data:'tanggal_banbanan'},
    		{data:'temuan'},
    		{data:'denom'},
    		{data:'jumlah'},
    		{data:'no_seri'},
    		{data:'total'}
    	]
    });
    
  });
</script>
@endsection